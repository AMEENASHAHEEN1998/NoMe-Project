<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;


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
    Route::get('products',[HomeController::class ,'products'])->name('products');
    Route::get('productpage',[HomeController::class ,'productpage'])->name('productpage');
    Route::get('contact',[HomeController::class ,'contact'])->name('contact');
    Route::post('send-email', [MailController::class, 'sendEmail'])->name('send-email');
    Route::get('send-email/index', [MailController::class, 'index'])->name('send-email.index');

});





Route::prefix('admin')->middleware('auth','checkRole')->name('admin.')->group(function(){
    Route::get('/',[HomeController::class ,'control_panel'])->name('control_panel');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
});



<<<<<<< HEAD
=======


>>>>>>> 22b29fa86603c803052e76c38e4fa75547bc968e
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


