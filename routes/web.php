<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PinjamController;
// use App\Http\Controllers\HomeController;

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
//Route untuk Data Buku
Route::get('/buku', 'BukuController@bukutampil');
Route::post('/buku/tambah','BukuController@bukutambah');
Route::get('/buku/hapus/{id_buku}','BukuController@bukuhapus');
Route::put('/buku/edit/{id_buku}', 'BukuController@bukuedit');

//Route untuk tampilan home
Route::get('/home', function(){return view('home');});
// ->middleware("auth")

//Route untuk Data Anggota
Route::get('/anggota', 'AnggotaController@anggotatampil');
Route::post('/anggota/tambah', 'AnggotaController@anggotatambah');
Route::get('/anggota/hapus/{id_anggota}', 'AnggotaController@anggotahapus');
Route::put('/anggota/edit/{id_anggota}', 'AnggotaController@anggotaedit');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@petugastampil');
Route::post('/petugas/tambah', 'PetugasController@petugastambah');
Route::get('/petugas/hapus/{id_petugas}', 'PetugasController@petugashapus');
Route::put('/petugas/edit/{id_petugas}', 'PetugasController@petugasedit');

//Route untuk Data Peminjaman
Route::get('/pinjam', 'PinjamController@pinjamtampil');
Route::post('/pinjam/tambah','PinjamController@pinjamtambah');
Route::get('/pinjam/hapus/{id_pinjam}','PinjamController@pinjamhapus');
Route::put('/pinjam/edit/{id_pinjam}', 'PinjamController@pinjamedit');

// Route dom karavel package
Route::get('exportExcel', [BukuController::class, 'exportExcel'])->name('buku.exportExcel');
Route::get('exportPdf', [BukuController::class, 'exportPdf'])->name('buku.exportPdf');

Route::get('ExportExcel', [AnggotaController::class, 'ExportExcel'])->name('anggota.exportExcel');
Route::get('ExportPdf', [AnggotaController::class, 'ExportPdf'])->name('anggota.exportPdf');

Route::get('ExportEXCEL', [PetugasController::class, 'ExportEXCEL'])->name('petugas.exportExcel');
Route::get('ExportPDF', [PetugasController::class, 'ExportPDF'])->name('petugas.exportPdf');

Route::get('exportEXCEL', [PinjamController::class, 'exportEXCEL'])->name('pinjam.exportExcel');
Route::get('exportPDF', [PinjamController::class, 'exportPDF'])->name('pinjam.exportPdf');


// Auth::routes();
Route::group(['middleware'=>'guest'], function (){
Route::Post('/login', [LoginController::class, 'authenticate'])->name('login');;
Route::get('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware'=>'auth'], function (){
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
