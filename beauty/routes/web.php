<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaloonController as Saloon;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('saloon')->name('saloon_')->group(function () {
    Route::get('/', [Saloon::class, 'index'])->name('index');
    Route::get('/create', [Saloon::class, 'create'])->name('create');
    Route::post('/create', [Saloon::class, 'store'])->name('store');
    Route::get('/show/{saloon}', [Saloon::class, 'show'])->name('show');
    Route::delete('/delete/{saloon}', [Saloon::class, 'destroy'])->name('delete');
    Route::get('/edit/{saloon}', [Saloon::class, 'edit'])->name('edit');
    Route::put('/edit/{saloon}', [Saloon::class, 'update'])->name('update');
});
