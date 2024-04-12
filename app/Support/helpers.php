<?php

use App\Models\Banner;
use App\Models\Setting;
use App\Models\User;
use App\Services\GoogleOAuth\GoogleOAuthApi;
use Illuminate\Support\Collection;

if (! function_exists('settings')) {
    function settings(): Setting
    {
        if (cache('settings', null)) {
            return cache('settings');
        }

        $settings = Setting::first();

        cache(['settings' => $settings]);

        return $settings;
    }
}

if (! function_exists('banners')) {
    function banners(): Collection
    {
        if (cache('banners', null)) {
            return cache('banners');
        }

        $banners = Banner::where('is_active', true)->get();

        cache(['banners' => $banners]);

        return $banners;
    }
}

if (! function_exists('google_access_token')) {
    function google_access_token(): ?string
    {
        if (! auth()->check()) {
            return null;
        }

        if (is_null(auth()->user()->google_access_token)) {
            return null;
        }

        if (auth()->user()->google_expires->isPast()) {
            $response = GoogleOAuthApi::getTokenByRefresh(auth()->user()->google_refresh_token);

            $user = User::find(auth()->id());
            $user->update([
                'google_access_token' => $response->json('access_token'),
                'google_expires' => now()->addSeconds($response->json('expires_in') - 15),
            ]);

            return $user->google_access_token;
        }

        return auth()->user()->google_access_token;
    }
}
