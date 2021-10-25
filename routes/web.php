<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('front.index');
});



Auth::routes();



Route::name('NoMe.')->middleware('auth','checkRole')->group(function(){
    Route::get('/', [HomeController::class ,'index'])->name('home');
    Route::get('about', [HomeController::class ,'about'])->name('about');
    Route::get('products', [HomeController::class ,'products'])->name('products');
    Route::get('productpage', [HomeController::class ,'productpage'])->name('productpage');
    Route::get('contact', [HomeController::class ,'contact'])->name('contact');
    Route::post('send-email', [MailController::class, 'sendEmail'])->name('send-email');
    Route::get('send-email/index', [MailController::class, 'index'])->name('send-email.index');

});
// Route::prefix('NoMe')->name('NoMe.')->group(function(){
//     Route::get('/',[HomePageController::class ,'home'])->name('home');
//     Route::get('about',[HomePageController::class ,'about'])->name('about');
//     Route::get('centers',[HomePageController::class ,'centers'])->name('centers');
//     Route::get('products',[HomePageController::class ,'products'])->name('products');
//     Route::get('productpage',[HomePageController::class ,'productpage'])->name('productpage');
//     Route::get('contact',[HomePageController::class ,'contact'])->name('contact');
//     Route::post('send-email', [MailController::class, 'sendEmail'])->name('send-email');
//     Route::get('send-email/index', [MailController::class, 'index'])->name('send-email.index');
//     // Route::post('send-email', [MailController::class, 'sendEmail'])->name('send-email');

// });


Route::prefix('admin')->middleware('auth','checkRole')->name('admin.')->group(function(){
    Route::get('/',[HomeController::class ,'control_panel'])->name('control_panel');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
});





//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


