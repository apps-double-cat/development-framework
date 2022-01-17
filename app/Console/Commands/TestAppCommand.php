<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JetBrains\PhpStorm\NoReturn;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    #[NoReturn]
    public function handle(): void
    {
        activity('shop-general-update')
            ->shop('tiendungkid')
            ->properties(['received_notify' => false])
            ->log();
    }
}
