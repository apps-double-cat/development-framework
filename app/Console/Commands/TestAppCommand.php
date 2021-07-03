<?php

namespace App\Console\Commands;

use DoubleC\LaravelShopify\Models\Shop;
use Illuminate\Console\Command;
use JetBrains\PhpStorm\NoReturn;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    #[NoReturn]
    public function handle(): void
    {
        $shop = Shop::find(2);
        dd($shop->access_token);
    }
}
