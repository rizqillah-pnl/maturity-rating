<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HasilMaturityController;
use App\Http\Controllers\TataKKController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\LingkunganController;
use App\Http\Controllers\KapabilitasInternalController;

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
Route::get('/', [DashboardController::class, 'index']);


Route::resource('/keuangan', KeuanganController::class);
Route::resource('/pelayanan', PelayananController::class);
Route::resource('/kapabilitas_internal', KapabilitasInternalController::class);
Route::resource('/tata_kk', TataKKController::class);
Route::resource('/inovasi', InovasiController::class);
Route::resource('/lingkungan', LingkunganController::class);

Route::get('/maturity_rating', [DashboardController::class, 'maturity_rating']);
Route::get('/hasil_maturity', [HasilMaturityController::class, 'index']);
Route::get('/rangkuman_hasil', [HasilMaturityController::class, 'rangkuman_hasil']);
