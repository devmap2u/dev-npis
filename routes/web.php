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


Route::group(['middleware' => ['auth','AccessLevel:1,99']], function(){
    Route::get('/dashboard', [MainController::class, 'dashboard'] );
    Route::get('/pengguna', [PenggunaController::class, 'index'] )->name('pengguna');
    Route::get('/tambahpengguna', [PenggunaController::class, 'tambahpengguna'] )->name('tambahpengguna');
    Route::post('/insertpengguna', [PenggunaController::class, 'insertpengguna'] )->name('insertpengguna');

    Route::get('/showpengguna/{id}', [PenggunaController::class, 'showpengguna'] )->name('showpengguna');
    Route::post('/editpengguna/{id}', [PenggunaController::class, 'editpengguna'] )->name('editpengguna');
    Route::get('/deletepengguna/{id}', [PenggunaController::class, 'deletepengguna'] )->name('deletepengguna');
    Route::get('/mapviewer', [PenggunaController::class, 'mapviewer'] )->name('mapviewer');
});

//testmizi2sssss


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_process', [LoginController::class, 'login_process'])->name('login_process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
