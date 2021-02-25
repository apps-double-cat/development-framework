<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    /**
     * Home page
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        dd(auth()->user());
        return view('welcome');
    }
}
