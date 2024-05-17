<?php

namespace App\Jobs;

use App\Models\CalorySpend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class TurnCaloriesToTokens implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        $tokensPerDay = match (true) {
            Carbon::parse('01.07.2024')->isFuture() => 26_666_666.67,
            Carbon::parse('01.09.2024')->isFuture() => 6_451_612.9,
            Carbon::parse('01.06.2025')->isFuture() => 1_465_201.47,
            Carbon::parse('01.06.2026')->isFuture() => 2_191_780.82,
            Carbon::parse('01.06.2029')->isFuture() => 656_934.31,
            Carbon::parse('01.06.2034')->isFuture() => 438_116.10,
            Carbon::parse('31.05.2108')->isFuture() => 150_954.57,
            default => null,
        };

        if (is_null($tokensPerDay)) {
            return;
        }

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
