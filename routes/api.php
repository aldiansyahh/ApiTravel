<?php

use App\Http\Controllers\ApiKendaraanController;
use App\Http\Controllers\ApiOtlateController;
use App\Http\Controllers\ApiPelangganController;
use App\Http\Controllers\ApiPenyewaController;
use App\Http\Controllers\ApiSewaController;
use App\Http\Controllers\ApiTujuanController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\TujuanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Api Penyewa
Route::get('/penyewa', [ApiPenyewaController::class,'penyewa'])->name('penyewa');
Route::get('/penyewa/{id_penyewa}', [ApiPenyewaController::class,'show']);
Route::post('/create-penyewa', [ApiPenyewaController::class, 'create']);
Route::put('/update-penyewa/{id_penyewa}', [ApiPenyewaController::class, 'update']);
//Put harus di x-www-form
Route::delete('/delete-penyewa/{id_penyewa}', [ApiPenyewaController::class, 'delete']);

//Api Pelanggan
Route::get('/pelanggan', [PelangganController::class,'pelanggan'])->name('pelanggan');
Route::get('/pelanggan', [ApiPelangganController::class,'pelanggan'])->name('pelanggan');
Route::get('/pelanggan/{id_pelanggan}', [ApiPelangganController::class,'show']);
Route::post('/create-pelanggan', [ApiPelangganController::class, 'create']);
Route::put('/update-pelanggan/{id_pelanggan}', [ApiPelangganController::class, 'update']);
//Put harus di x-www-form
Route::delete('/delete-pelanggan/{id_pelanggan}', [ApiPelangganController::class, 'delete']);

//Api Kendaraan
Route::get('/kendaraan', [KendaraanController::class,'kendaraan'])->name('kendaraan');
Route::get('/kendaraan', [ApiKendaraanController::class,'kendaraan'])->name('kendaraan');
Route::get('/kendaraan/{id_kendaraan}', [ApiKendaraanController::class,'show']);
Route::post('/create-kendaraan', [ApiKendaraanController::class, 'create']);
Route::put('/update-kendaraan/{id_kendaraan}', [ApiKendaraanController::class, 'update']);
//Put harus di x-www-form
Route::delete('/delete-kendaraan/{id_kendaraan}', [ApiKendaraanController::class, 'delete']);

//Api Tujuan
Route::get('/tujuan', [TujuanController::class,'tujuan'])->name('tujuan');
Route::get('/tujuan', [ApiTujuanController::class,'tujuan'])->name('tujuan');
Route::get('/tujuan/{id_tujuan}', [ApiTujuanController::class,'show']);
Route::post('/create-tujuan', [ApiTujuanController::class, 'create']);
Route::put('/update-tujuan/{id_tujuan}', [ApiTujuanController::class, 'update']);
Route::post('/addImage', [ApiTujuanController::class, 'store']);
//Put harus di x-www-form
Route::delete('/delete-tujuan/{id_tujuan}', [ApiTujuanController::class, 'delete']);

//Api Sewa (Invoice)
Route::get('/sewa', [SewaController::class,'sewa'])->name('sewa');
Route::get('/sewa', [ApiSewaController::class,'sewa'])->name('sewa');
Route::get('/sewa/{id_sewa}', [ApiSewaController::class,'show']);
Route::post('/create-sewa', [ApiSewaController::class, 'create']);
Route::put('/update-sewa/{id_sewa}', [ApiSewaController::class, 'update']);
//Put harus di x-www-form
Route::delete('/delete-sewa/{id_sewa}', [ApiSewaController::class, 'delete']);

//Api Otlate
// Route::get('/otlate', [OtlateController::class,'otlate'])->name('otlate');
Route::get('/otlate', [ApiOtlateController::class,'otlate'])->name('otlate');
Route::get('/otlate/{id_otlate}', [ApiOtlateController::class,'show']);
Route::post('/create-otlate', [ApiOtlateController::class, 'create']);
Route::put('/update-otlate/{id_otlate}', [ApiOtlateController::class, 'update']);
//Put harus di x-www-form
Route::delete('/delete-otlate/{id_otlate}', [ApiOtlateController::class, 'delete']);


Route::get('/user', [ApiUserController::class,'show']);
Route::post('/register/Penyewa', [ApiUserController::class, 'registerPenyewa']);
Route::post('/register/Pelanggan', [ApiUserController::class, 'registerPelanggan']);
Route::post('/login', [ApiUserController::class, 'login']);

