<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\KeranjangController;

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
    return view('dashboard');
})->name('dashboard');

Route::resource('keranjang',KeranjangController::class);
// Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::resource('shoping',ShopingController::class);
// routes/web.php
// Route::get('/shoping', [ShopingController::class, 'index'])->name('shoping.index');
