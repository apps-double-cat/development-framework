<?php

namespace App\Listeners;

use DoubleC\LaravelShopify\Events\AppInstalledEvent;

class AppInstalledListener
{

    /**
     * Run when app installed
     * @param AppInstalledEvent $event
     */
    public function handle(AppInstalledEvent $event)
    {
        logger()->info("{$event->shop()->shop}: is installed !");
    }
}
