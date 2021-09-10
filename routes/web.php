<?php

use App\Http\Controllers\DevelopmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: middleware(['double-c-shop-auth', 'double-c-activate-shop'])->group(function () {
    Route::get('/', [DevelopmentController::class, 'index']);
});
Route::get('/plans', function (){
    dd('register plan first');
});
