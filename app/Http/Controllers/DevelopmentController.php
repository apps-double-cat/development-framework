<?php

namespace App\Http\Controllers;

use DoubleC\LaravelShopify\Traits\InstalledShop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DevelopmentController extends Controller
{
    use InstalledShop;

    /**
     * Home page
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        return view('welcome');
    }
}
