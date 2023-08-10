<?php

namespace App\Listeners;

use App\Events\ReferralLinkActivated;
use App\Models\User;
use App\Notifications\ReferralLinkActivatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReferralLinkActivatedNotification
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
    public function handle(ReferralLinkActivated $event): void
    {
        User::find($event->link->user_id)->notify(new ReferralLinkActivatedNotification());
    }
}
