<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

Route::get('/shop',[ShopController::class,'getShopPage'])->name('shop');
Route::get('/cart',[CartController::class,'getCartPage'])->middleware(['auth']);
Route::get('/addToCart/{id}/{item_qty}',[CartController::class,'addToCart'])->middleware(['auth']);
Route::get('/removeFromCart/{id}',[CartController::class,'removeFromCart'])->middleware(['auth']);
Route::get('/updateCart/{id}/{item_qty}',[CartController::class,'updateCart'])->middleware(['auth']);
Route::get('/checkout',[CheckoutController::class,'getCheckoutPage']);
Route::get('/about-us',[HomeController::class,'getAboutUsPage']);
Route::get('/contact-us',[HomeController::class,'getContactUsPage']);
Route::get('/loginPage',[LoginController::class,'getLoginPage'])->name('loginPage');
Route::get('/loginAdminPage',[AdminController::class,'getAdminLoginPage'])->name('adminLogin');
Route::post('/loginCustom',[LoginController::class,'authenticate'])->name('loginCustom');
Route::get('/customerLogout',[LoginController::class,'logout'])->name('customerLogout');
Route::post('/loginAdminCustom',[AdminController::class,'authenticate'])->name('loginAdminCustom');
Route::get('/adminPanel',[AdminController::class,'getAdminPanelPage'])->middleware(['authAdmin']);
Route::get('/adminNewProductPage',[AdminController::class,'getNewProductPage'])->middleware(['authAdmin']);
Route::get('/adminEditProductPage/{id}',[AdminController::class,'getEditProductPage'])->middleware(['authAdmin']);
Route::get('/adminDeleteProduct/{id}',[AdminController::class,'deleteProduct'])->middleware(['authAdmin']);
Route::post('/adminAddProduct',[AdminController::class,'addProduct'])->name('adminAddProduct')->middleware(['authAdmin']);
Route::post('/adminEditProduct',[AdminController::class,'editProduct'])->name('adminEditProduct')->middleware(['authAdmin']);
Route::get('/registerPage',[LoginController::class,'getRegisterPage']);
Route::post('/registerCustom',[LoginController::class,'register'])->name('registerCustom');
Route::get('/productDetail/{id}',[ShopController::class,'getProductDetailPage']);

