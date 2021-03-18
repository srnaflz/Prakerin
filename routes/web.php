<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RWController;
use App\Http\Controllers\KasuseController;



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
use App\Http\Controllers\BackController;



Auth::routes([ 'register'=>false, 'reset'=> false]);

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']);



Route::resource('/', ReportController::class); 

Route::group(['prefix'=> 'admin', 'middleware'=> ['auth']], function ()
{
    Route::resource('/', BackController::class); 
    Route::resource('provinsi', ProvinsiController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('rw', RWController::class);
    Route::resource('kasuse', KasuseController::class);
});