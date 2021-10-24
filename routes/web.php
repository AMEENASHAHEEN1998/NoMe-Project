<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('admin.index');
});
Route::get('/categories', function () {
    return view('admin.page.Category.index');
});
Route::get('/category/create', function () {
    return view('admin.page.Category.create');
});
Route::get('/category/edit', function () {
    return view('admin.page.Category.edit');
});

Route::prefix('/NoMe')->name('NoMe.')->group(function(){
    Route::get('/',[HomePageController::class ,'home'])->name('home');
    Route::get('about',[HomePageController::class ,'about'])->name('about');
    Route::get('centers',[HomePageController::class ,'centers'])->name('centers');
    Route::get('products',[HomePageController::class ,'products'])->name('products');
    Route::get('productpage',[HomePageController::class ,'productpage'])->name('productpage');
    Route::get('contact',[HomePageController::class ,'contact'])->name('contact');


});


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[HomeController::class ,'control_panel'])->name('control_panel');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

