<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'getHomePage']);

Route::get('/shop',[ShopController::class,'getShopPage']);
Route::get('/cart',[CartController::class,'getCartPage']);
Route::get('/checkout',[CheckoutController::class,'getCheckoutPage']);
Route::get('/about-us',[HomeController::class,'getAboutUsPage']);
Route::get('/contact-us',[HomeController::class,'getContactUsPage']);
Route::get('/loginPage',[LoginController::class,'getLoginPage']);
Route::post('/loginCustom',[LoginController::class,'authenticate'])->name('loginCustom');
Route::get('/registerPage',[LoginController::class,'getRegisterPage']);
Route::post('/registerCustom',[LoginController::class,'register'])->name('registerCustom');
