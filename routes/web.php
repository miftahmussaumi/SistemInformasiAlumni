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

Route::get('/mhs', function () {
    return view('Mahasiswa/welcome');
});

Route::get('/', function () {
    return view('Template/admin');
});
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/webHome', [HomeController::class, 'webHome'])->name('webHome');
Route::get('/webLogin', [HomeController::class, 'webLogin'])->name('webLogin');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/pengajuan', [Pengajuan_akunController::class,'index'])->name('pengajuan');
Route::post('/save-pengajuan', [Pengajuan_akunController::class, 'store'])->name('save-pengajuan');
Route::get('/list-pengajuan', [Pengajuan_akunController::class, 'index2'])->name('list-pengajuan');
Route::get('/tolak-pengajuan/{id}', [Pengajuan_akunController::class, 'tolak'])->name('tolak-pengajuan');

Route::get('/terima-pengajuan/{id}', [AlumniController::class, 'store'])->name('terima-pengajuan');
Route::get('/list-alumni', [AlumniController::class, 'index'])->name('list-alumni');
Route::get('/webAlumni', [AlumniController::class, 'index2'])->name('webAlumni');
Route::get('/hapus-alumni/{id}', [AlumniController::class, 'destroy'])->name('hapus-alumni');