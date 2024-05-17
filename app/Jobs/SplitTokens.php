<?php

namespace App\Jobs;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Models\CalorySpend;
use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class SplitTokens implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public CalorySpend $spend, public float $tokensPerCalory)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = $this->spend->user;

        DB::beginTransaction();

        // $this->spend->tokens = $this->spend->calories_sum;
        // $this->spend->save();

        // $user->umt += $this->spend->tokens;
        // $user->save();

        // Transaction::create([
        //     'user_id' => $this->spend->user_id,
        //     'amount' => $this->spend->tokens,
        //     'account_type' => AccountType::umt,
        //     'direction' => TransactionDirection::income,
        //     'description' => 'Calories turned into tokens',
        // ]);

        $this->spend->tokens = $this->spend->calories_sum * $this->tokensPerCalory;
        $this->spend->save();

        $user->umt += $this->spend->tokens * 0.9;
        $user->save();

        $appTokens = appTokens();

        if (is_null($user->agent_id)) {
            $additionalSystemTokens = $this->spend->tokens * 0.03;
        } else {
            $additionalSystemTokens = 0;

            $agent = $user->agent;
            $agent->umt += $this->spend->tokens * 0.03;
            $agent->save();

            Transaction::create([
                'user_id' => $agent->id,
                'amount' => $this->spend->tokens * 0.03,
                'account_type' => AccountType::umt,
                'direction' => TransactionDirection::income,
                'description' => 'Tokens from referral',
            ]);
        }

        $appTokens->system += $this->spend->tokens * 0.05 + $additionalSystemTokens;
        $appTokens->miners += $this->spend->tokens * 0.02;
        $appTokens->save();

        Transaction::create([
            'user_id' => $this->spend->user_id,
            'amount' => $this->spend->tokens * 0.9,
            'account_type' => AccountType::umt,
            'direction' => TransactionDirection::income,
            'description' => 'Calories turned into tokens',
        ]);

        DB::commit();
    }
}
