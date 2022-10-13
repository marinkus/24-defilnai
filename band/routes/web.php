<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as Restaurant;
use App\Http\Controllers\DishController as Dish;

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



Auth::routes();

// Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('restaurant')->name('restaurant_')->group(function () {
    Route::get('/', [Restaurant::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Restaurant::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Restaurant::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{restaurant}', [Restaurant::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{restaurant}', [Restaurant::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{restaurant}', [Restaurant::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{restaurant}', [Restaurant::class, 'update'])->name('update')->middleware('gate:admin');
    Route::put('/rate/{dish}', [Restaurant::class, 'rate'])->name('rate')->middleware('gate:user');
});
Route::prefix('dish')->name('dish_')->group(function () {
    Route::get('/', [Dish::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Dish::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Dish::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{dish}', [Dish::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{dish}', [Dish::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{dish}', [Dish::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{dish}', [Dish::class, 'update'])->name('update')->middleware('gate:admin');
});
