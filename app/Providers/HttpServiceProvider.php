<?php

namespace App\Providers;

use App\Exceptions\GoogleFitException;
use App\Exceptions\TelegramException;
use App\Services\Fit\Exception\InsufficientScopes;
use App\Services\OpenAI\Exceptions\OpenAIException;
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
                ->throw(function (Response $response) {
                    if ($response->json('error.message') === 'Request had insufficient authentication scopes.') {
                        throw new InsufficientScopes($response);
                    }

                    throw new GoogleFitException($response);
                })
                ->retry(2, 200)
                ->timeout(10);
        });

        Http::macro('openai', function () {
            return Http::withHeaders(['Authorization' => 'Bearer '.config('services.openAI.token')])
                ->timeout(60)
                ->asJson()
                ->acceptJson()
                ->baseUrl('https://api.openai.com/v1')
                ->throw(function (Response $response) {
                    throw new OpenAIException($response);
                });
        });
    }
}
