<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\GoogleOAuth\GoogleOAuthApi;
use Illuminate\Http\Request;

class GoogleAuthController extends Controller
{
    public function auth()
    {
        $redirect = route('google.code');
        $clientId = config('services.google.client_id');

        $query = http_build_query([
            'scope' => 'https://www.googleapis.com/auth/fitness.activity.read',
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

        User::find(auth()->id())
            ->update([
                'google_access_token' => $response->json('access_token'),
                'google_refresh_token' => $response->json('refresh_token'),
                'google_expires' => now()->addSeconds($response->json('expires_in') - 15),
            ]);

        return to_route('cabinet.fit.profile');
    }
}
