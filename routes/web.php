<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\RegisterController;
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

    // Route::get('/mobil', [ApiController::class, 'index']);
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/loginAdmin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionloginAdmin', [LoginController::class, 'actionloginAdmin'])->name('actionloginAdmin');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Route::get('mahasiswa', [HomeController::class, 'index'])->name('mahasiswa');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/masterpelanggan', [PelangganController::class,'pelanggan'])->name('masterpelanggan');

Route::get('/masterpenyewa', [PenyewaController::class,'penyewa'])->name('masterpenyewa');

Route::get('/masteradmin', [AdminController::class,'admin'])->name('masteradmin');

Route::group(['middleware'=> 'auth'], function(){


});
