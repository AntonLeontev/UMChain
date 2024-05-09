<?php

namespace App\Services\Fit;

use App\Models\User;
use Carbon\Carbon;

class FitService
{
    public function __construct(public GoogleApi $api)
    {
    }

    public function caloriesForToday(?User $user = null): int|float
    {
        $bucket = 3600 * 24 * 1000; // сутки в миллисекундах
        $start = now()->startOfDay()->timestamp * 1000;
        $end = now()->endOfDay()->timestamp * 1000;

        $calories = $this->api->aggregateCalories($bucket, $start, $end, $user)
            ->json('bucket.0.dataset.0.point.0.value.0.fpVal');

        if (is_null($calories)) {
            $calories = 0;
        }

        return $calories;
    }

    public function caloriesForYesterday(?User $user = null): int|float
    {
        $bucket = 3600 * 24 * 1000; // сутки в миллисекундах
        $start = now()->subDay()->startOfDay()->timestamp * 1000;
        $end = now()->subDay()->endOfDay()->timestamp * 1000;

        $calories = $this->api->aggregateCalories($bucket, $start, $end, $user)
            ->json('bucket.0.dataset.0.point.0.value.0.fpVal');

        if (is_null($calories)) {
            $calories = 0;
        }

        return $calories;
    }

    public function weightForYesterday(?User $user = null): int|float
    {
        $bucket = 3600 * 24 * 1000; // сутки в миллисекундах
        $start = now()->subDay()->startOfDay()->timestamp * 1000;
        $end = now()->subDay()->endOfDay()->timestamp * 1000;

        $weight = $this->api->aggregateWeight($bucket, $start, $end, $user)
            ->json('bucket.0.dataset.0.point.0.value.0.fpVal');

        if (is_null($weight)) {
            $weight = 0;
        }

        return $weight;
    }

    public function weightForDate(?Carbon $date = null, ?User $user = null): int|float
    {
        $bucket = 3600 * 24 * 1000; // сутки в миллисекундах

        if (is_null($date)) {
            $date = now();
        }

        $start = $date->startOfDay()->timestamp * 1000;
        $end = $date->endOfDay()->timestamp * 1000;

        $weight = $this->api->aggregateWeight($bucket, $start, $end, $user)
            ->json('bucket.0.dataset.0.point.0.value.0.fpVal');

        if (is_null($weight)) {
            $weight = 0;
        }

        return $weight;
    }
}
