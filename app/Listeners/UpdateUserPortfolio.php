<?php

namespace App\Listeners;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Events\OrderAccepted;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class UpdateUserPortfolio
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderAccepted $event): void
    {
        $order = $event->order;

        DB::transaction(function () use ($order) {
            $order->user->update(['umt' => $order->user->umt + $order->umt]);

            Transaction::create([
                'user_id' => $order->user->id,
                'direction' => TransactionDirection::income,
                'amount' => $order->umt,
                'description' => 'UMT purchase',
                'account_type' => AccountType::umt,
            ]);
        });
    }
}
