<?php

namespace App\Providers;

use App\Exceptions\TelegramException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Http::macro('telegram', function () {
            return Http::baseUrl('https://api.telegram.org/bot'.config('services.telegram.bot'))
                ->retry(3, 100)
                ->timeout(10)
                ->throw(function (Response $response) {
                    throw new TelegramException();
                });
        });

        Http::macro('fit', function () {
            return Http::baseUrl('https://www.googleapis.com/fitness/v1/')
                ->retry(2, 200)
                ->timeout(10);
        });
    }
}
