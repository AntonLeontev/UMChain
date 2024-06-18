<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'telegram' => [
        'bot' => env('TELEGRAM_BOT_TOKEN'),
        'chat' => env('TELEGRAM_CHAT_ID'),
        'mini_app_bot_token' => env('TELEGRAM_MINI_APP_BOT_TOKEN'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'secret' => env('GOOGLE_SECRET'),
    ],

    'openAI' => [
        'token' => env('OPENAI_TOKEN', ''),
    ],
];
