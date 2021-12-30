<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengajuan_akunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/admin', function () {
    return view('Template/admin');
});

Route::get('/alumni', function () {
    return view('Alumni/home');
});

Route::get('/', function () {
    return view('Mahasiswa/welcome');
});

Route::get('/webHome', [HomeController::class, 'webHome'])->name('webHome');
Route::get('/webLogin', [HomeController::class, 'webLogin'])->name('webLogin');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/webAlumni', [AlumniController::class, 'index2'])->name('webAlumni');
Route::get('/detail-alumni-mhs/{id}', [AlumniController::class, 'detail2'])->name('detail-alumni-mhs');
Route::get('/pengajuan', [Pengajuan_akunController::class, 'index'])->name('pengajuan');
Route::post('/save-pengajuan', [Pengajuan_akunController::class, 'store'])->name('save-pengajuan');
Route::get('/cari-alumni-mhs', [AlumniController::class, 'cari1'])->name('cari-alumni-mhs');

Route::group(['middleware' => ['auth:user,alumni']], function () {

    //---ADMIN---
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/list-pengajuan', [Pengajuan_akunController::class, 'index2'])->name('list-pengajuan');
    Route::get('/konfirmasi-tolak/{id}', [Pengajuan_akunController::class, 'konfirmasitolak'])->name('konfirmasi-tolak');
    Route::get('/konfirmasi-terima/{id}', [Pengajuan_akunController::class, 'konfirmasiterima'])->name('konfirmasi-terima');
    Route::get('/tolak-pengajuan/{id}', [Pengajuan_akunController::class, 'tolak'])->name('tolak-pengajuan');
    Route::get('/terima-pengajuan/{id}', [AlumniController::class, 'store'])->name('terima-pengajuan');
    Route::get('/list-alumni', [AlumniController::class, 'index'])->name('list-alumni');
    Route::get('/konfirmasi-hapus/{id}', [AlumniController::class, 'konfirmasihapus'])->name('konfirmasi-hapus');
    Route::get('/hapus-alumni/{id}', [AlumniController::class, 'destroy'])->name('hapus-alumni');
    Route::get('/detail-alumni-admin/{id}', [AlumniController::class, 'detail3'])->name('detail-alumni-admin');

    Route::get('/informasi-adm', [InformasiController::class, 'lihatadm'])->name('informasi-adm');
    Route::get('/informasi-edit-adm/{id}', [InformasiController::class, 'editadm'])->name('informasi-edit-adm');
    Route::post('/informasi-edit-simpan-adm/{id}', [InformasiController::class, 'updateadm'])->name('informasi-edit-simpan-adm');
    Route::get('/konfirmasi-hapus-info-adm/{id}', [InformasiController::class, 'konfhpsinfo'])->name('konfirmasi-hapus-info-adm');
    Route::get('/informasi-hapus-adm/{id}', [InformasiController::class, 'destroyadm'])->name('informasi-hapus-adm');
    Route::get('/informasi-detail-adm/{id}', [InformasiController::class, 'detailadm'])->name('informasi-detail-adm');
    Route::get('/informasi-tambah-adm', [InformasiController::class, 'indexadm'])->name('informasi-tambah-adm');
    Route::post('/informasi-simpan-adm', [InformasiController::class, 'storeadm'])->name('informasi-simpan-adm');

    //---ALUMNI--- 
    Route::get('/alumni', function () {
        return view('Alumni/home');
    });
    Route::get('/daftar-alumni', [AlumniController::class, 'index3'])->name('daftar-alumni');
    Route::get('/profil-alumni', [AlumniController::class, 'profil'])->name('profil-alumni');
    Route::get('/profil-edit', [AlumniController::class, 'edit'])->name('profil-edit');
    Route::post('/profil-edit-simpan/{id}', [AlumniController::class, 'updateprofil'])->name('profil-edit-simpan');
    Route::post('/profil-edit-about/{id}', [AlumniController::class, 'updateabout'])->name('profil-edit-about');
    Route::post('/profil-edit-foto/{id}', [AlumniController::class, 'updatefoto'])->name('profil-edit-foto');
    Route::get('/detail-alumni/{id}', [AlumniController::class, 'detail1'])->name('detail-alumni');
    Route::get('/cari-alumni', [AlumniController::class, 'cari2'])->name('cari-alumni');

    Route::get('/informasi', [InformasiController::class, 'lihat'])->name('informasi');
    Route::get('/informasi-tambah', [InformasiController::class, 'index'])->name('informasi-tambah');
    Route::post('/save-informasi', [InformasiController::class, 'store'])->name('save-informasi');
    Route::get('/informasi-saya', [InformasiController::class, 'index2'])->name('informasi-saya');
    Route::get('/informasi-detail/{id}', [InformasiController::class, 'detail'])->name('informasi-detail');
    Route::get('/informasi-edit/{id}', [InformasiController::class, 'edit'])->name('informasi-edit');
    Route::post('/informasi-edit-save/{id}', [InformasiController::class, 'update'])->name('informasi-edit-save');
    Route::get('/informasi-hapus/{id}', [InformasiController::class, 'destroy'])->name('informasi-hapus');
});


    

