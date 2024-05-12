<?php

namespace App\Services\GoogleOAuth;

use App\Services\GoogleOAuth\Exceptions\InvalidGrantException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class GoogleOAuthApi
{
    public static function getTokenByCode(string $code): Response
    {
        return Http::asForm()
            ->post('https://oauth2.googleapis.com/token', [
                'code' => $code,
                'client_id' => config('services.google.client_id'),
                'client_secret' => config('services.google.secret'),
                'redirect_uri' => route('google.code'),
                'grant_type' => 'authorization_code',
            ]);
    }

    public static function getTokenByRefresh(string $token): Response
    {
        return Http::asForm()
            ->post('https://oauth2.googleapis.com/token', [
                'refresh_token' => $token,
                'client_id' => config('services.google.client_id'),
                'client_secret' => config('services.google.secret'),
                'grant_type' => 'refresh_token',
            ])
            ->throw(function (Response $response) {
                if ($response->status() === 400 && $response->json('error') === 'invalid_grant') {
                    throw new InvalidGrantException();
                }

                throw new \Exception($response->body());
            });
    }

    public static function revoke(string $token): Response
    {
        return Http::asForm()
            ->post('https://oauth2.googleapis.com/revoke', [
                'token' => $token,
            ])
            ->throw(function (Response $response) {
                throw new \Exception($response->body());
            });
    }
}
