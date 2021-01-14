<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AnggotaController;


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

Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/daftar-buku', [MenuController::class, 'daftar_buku']);
Route::get('/daftar-anggota-perpus', [MenuController::class, 'daftar_anggota_perpus']);
Route::get('/daftar-anggota-peminjam', [MenuController::class, 'daftar_anggota_peminjam']);
Route::get('/data-pinjam-buku', [MenuController::class, 'data_pinjam_buku']);
Route::get('/data-buku-kembali', [MenuController::class, 'data_buku_kembali']);
Route::get('/detail-buku-pinjam', [MenuController::class, 'detail_buku_pinjam']);
Route::get('/review-buku', [MenuController::class, 'review_buku']);
Route::resource('anggota', AnggotaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
