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

//ADMIN
Route::get('/masteradmin', [AdminController::class,'admin'])->name('masteradmin');
Route::get('/crudpenyewa', [AdminController::class,'penyewa'])->name('crudpenyewa');
Route::get('/invoice', [AdminController::class,'sewa'])->name('invoice');
Route::get('/user', [AdminController::class,'users'])->name('user');
Route::get('/tujuan', [AdminController::class,'tujuan'])->name('tujuan');
Route::get('/kendaraan', [AdminController::class,'kendaraan'])->name('kendaraan');
Route::get('/pelanggan', [AdminController::class,'pelanggan'])->name('pelanggan');


//CRUD crudpenyewa
Route::get('/insertPenyewa', [AdminController::class,'tambahpenyewa'])->name('insertPenyewa');
Route::post('/insertpenyewa', [AdminController::class,'insertpenyewa'])->name('insertpenyewa');
Route::get('/penyewaDelete/{id_penyewa}', [AdminController::class,'penyewaDelete'])->name('penyewaDelete');
Route::get('/editPenyewa/{id_penyewa}', [AdminController::class,'editpenyewa'])->name('editPenyewa');
Route::post('/updatepenyewa/{id_penyewa}', [AdminController::class,'updatepenyewa'])->name('updatepenyewa');


//CRUD user
Route::get('/insertUser', [AdminController::class,'tambahuser'])->name('insertUser');
Route::post('/insertuser', [AdminController::class,'insertuser'])->name('insertuser');
Route::get('/userDelete/{id_user}', [AdminController::class,'userDelete'])->name('userDelete');
Route::get('/editUser/{id_user}', [AdminController::class,'edituser'])->name('editUser');
Route::post('/updateuser/{id_user}', [AdminController::class,'updateuser'])->name('updateuser');

//CRUD crudtujuan
Route::get('/insertTujuan', [AdminController::class,'tambahtujuan'])->name('insertTujuan');
Route::post('/inserttujuan', [AdminController::class,'inserttujuan'])->name('inserttujuan');
Route::get('/tujuanDelete/{id_tujuan}', [AdminController::class,'tujuanDelete'])->name('tujuanDelete');
Route::get('/editTujuan/{id_tujuan}', [AdminController::class, 'edittujuan'])->name('editTujuan');
Route::post('/updatetujuan/{id_tujuan}', [AdminController::class, 'updatetujuan'])->name('updatetujuan');

//CRUD pelanggan
Route::get('/insertPelanggan', [AdminController::class,'tambahpelanggan'])->name('insertPelanggan');
Route::post('/insertpelanggan', [AdminController::class,'insertpelanggan'])->name('insertpelanggan');
Route::get('/pelangganDelete/{id_pelanggan}', [AdminController::class,'pelangganDelete'])->name('pelangganDelete');
Route::get('/editPelanggan/{id_pelanggan}', [AdminController::class,'editpelanggan'])->name('editPelanggan');
Route::post('/updatepelanggan/{id_pelanggan}', [AdminController::class,'updatepelanggan'])->name('updatepelanggan');


//CRUD kendaraan
Route::get('/insertKendaraan', [AdminController::class,'tambahkendaraan'])->name('insertKendaraan');
Route::post('/insertkendaraan', [AdminController::class,'insertkendaraan'])->name('insertkendaraan');
Route::get('/kendaraanDelete/{id_kendaraan}', [AdminController::class,'kendaraanDelete'])->name('kendaraanDelete');
Route::get('/editKendaraan/{id_kendaraan}', [AdminController::class,'editkendaraan'])->name('editKendaraan');
Route::post('/updatekendaraan/{id_kendaraan}', [AdminController::class,'updatekendaraan'])->name('updatekendaraan');

//CRUD crudinvoice
Route::get('/insertInvoice', [AdminController::class,'tambahinvoice'])->name('insertInvoice');
Route::post('/insertinvoice', [AdminController::class,'insertinvoice'])->name('insertinvoice');
Route::get('/invoiceDelete/{id_sewa}', [AdminController::class,'invoiceDelete'])->name('invoiceDelete');
Route::get('/editInvoice/{id_sewa}', [AdminController::class,'editinvoice'])->name('editInvoice');
Route::post('/updateinvoice/{id_sewa}', [AdminController::class,'updateinvoice'])->name('updateinvoice');




Route::group(['middleware'=> 'auth'], function(){
});
