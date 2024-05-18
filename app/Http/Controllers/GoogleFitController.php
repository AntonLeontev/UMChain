<?php

namespace App\Http\Controllers;

use App\Services\Fit\Exception\InsufficientScopes;
use App\Services\Fit\FitService;
use App\Services\GoogleOAuth\Exceptions\InvalidGrantException;
use Illuminate\Http\JsonResponse;

class GoogleFitController extends Controller
{
    public function calories(FitService $service): JsonResponse
    {
        try {
            $calories = $service->caloriesForToday();
        } catch (InvalidGrantException $e) {
            return response()->json('invalid grant', 400);
        } catch (InsufficientScopes $e) {
            return response()->json('insufficient scopes', 400);
        }

        // return response()->json('insufficient scopes', 400);
        return response()->json($calories);
    }
}
