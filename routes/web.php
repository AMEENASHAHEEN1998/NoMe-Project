<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SliderController;
use App\Models\order;
use DebugBar\Bridge\SlimCollector;

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
    return view('front.index');
});


Auth::routes();

Route::name('NoMe.')->group(function(){
    Route::get('/',[HomeController::class ,'home'])->name('home');
    Route::get('about',[HomeController::class ,'about'])->name('about');
    // Route::post('findProduct',[HomeController::class ,'findProduct'])->name('findProduct');
    Route::get('products',[HomeController::class ,'products'])->name('products');
    Route::get('productpage/{product:product_name}',[HomeController::class ,'productpage'])->name('productpage');
    Route::get('contact',[HomeController::class ,'contact'])->name('contact');
    Route::post('send-email', [MailController::class, 'sendEmail'])->name('send-email');
    Route::get('send-email/index', [MailController::class, 'index'])->name('send-email.index');
    Route::get('findProduct',[HomeController::class ,'findProduct'])->name('findProduct');

});







Route::prefix('admin')->middleware('auth','checkRole')->name('admin.')->group(function(){
    Route::get('/',[HomeController::class ,'control_panel'])->name('control_panel');
    Route::resource('slider', SliderController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('offers', OfferController::class);
    Route::resource('orders', OrderController::class);
    Route::get('order/active',[OrderController::class ,'active'])->name('orders.active');
    Route::get('order/noactive',[OrderController::class ,'noactive'])->name('orders.noactive');
});




