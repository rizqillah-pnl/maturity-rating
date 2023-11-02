<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->prefix('/')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);

  // ROUTE ASPEK
  Route::resource('/keuangan', KeuanganController::class);
  Route::resource('/pelayanan', PelayananController::class);
  Route::resource('/kapabilitas_internal', KapabilitasInternalController::class);
  Route::resource('/tata_kk', TataKKController::class);
  Route::resource('/inovasi', InovasiController::class);
  Route::resource('/lingkungan', LingkunganController::class);

  // UTILITIES
  Route::get('/maturity_rating', [DashboardController::class, 'maturity_rating']);
  Route::get('/variabel_maturity', [HasilMaturityController::class, 'index']);

  // RESULT OF MATURITY
  Route::get('/rangkuman_hasil', [HasilMaturityController::class, 'rangkuman_hasil']);
  Route::get('/dokumen_pendukung', [DashboardController::class, 'dokumen_pendukung']);
  Route::post('/upload_dokumen', [DashboardController::class, 'upload_dokumen']);
  Route::get('/rekap_data', [DashboardController::class, 'rekap_data']);

  // DELETE ALL DATA
  Route::post('/clear-all', [DashboardController::class, 'clear_all']);

  // ROUTE LOGOUT
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');;
});



// ROUTE LOGIN AND REGISTER
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
