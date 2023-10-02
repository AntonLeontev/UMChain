<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferralLinkCreateRequest;
use App\Models\ReferralLink;
use App\Services\Telegram\TelegramService;

class ReferralLinkController extends Controller
{
    public function create(ReferralLinkCreateRequest $request)
    {
        ReferralLink::create([
            'user_id' => auth()->id(),
            'umt_percent' => settings()->umt_percent,
            'usdt_percent' => settings()->usdt_percent,
        ]);

        TelegramService::sendMessage('Новая заявка на реф ссылку');
    }
}
