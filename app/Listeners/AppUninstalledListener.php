<?php

namespace App\Listeners;

use App\Events\AppUninstalledEvent;

class AppUninstalledListener
{
    /**
     * Handle the event.
     * @param AppUninstalledEvent $event
     * @return void
     */
    public function handle(AppUninstalledEvent $event)
    {
        logger()->info("{$event->shop()->shop}: is uninstalled !");
    }
}
