<?php

namespace App\Http\Controllers;

use DoubleC\LaravelShopify\Services\SubscriptionHistoryService\SubscriptionHistoryService;
use DoubleC\LaravelShopify\Traits\InstalledShop;
use DoubleC\LaravelShopify\Traits\ShopSubscription;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DevelopmentController extends Controller
{
    use ShopSubscription;
    use InstalledShop;

    /**
     * @return Application|Factory|View
     */
    public function index(SubscriptionHistoryService $subscriptionHistoryService)
    {
        return view('welcome');
    }
}
