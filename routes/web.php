<?php

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');

Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('/publisher', [App\Http\Controllers\HomeController::class, 'publisher'])->name('publisher');
Route::get('/publisher{id}', [App\Http\Controllers\HomeController::class, 'publisherDetail'])->name('publisherDetail');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
