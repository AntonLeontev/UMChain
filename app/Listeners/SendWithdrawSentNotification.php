<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\WithdrawSent;

class SendWithdrawSentNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $withdrawal = $event->withdrawal;

        User::find($withdrawal->user_id)->notify(new WithdrawSent($withdrawal));
    }
}
