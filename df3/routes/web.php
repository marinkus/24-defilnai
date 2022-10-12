<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\MovieController as Movie;
use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\CommentController as Comment;
use App\Http\Controllers\TagController as Tag;

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

Route::get('/', [HC::class, 'homeList'])->name('home')->middleware('gate:home');
Route::put('/rate/{movie}', [HC::class, 'rate'])->name('rate')->middleware('gate:user');
Route::post('/comment/{movie}', [HC::class, 'addComment'])->name('comment')->middleware('gate:user');

Route::prefix('category')->name('c_')->group(function () {
    Route::get('/', [Category::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Category::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Category::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{category}', [Category::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{category}', [Category::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{category}', [Category::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{category}', [Category::class, 'update'])->name('update')->middleware('gate:admin');
    Route::delete('/delete-movies/{category}', [Category::class, 'destroyAll'])->name('delete_movies')->middleware('gate:admin');
});
Route::prefix('tag')->name('t_')->group(function () {
    Route::get('/', [Tag::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Tag::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Tag::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{tag}', [Tag::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{tag}', [Tag::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{tag}', [Tag::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{tag}', [Tag::class, 'update'])->name('update')->middleware('gate:admin');
});
Route::prefix('movie')->name('m_')->group(function () {
    Route::get('/', [Movie::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [Movie::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [Movie::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{movie}', [Movie::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{movie}', [Movie::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{movie}', [Movie::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{movie}', [Movie::class, 'update'])->name('update')->middleware('gate:admin');
});
Route::prefix('comment')->name('co_')->group(function () {
    Route::get('/', [Comment::class, 'index'])->name('index')->middleware('gate:user');
    Route::delete('/delete/{comment}', [Comment::class, 'destroy'])->name('delete')->middleware('gate:admin');
});
