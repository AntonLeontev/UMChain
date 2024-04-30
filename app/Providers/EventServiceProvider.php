<?php

namespace App\Providers;

use App\Events\OrderAccepted;
use App\Events\ReferralLinkActivated;
use App\Events\RegisteredByReferral;
use App\Events\WithdrawalSent;
use App\Listeners\BindReferral;
use App\Listeners\SendOrderAcceptedNotification;
use App\Listeners\SendReferralLinkActivatedNotification;
use App\Listeners\SendWithdrawSentNotification;
use App\Listeners\UpdateAgentPortfolio;
use App\Listeners\UpdateUserPortfolio;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        OrderAccepted::class => [
            UpdateUserPortfolio::class,
            UpdateAgentPortfolio::class,
            SendOrderAcceptedNotification::class,
        ],

        WithdrawalSent::class => [
            SendWithdrawSentNotification::class,
        ],

        ReferralLinkActivated::class => [
            SendReferralLinkActivatedNotification::class,
        ],

        RegisteredByReferral::class => [
            BindReferral::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
