<?php

namespace App\Console\Commands;

use DoubleC\LaravelShopify\Models\Shop;
use DoubleC\LaravelShopify\Repositories\ShopRepository\ShopRepository;
use Illuminate\Console\Command;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    public function handle(): void
    {
    }
}
