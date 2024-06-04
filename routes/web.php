<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Language Translation
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');

//Pemasukan
Route::get('/pemasukkan', [App\Http\Controllers\PemasukanController::class, 'index'])->name('pengeluran');
Route::get('/tambah-pemasukan', [App\Http\Controllers\PemasukanController::class, 'create'])->name('pengeluran');
Route::post('/tambah-pemasukan/store', [App\Http\Controllers\PemasukanController::class, 'store'])->name('pengeluran');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
