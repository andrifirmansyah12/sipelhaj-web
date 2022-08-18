<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LaporanController;

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
Route::get('/home-haji', function () {
    return view('home_haji');
});
Route::get('/home-umroh', function () {
    return view('home_umroh');
});
Route::get('/home-galeri', function () {
    return view('home_galeri');
});
Route::get('/home-profil', function () {
    return view('home_profil');
});
Route::get('/home-jadwal', [App\Http\Controllers\JadwalController::class, 'home_jadwal']);
Route::get('/home-kontak', function () {
    return view('home_kontak');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('biodata', \App\Http\Controllers\BiodataController::class)
    ->middleware('auth');

Route::resource('uploadberkas', \App\Http\Controllers\UploadBerkasController::class)
    ->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('jamaah', \App\Http\Controllers\JamaahController::class)
    ->middleware('auth');

Route::resource('berkas', \App\Http\Controllers\BerkasController::class)
    ->middleware('auth');

Route::resource('jadwal', \App\Http\Controllers\JadwalController::class)
    ->middleware('auth');

Route::resource('transaksi', \App\Http\Controllers\TransaksiController::class)
    ->middleware('auth');

Route::resource('laporan', \App\Http\Controllers\LaporanController::class)
    ->middleware('auth');

Route::get('/cetak/{tglawal}/{tglakhir}','App\Http\Controllers\LaporanController@cetak')->name('cetak');
