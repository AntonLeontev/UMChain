<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileAppAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->hasHeader('X-Mobile-App-Authorization')) {
            abort(Response::HTTP_UNAUTHORIZED, 'Invalid mobile app token');
        }

        if ($request->header('X-Mobile-App-Authorization') !== config('setup.mobile_app_authorization')) {
            abort(Response::HTTP_UNAUTHORIZED, 'Invalid mobile app token');
        }

        return $next($request);
    }
}
