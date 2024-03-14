<?php

namespace App\Services\Fit;

class FitService
{
    public function __construct(public FitApi $api)
    {
    }

    public function caloriesForToday(): int|float
    {
        $bucket = 3600 * 24 * 1000;
        $start = now()->startOfDay()->timestamp * 1000;
        $end = now()->endOfDay()->timestamp * 1000;

        return $this->api->aggregateCalories($bucket, $start, $end)
            ->json('bucket.0.dataset.0.point.0.value.0.fpVal');
    }
}
