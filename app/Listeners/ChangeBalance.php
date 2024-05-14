<?php

namespace App\Listeners;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Events\WithdrawalSent;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class ChangeBalance
{
    public function handle(WithdrawalSent $event): void
    {
        $user = $event->withdrawal->load('user')->user;

        DB::beginTransaction();

        $user->umt -= $event->withdrawal->amount;
        $user->umt_frozen -= $event->withdrawal->amount;
        $user->save();

        Transaction::create([
            'user_id' => $user->id,
            'direction' => TransactionDirection::outcome,
            'amount' => $event->withdrawal->amount,
            'description' => 'Withdrawal',
            'account_type' => AccountType::umt,
        ]);

        DB::commit();
    }
}
