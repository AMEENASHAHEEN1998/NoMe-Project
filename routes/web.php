<?php

use App\Http\Controllers\HomeController;
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
    Route::get('/',[HomeController::class ,'home'])->name('home');
    Route::get('about',[HomeController::class ,'about'])->name('about');
    Route::get('centers',[HomeController::class ,'centers'])->name('centers');
    Route::get('products',[HomeController::class ,'products'])->name('products');
    Route::get('productpage',[HomeController::class ,'productpage'])->name('productpage');
    Route::get('contact',[HomeController::class ,'contact'])->name('contact');
});
