<?php

namespace App\Listeners;

use App\Services\Telegram\TelegramService;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWithdrawalCreatedTelegramNotification implements ShouldQueue
{
    public function handle(object $event): void
    {
        TelegramService::sendMessage('Получена заявка на вывод UMCT');
    }
}
