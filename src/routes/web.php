<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\kelascotroller;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\PesertaController;
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

route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/kelas/form',[kelascotroller::class,'tampilform'])
    ->name("kelas.form");

route::get('/kelas/list',[kelascotroller::class,'tampillist'])
    ->name("kelas.list");

route::get('/pertemuan/form',[PertemuanController::class,'tampilform'])
    ->name("pertemuan.form");

route::get('/peserta/invite',[PesertaController::class,'tampil_form_email'])
->name("peserta.invite");

Route::get('/peserta/detail',[DetailController::class,'tampil_detail_mahasiswa'])
->name("peserta.detail");

route::get('/absen/form',[AbsenController::class,'tampil_form_absen'])
->name("absensi.form");
