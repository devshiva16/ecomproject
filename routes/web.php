<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderItumController;
use App\Http\Controllers\OrderTableController;
use App\Http\Controllers\OrderTransationController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
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



//Users
Route::resource('users',UserController::class);

Route::resource('user-role',UserRoleController::class);


// Product
Route::resource('product',ProductController::class);

Route::resource('category',CategoryController::class);

Route::get('temp',[TempController::class,'index']);

Route::get('sales',[SalesController::class,'index']);


// Customer
Route::resource('customer',CustomerController::class);

Route::get('cart',[CartController::class,'index']);
Route::get('cart/add',[CartController::class,'create']);

Route::get('wishlist', [WishlistController::class,'index']);

Route::get('transation',[OrderTransationController::class,'index']);

Route::get('ordertable',[OrderTableController::class,'index']);

Route::get('orderitem',[OrderItumController::class,'index']);





// Users
Route::get('user-role',[UserRoleController::class,'index']);

Route::get('users',[UserController::class,'index']);

Route::get('address',[AddressController::class,'index']);
