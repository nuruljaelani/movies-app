<?php

use App\Http\Controllers\BacksiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

// Auth
Route::controller(LoginController::class)->name('login.')->prefix('login')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('auth', 'authenticate')->name('authenticate');
    Route::post('logout', 'logout')->name('logout');
});

// Backsite
Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')->group(function(){
        Route::controller(BacksiteController::class)->group(function(){
            Route::get('dashboard', 'index')->name('index');
        });
        Route::controller(CategoryController::class)->name('kategori.')->prefix('kategori')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::delete('delete/{id}', 'destroy')->name('delete');
        });
});


// Movies
Route::controller(MovieController::class)->name('movies.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/movie/latest', 'latestMovie')->name('latest');
    Route::get('/movie/{category}', 'category')->name('category');
    Route::get('/movie/{id}', 'show')->name('show');
});
