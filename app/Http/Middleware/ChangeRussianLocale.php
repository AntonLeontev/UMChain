<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationMiddlewareBase;
use Symfony\Component\HttpFoundation\Response;

class ChangeRussianLocale extends LaravelLocalizationMiddlewareBase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('locale') === 'ru' || request()->is('ru*')) {
            session(['locale' => 'en']);

            $redirection = app('laravellocalization')->getNonLocalizedURL();

            app('session')->reflash();

            return new RedirectResponse($redirection, 302, ['Vary' => 'Accept-Language']);
        }

        return $next($request);
    }
}
