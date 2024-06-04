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
Route::post('/index-filter', [App\Http\Controllers\DashboardController::class, 'index_filter'])->name('index');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');

//Pemasukan
Route::get('/pemasukkan', [App\Http\Controllers\PemasukanController::class, 'index'])->name('pemasukan');
Route::get('/tambah-pemasukan', [App\Http\Controllers\PemasukanController::class, 'create'])->name('pemasukan');
Route::post('/tambah-pemasukan/store', [App\Http\Controllers\PemasukanController::class, 'store'])->name('pemasukan');
Route::get('/hapus-pemasukan/{id}', [App\Http\Controllers\PemasukanController::class, 'delete'])->name('pemasukan');

//Pengeluaran
Route::get('/pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index'])->name('pengeluran');
Route::get('/tambah-pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'create'])->name('pengeluran');
Route::post('/tambah-pengeluaran/store', [App\Http\Controllers\PengeluaranController::class, 'store'])->name('pengeluran');
Route::get('/hapus-pengeluaran/{id}', [App\Http\Controllers\PengeluaranController::class, 'delete'])->name('pemasukan');

//Tagihan
Route::get('/tagihan', [App\Http\Controllers\TagihanController::class, 'index'])->name('tagihan');
Route::get('/tambah-tagihan', [App\Http\Controllers\TagihanController::class, 'create'])->name('tagihan');
Route::post('/tambah-tagihan/store', [App\Http\Controllers\TagihanController::class, 'store'])->name('tagihan');
Route::get('/hapus-tagihan/{id}', [App\Http\Controllers\TagihanController::class, 'delete'])->name('pemasukan');
Route::get('/bayar-tagihan/{id}', [App\Http\Controllers\TagihanController::class, 'pay'])->name('pemasukan');


//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
