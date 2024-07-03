<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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
    Route::get('/{id}/products-list', [WareHouseController::class, 'show'])->name('show');
});

/**
 * Товары
 */
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('index');
});

/**
 * Заказы
 */
Route::prefix('orders')->name('orders.')->group(function () {
    Route::get('/list', [OrderController::class, 'index'])->name('index');
    Route::get('/filtered', [OrderController::class, 'index'])->name('filter');

    Route::prefix('manage')->name('manage.')->group(function () {
        Route::get('/new-order', [OrderController::class, 'create'])->name('create');
        Route::get('/order/{orderId}/status/{id}', [OrderController::class, 'changeStatus'])->name('status');
    });
});
