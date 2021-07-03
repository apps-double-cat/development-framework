<?php

namespace App\Listeners;

use DoubleC\LaravelShopify\Events\ShopUpdatedEvent;

class ShopUpdatedListener
{
    /**
     * Create the event listener.
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     * @param ShopUpdatedEvent $event
     * @return void
     */
    public function handle(ShopUpdatedEvent $event)
    {
        logger($event->getShop()->toArray());
        logger($event->getContent());
    }
}
