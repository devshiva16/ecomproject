<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderTransationController;
use App\Http\Controllers\WishlistController;

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

Route::get('dashboard', function () {
    return view('admin.dashboard');
});


// Product
Route::get('product', [ProductController::class,'index']);

Route::get('product-detail', [ProductController::class,'show']);

Route::get('temp',[TempController::class,'index']);

// Customer
Route::get('customer',[CustomerController::class,'index']);

Route::get('cart',[CartController::class,'index']);

Route::get('wishlist', [WishlistController::class,'index']);

Route::get('transation',[OrderTransationController::class,'index']);