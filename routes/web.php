<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportDataController;
use App\Http\Controllers\GbsbController;
use App\Http\Controllers\PkbController;
use App\Http\Controllers\ProgramTamController;
use App\Http\Controllers\TintouchController;
use App\Http\Controllers\VocController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/caridata', [App\Http\Controllers\HomeController::class, 'caridata'])->name('home')->middleware('auth');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('home')->middleware('auth');
Route::resource('/importdata', ImportDataController::class);
Route::resource('/importgbsb', GbsbController::class);
Route::resource('/importtintouch', TintouchController::class);
Route::resource('/importvoc', VocController::class);
Route::resource('/importprogramtam', ProgramTamController::class);
Route::resource('/importpkb', PkbController::class);
