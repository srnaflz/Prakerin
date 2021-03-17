<?php

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


use App\Http\Controllers\ReportController;
Route::resource('/', ReportController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\BackController::class, 'index']);

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);


use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RWController;
Route::resource('rw', RWController::class);

use App\Http\Controllers\KasuseController;
Route::resource('kasuse', KasuseController::class);

//Global

use App\Http\Controllers\NegaraController;
Route::resource('negara', NegaraController::class);

Route::view('states-city','livewire.home');