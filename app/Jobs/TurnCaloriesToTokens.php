<?php

namespace App\Jobs;

use App\Models\CalorySpend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TurnCaloriesToTokens implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
            dispatch(new SplitTokens($spend, $tokensPerCalory));
        }
    }
}
