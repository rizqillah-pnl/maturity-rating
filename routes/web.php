<?php

use App\Http\Controllers\KapabilitasInternalController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PelayananController;

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

// ROOT
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});


Route::resource('/keuangan', KeuanganController::class);
Route::resource('/pelayanan', PelayananController::class);
Route::resource('/kapabilitas_internal', KapabilitasInternalController::class);
