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

class TurnCaloriesToTokens implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $tokensPerDay = config('setup.tokens_per_day');

        $caloriesSum = CalorySpend::query()
            ->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])
            ->sum('calories_sum');

        $tokensPerCalory = $tokensPerDay / $caloriesSum;

        $spends = CalorySpend::query()
            ->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])
            ->where('calories_sum', '>', 0)
            ->lazy();

        foreach ($spends as $spend) {
            DB::beginTransaction();

            $spend->tokens = $spend->calories_sum * $tokensPerCalory;
            $spend->save();

            $spend->user->umt += $spend->tokens;
            $spend->user->save();

            Transaction::create([
                'user_id' => $spend->user_id,
                'amount' => $spend->tokens,
                'account_type' => AccountType::umt,
                'direction' => TransactionDirection::income,
                'description' => 'Calories turned into tokens',
            ]);

            DB::commit();
        }
    }
}
