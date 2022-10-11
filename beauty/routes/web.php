<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaloonController as Saloon;
use App\Http\Controllers\MasterController as Master;
use App\Http\Controllers\ServiceController as Service;

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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('gate:home');
Route::prefix('saloon')->name('saloon_')->group(function () {
    Route::get('/', [Saloon::class, 'index'])->name('index')->middleware('gate:user')->middleware('gate:user');
    Route::get('/create', [Saloon::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Saloon::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{saloon}', [Saloon::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{saloon}', [Saloon::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{saloon}', [Saloon::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{saloon}', [Saloon::class, 'update'])->name('update')->middleware('gate:admin');
});
Route::prefix('master')->name('master_')->group(function () {
    Route::get('/', [Master::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Master::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Master::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{master}', [Master::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{master}', [Master::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{master}', [Master::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{master}', [Master::class, 'update'])->name('update')->middleware('gate:admin');
});
Route::prefix('service')->name('service_')->group(function () {
    Route::get('/', [Service::class, 'index'])->name('index')->middleware('gate:admin');
    Route::get('/create', [Service::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Service::class, 'store'])->name('store')->middleware('gate:admin');
    Route::delete('/delete/{service}', [Service::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{service}', [Service::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{service}', [Service::class, 'update'])->name('update')->middleware('gate:admin');
});
