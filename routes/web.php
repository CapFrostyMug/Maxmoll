<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WareHouseController;

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

//Auth::routes();

Route::view('/', 'home')->name('home');

/**
 * Склады
 */

Route::prefix('warehouses')->name('warehouses.')->group(function () {
    Route::get('/list', [WareHouseController::class, 'index'])->name('index');
    Route::get('/{id}/products', [WareHouseController::class, 'show'])->name('show');
});

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('index');
});
