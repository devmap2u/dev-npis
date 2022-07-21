<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
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

// Route::get('/', function () {
    // return view('welcome');
// });
Route::get('/', [MainController::class, 'index'] );
Route::get('/admin', [MainController::class, 'admin'] )->middleware('auth');

Route::get('/pengguna', [PenggunaController::class, 'index'] )->name('pengguna')->middleware('auth');
Route::get('/tambahpengguna', [PenggunaController::class, 'tambahpengguna'] )->name('tambahpengguna')->middleware('auth');
Route::post('/insertpengguna', [PenggunaController::class, 'insertpengguna'] )->name('insertpengguna')->middleware('auth');

Route::get('/showpengguna/{id}', [PenggunaController::class, 'showpengguna'] )->name('showpengguna')->middleware('auth');
Route::post('/editpengguna/{id}', [PenggunaController::class, 'editpengguna'] )->name('editpengguna')->middleware('auth');
Route::get('/deletepengguna/{id}', [PenggunaController::class, 'deletepengguna'] )->name('deletepengguna')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_process', [LoginController::class, 'login_process'])->name('login_process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
