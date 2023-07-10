<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GalleryController;

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




Route::prefix('mada')->name('mada.')->group(function () {
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');
    Route::resource('/menus',MenuController::class);
    Route::resource('/galleries',GalleryController::class);
});



