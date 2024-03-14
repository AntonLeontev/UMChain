<?php

namespace App\Http\Controllers;

use App\Services\Fit\FitService;
use Illuminate\Http\JsonResponse;

class GoogleFitController extends Controller
{
    public function calories(FitService $service): JsonResponse
    {
        return response()->json($service->caloriesForToday());
    }
}
