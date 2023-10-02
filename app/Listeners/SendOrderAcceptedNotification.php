<?php

namespace App\Listeners;

use App\Events\OrderAccepted;
use App\Models\User;
use App\Notifications\OrderAcceptedNotification;

class SendOrderAcceptedNotification
{
    public function handle(OrderAccepted $event): void
    {
        User::find($event->order->user_id)->notify(new OrderAcceptedNotification($event->order));
    }
}
