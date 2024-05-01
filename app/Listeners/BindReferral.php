<?php

namespace App\Listeners;

use App\Events\RegisteredByReferral;
use App\Models\ReferralLink;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class BindReferral implements ShouldQueue
{
    public function handle(RegisteredByReferral $event): void
    {
        $refLink = ReferralLink::find($event->referral);

        $registeredUser = User::where('email', $event->email)->first();

        $registeredUser->update(['agent_id' => $refLink->user_id]);
    }
}
