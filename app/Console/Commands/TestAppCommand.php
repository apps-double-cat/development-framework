<?php

namespace App\Console\Commands;

use DoubleC\LaravelShopify\Services\SettingService\SettingService;
use Illuminate\Console\Command;
use JetBrains\PhpStorm\NoReturn;

class TestAppCommand extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';

    #[NoReturn]
    public function handle(): void
    {
        /** @var SettingService $settingService */
        $settingService = app(SettingService::class);
        dd($settingService->all(shop_id: 1));
    }
}
