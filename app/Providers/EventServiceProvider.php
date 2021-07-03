<?php

namespace App\Providers;

use App\Listeners\AppInstalledListener;
use App\Listeners\AppUninstalledListener;
use App\Listeners\ShopUpdatedListener;
use DoubleC\LaravelShopify\Events\AppInstalledEvent;
use DoubleC\LaravelShopify\Events\AppUninstalledEvent;
use DoubleC\LaravelShopify\Events\ShopUpdatedEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AppInstalledEvent::class => [
            AppInstalledListener::class
        ],
        AppUninstalledEvent::class => [
            AppUninstalledListener::class
        ],
        ShopUpdatedEvent::class => [
            ShopUpdatedListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
