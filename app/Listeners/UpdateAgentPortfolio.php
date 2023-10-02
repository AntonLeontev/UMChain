<?php

namespace App\Listeners;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Events\OrderAccepted;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateAgentPortfolio
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

        if (empty($order->user->agent_id)) {
            return;
        }

        $agent = User::find($order->user->agent_id);

        if (empty($agent->activeRefLink)) {
            return;
        }

        DB::transaction(function () use ($agent, $order) {
            DB::table('users')
                ->where('id', $agent->id)
                ->update([
                    'umt' => $agent->umt * 100000000 + $order->umt * 100000000 * $agent->activeRefLink->umt_percent / 100,
                    'usdt' => $agent->usdt * 100000000 + $order->usdt * 100000000 * $agent->activeRefLink->usdt_percent / 100,
                ]
                );

            DB::table('transactions')
                ->insert([
                    'user_id' => $agent->id,
                    'direction' => TransactionDirection::income,
                    'amount' => $order->umt * 100000000 * $agent->activeRefLink->umt_percent / 100,
                    'description' => 'Referral fee',
                    'account_type' => AccountType::umt,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
                );

            DB::table('transactions')
                ->insert([
                    'user_id' => $agent->id,
                    'direction' => TransactionDirection::income,
                    'amount' => $order->usdt * 100000000 * $agent->activeRefLink->usdt_percent / 100,
                    'description' => 'Referral fee',
                    'account_type' => AccountType::usdt,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
                );
        });
    }
}
