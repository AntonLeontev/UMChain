<?php

use App\Enums\DataSourceType;
use App\Models\ApplicationToken;
use App\Models\Banner;
use App\Models\Setting;
use App\Models\User;
use App\Services\GoogleOAuth\GoogleOAuthApi;
use Illuminate\Support\Carbon;
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
    function google_access_token(?User $user): ?string
    {
        if (is_null($user)) {
            return null;
        }

        $source = $user->dataSources->where('type', DataSourceType::google)->first();

        if (is_null($source)) {
            return null;
        }

        if (Carbon::parse($source->data->expires)->isPast()) {
            $response = GoogleOAuthApi::getTokenByRefresh($source->data->refreshToken);

            $source->update([
                'data->expires' => now()->addSeconds($response->json('expires_in') - 15),
                'data->accessToken' => $response->json('access_token'),
            ]);

            return $response->json('access_token');
        }

        return $source->data->accessToken;
    }
}

if (! function_exists('appTokens')) {
    function appTokens(): ApplicationToken
    {
        return ApplicationToken::first();
    }
}
