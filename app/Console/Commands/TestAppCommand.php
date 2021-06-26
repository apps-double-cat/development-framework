<?php

namespace App\Console\Commands;

use DoubleC\LaravelShopify\Models\Shop;
use DoubleC\LaravelShopify\Shopify\Resource\AdminApi\OnlineStore\Asset;
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
        $api = new Asset(generateClientApi($shop));
        dd($api->get(119365664936, 'layout/theme.liquid'));
    }
}
