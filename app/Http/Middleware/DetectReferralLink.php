<?php

namespace App\Http\Middleware;

use App\Models\ReferralLink;
use App\Models\ReferralLinkClick;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetectReferralLink
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		if (! $request->has('ref')) {
			return $next($request);
		}

		if (ReferralLink::query()->where('id', $request->get('ref'))->exists()) {
			ReferralLinkClick::create(['referral_link_id' => $request->get('ref')]);
		}

		session(['referral' => $request->get('ref')]);
		
        return $next($request);
    }
}
