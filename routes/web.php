<?php

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