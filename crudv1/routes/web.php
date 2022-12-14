<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishController as Wish;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('wishes')->group(function () {
    Route::get('/', [Wish::class, 'index'])->name('index');
    Route::get('/create', [Wish::class, 'create'])->name('create');
    Route::post('/create', [Wish::class, 'store'])->name('store');
    Route::get('/edit/{wish}', [Wish::class, 'edit'])->name('edit');
    Route::put('/edit/{wish}', [Wish::class, 'update'])->name('update');
    Route::delete('/delete/{wish}', [Wish::class, 'destroy'])->name('delete');
});
