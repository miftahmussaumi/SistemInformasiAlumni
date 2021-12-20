<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengajuan_akunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;

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
    Route::get('/tolak-pengajuan/{id}', [Pengajuan_akunController::class, 'tolak'])->name('tolak-pengajuan');
    Route::get('/terima-pengajuan/{id}', [AlumniController::class, 'store'])->name('terima-pengajuan');
    Route::get('/list-alumni', [AlumniController::class, 'index'])->name('list-alumni');
    Route::get('/hapus-alumni/{id}', [AlumniController::class, 'destroy'])->name('hapus-alumni');
    Route::get('/detail-alumni-admin/{id}', [AlumniController::class, 'detail3'])->name('detail-alumni-admin');

    //---ALUMNI--- 
    Route::get('/alumni', function () {
        return view('Alumni/home');
    });
    Route::get('/daftar-alumni', [AlumniController::class, 'index3'])->name('daftar-alumni');
    Route::get('/profil-alumni', [AlumniController::class, 'profil'])->name('profil-alumni');
    Route::get('/profil-edit', [AlumniController::class, 'edit'])->name('profil-edit');
    Route::post('/profil-edit-simpan/{id}', [AlumniController::class, 'updateprofil'])->name('profil-edit-simpan');
    Route::post('/profil-edit-about/{id}', [AlumniController::class, 'updateabout'])->name('profil-edit-about');
    Route::get('/detail-alumni/{id}', [AlumniController::class, 'detail1'])->name('detail-alumni');
    Route::get('/cari-alumni', [AlumniController::class, 'cari2'])->name('cari-alumni');
});


    

