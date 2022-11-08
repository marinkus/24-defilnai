<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController as Shop;

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



// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('shop')->name('shop_')->group(function () {
    Route::get('/', [Shop::class, 'index'])->name('index');
    Route::get('/create', [Shop::class, 'create'])->name('create');
    Route::post('/create', [Shop::class, 'store'])->name('store');
    Route::get('/show/{shop}', [Shop::class, 'show'])->name('show');
    Route::delete('/delete/{shop}', [Shop::class, 'destroy'])->name('delete');
    Route::get('/edit/{shop}', [Shop::class, 'edit'])->name('edit');
    Route::put('/edit/{shop}', [Shop::class, 'update'])->name('update');
    Route::put('/rate/{dish}', [Shop::class, 'rate'])->name('rate');
});
