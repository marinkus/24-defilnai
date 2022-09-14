<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController as Mechanic;
use App\Http\Controllers\TruckController as Truck;

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

Auth::routes(['register' => false]); // disable reg

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('mechanic')->name('m_')->group(function () {
    Route::get('/', [Mechanic::class, 'index'])->name('index');
    Route::get('/create', [Mechanic::class, 'create'])->name('create');
    Route::post('/create', [Mechanic::class, 'store'])->name('store');
    Route::get('/show/mechanic/{mechanic}', [Mechanic::class, 'show'])->name('show');
    Route::delete('/delete/mechanic/{mechanic}', [Mechanic::class, 'destroy'])->name('delete');
    Route::get('/edit/mechanic/{mechanic}', [Mechanic::class, 'edit'])->name('edit');
    Route::put('/edit/mechanic/{mechanic}', [Mechanic::class, 'update'])->name('update');
});
Route::prefix('truck')->name('t_')->group(function () {
    Route::get('/', [Truck::class, 'index'])->name('index');
    Route::get('/create', [Truck::class, 'create'])->name('create');
    Route::post('/create', [Truck::class, 'store'])->name('store');
    Route::get('/show/truck/{truck}', [Truck::class, 'show'])->name('show');
    Route::delete('/delete/truck/{truck}', [Truck::class, 'destroy'])->name('delete');
    Route::get('/edit/truck/{truck}', [Truck::class, 'edit'])->name('edit');
    Route::put('/edit/truck/{truck}', [Truck::class, 'update'])->name('update');
});
