<?php

namespace App\Http\Controllers;

use DoubleC\LaravelShopify\Traits\ShopSubscription;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DevelopmentController extends Controller
{
    use ShopSubscription;

    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        return view('welcome');
    }
}
