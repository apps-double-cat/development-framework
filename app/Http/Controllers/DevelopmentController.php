<?php

namespace App\Http\Controllers;

use DoubleC\LaravelShopify\Facades\ShopSetting;
use DoubleC\LaravelShopify\Traits\InstalledShop;
use DoubleC\LaravelShopify\Traits\ShopSubscription;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function PHPUnit\Framework\callback;

class DevelopmentController extends Controller
{
    use InstalledShop;
    use ShopSubscription;

    /**
     * Home page
//     * @return Factory|View|Application
     */
    public function index()
    {
        //return $this->shopSubscribe(2);
        return view('welcome');
    }
}
