<?php

use Illuminate\Support\Facades\Route;
// use view\user\index
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('trangchu');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/product', function () {
    return view('product');
});
Route::get('/shop', function () {
    return view('shop');
});