<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use TgWebValid\TgWebValid;

class TelegramAuthController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $tgWebValid = new TgWebValid(config('services.telegram.mini_app_bot_token'), true);
        $initData = $tgWebValid->bot()->validateInitData($request->get('telegram_raw_data'));

        abort_unless($initData, Response::HTTP_UNAUTHORIZED, 'Invalid Telegram init data');

        $user = User::firstOrCreate(
            ['telegram_id' => $initData->user->id],
            [
                'name' => $initData->user->firstName ?? $initData->user->username,
                'quiz_is_done' => false,
            ]
        );

        Auth::login($user);

        return response()->json($user);
    }
}
