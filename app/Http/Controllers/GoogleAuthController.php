<?php

namespace App\Http\Controllers;

use App\Enums\DataSourceType;
use App\Models\DataSource;
use App\Services\Fit\GoogleApi;
use App\Services\GoogleOAuth\GoogleOAuthApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class GoogleAuthController extends Controller
{
    public function auth()
    {
        $redirect = route('google.code');
        $clientId = config('services.google.client_id');

        $query = http_build_query([
            'scope' => 'https://www.googleapis.com/auth/fitness.activity.read https://www.googleapis.com/auth/fitness.body.read openid profile email',
            'access_type' => 'offline',
            'include_granted_scopes' => 'true',
            'response_type' => 'code',
            'redirect_uri' => $redirect,
            'client_id' => $clientId,
        ]);

        return redirect("https://accounts.google.com/o/oauth2/v2/auth?$query");
    }

    public function code(Request $request)
    {
        $response = GoogleOAuthApi::getTokenByCode($request->code);

        $infoResponse = GoogleApi::userinfo($response->json('access_token'));

        $email = $infoResponse->json('email');

        $source = DataSource::where('login', $email)->first();

        if (! is_null($source) && $source->user_id !== auth()->id()) {
            $message = __('errors.google.duplicate', ['email' => $email]);

            $cookie = Cookie::make('dataSourceError', $message, httpOnly: false);

            return redirect('/cabinet/fit/profile')->withCookie($cookie);
        }

        if (is_null($response->json('refresh_token'))) {
            GoogleOAuthApi::revoke($response->json('access_token'));

            return to_route('google.auth');
        }

        if (! is_null($source)) {
            DataSource::where('user_id', auth()->id())->update(['is_active' => false]);

            $source->update([
                'is_active' => true,
                'data->expires' => now()->addSeconds($response->json('expires_in') - 15),
                'data->accessToken' => $response->json('access_token'),
                'data->refreshToken' => $response->json('refresh_token'),
            ]);

            return redirect('/cabinet/fit/profile');
        }

        DataSource::create([
            'user_id' => auth()->id(),
            'login' => $email,
            'type' => DataSourceType::google,
            'data' => [
                'accessToken' => $response->json('access_token'),
                'refreshToken' => $response->json('refresh_token'),
                'expires' => now()->addSeconds($response->json('expires_in') - 15),
            ],
            'is_active' => true,
        ]);

        return redirect('/cabinet/fit/profile');
    }
}
