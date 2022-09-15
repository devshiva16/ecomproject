<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerReviewRatingController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderItumController;
use App\Http\Controllers\OrderTableController;
use App\Http\Controllers\OrderTransationController;
use App\Http\Controllers\PincodeDeliverableController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProducttypeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\WishlistController;
use App\Models\Discount;
use App\Models\Producttype;

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


Route::post('ptoducttype/status',[Producttype::class,'changeStatus']);
Route::resource('producttype',ProducttypeController::class);

Route::post('category/status',[CategoryController::class,'changeStatus']);
Route::patch('category/update',[CategoryController::class,'update']);
Route::resource('category',CategoryController::class);

Route::get('subcategory/getlist/{categoryid}',[SubCategoryController::class,'GetSubCategoriesByCategoryId']);

Route::post('subcategory/status',[SubCategoryController::class,'changeStatus']);
Route::resource('subcategory',SubCategoryController::class);

Route::resource('stock',StockController::class);

Route::resource('discount',DiscountController::class);

Route::get('temp',[TempController::class,'index']);

Route::get('sales',[SalesController::class,'index']);


// Customer
Route::resource('customer',CustomerController::class);
Route::resource('rating',CustomerReviewRatingController::class);


// address
Route::resource('city',CityController::class);
Route::resource('state',StateController::class);
Route::resource('country',CountryController::class);
Route::resource('pincode',PincodeDeliverableController::class);



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
