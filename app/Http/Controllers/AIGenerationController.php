<?php

namespace App\Http\Controllers;

use App\Services\OpenAI\OpenAIService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AIGenerationController extends Controller
{
    public function __construct(public OpenAIService $openai)
    {
    }

    public function generateMenu(Request $request): JsonResponse
    {
        $fat = $request->get('fat');
        $carbs = $request->get('carbs');
        $proteins = $request->get('proteins');
        $calories = $request->get('calories');
        $menuType = $request->get('menu_type');

        $menu = $this->openai->generateMenu($fat, $carbs, $proteins, $calories, $menuType);

        return response()->json(['menu' => $menu]);
    }
}
