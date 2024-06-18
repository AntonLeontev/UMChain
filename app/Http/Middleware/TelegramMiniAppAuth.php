<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use TgWebValid\TgWebValid;

class TelegramMiniAppAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->hasHeader('X-Telegram-Authorization')) {
            $tgWebValid = new TgWebValid(config('services.telegram.mini_app_bot_token'), true);
            $initData = $tgWebValid->bot()->validateInitData($request->header('X-Telegram-Authorization'));

            abort_unless($initData, Response::HTTP_UNAUTHORIZED, 'Invalid Telegram init data');

            $user = User::firstOrCreate(
                ['telegram_id' => $initData->user->id],
                [
                    'name' => $initData->user->firstName ?? $initData->user->username,
                    'quiz_is_done' => false,
                ]
            );

            Auth::login($user);
        }

        return $next($request);
    }
}
