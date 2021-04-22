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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home_mhs', [App\Http\Controllers\MhsController::class, 'home_mhs'])->name('mhsHome');
Route::get('/selesai_mhs', [App\Http\Controllers\MhsController::class, 'selesai_mhs'])->name('mhsSelesai');
Route::get('/ready_mhs', [App\Http\Controllers\MhsController::class, 'ready_mhs'])->name('mhsReady');