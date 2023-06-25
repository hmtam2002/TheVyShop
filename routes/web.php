<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\setting;
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
    return view('index');
})->name('index');
Route::get('/product', function () {
    return view('product');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
// Route::get('/setting', function () {
//     return view('admin.setting');
// });
Route::get('admin/setting/',[setting::class,'index']);
