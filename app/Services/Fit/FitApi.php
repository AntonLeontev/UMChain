<?php

namespace App\Services\Fit;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FitApi
{
    /**
     * @param  int  $bucketByTime  На какие промежутки времени разбить данные, мс
     */
    public static function aggregateCalories(int $bucketByTime, int $startTimeMillis, int $endTimeMillis, ?User $user = null): Response
    {
        return Http::fit()
            ->withHeader('Authorization', 'Bearer '.google_access_token($user ?? auth()->user()))
            ->post('users/me/dataset:aggregate', [
                'aggregateBy' => [
                    [
                        'dataTypeName' => 'com.google.calories.expended',
                    ],
                ],
                'bucketByTime' => ['durationMillis' => $bucketByTime],
                'startTimeMillis' => $startTimeMillis,
                'endTimeMillis' => $endTimeMillis,
            ]);
    }

    public static function getDataSources(): Response
    {
        return Http::fit()
            ->get('users/me/dataSources');
    }
}
