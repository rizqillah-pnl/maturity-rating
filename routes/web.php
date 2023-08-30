<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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
Route::get('/', function () {
    return view('index');
});


Route::resource('/keuangan', KeuanganController::class);
Route::resource('/pelayanan', PelayananController::class);
Route::resource('/kapabilitas_internal', KapabilitasInternalController::class);
Route::resource('/tata_kk', TataKKController::class);
Route::resource('/inovasi', InovasiController::class);
Route::resource('/lingkungan', LingkunganController::class);


Route::get('/coba', function () {
    $data = [
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null
    ];
    dd(count($data));

    // $kode = ['KE.1', 'KE.2', 'KE.3', 'KE.4', 'PL.1', 'PL.2', 'PL.3', 'PL.4', 'KI.1', 'KI.2', 'KI.3', 'KI.4', 'TK.1', 'TK.2', 'TK.3', 'TK.4', 'TK.5', 'IN.1', 'IN.2', 'IN.3', 'IN.4', 'LI.1', 'LI.2'];
    // foreach ($kode as $value) {
    //     dd(explode('.', $value)[0]);
    // }
    $kode = [];
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 20; $j++) {
            $kode[] = 'PL.' . $i . '.' . $j;
        }
    }
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 17; $j++) {
            $kode[] = 'PL.' . $i . '.' . $j;
        }
    }
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 18; $j++) {
            $kode[] = 'KI.' . $i . '.' . $j;
        }
    }
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 15; $j++) {
            $kode[] = 'TK.' . $i . '.' . $j;
        }
    }
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 13; $j++) {
            $kode[] = 'IN.' . $i . '.' . $j;
        }
    }
    for ($i = 1; $i <= 2; $i++) {
        for ($j = 1; $j <= 15; $j++) {
            $kode[] = 'LI.' . $i . '.' . $j;
        }
    }

    $kode = ['KE.1.1', 'KE.1.2', 'KE.1.3', 'KE.1.4', 'KE.1.5', 'KE.1.6', 'KE.1.7', 'KE.1.8', 'KE.1.9', 'KE.1.10', 'KE.1.11', 'KE.1.12', 'KE.1.13', 'KE.1.14', 'KE.1.15', 'KE.2.1', 'KE.2.2', 'KE.2.3', 'KE.2.4', 'KE.2.5', 'KE.2.6', 'KE.2.7', 'KE.2.8', 'KE.2.9', 'KE.2.10', 'KE.3.1', 'KE.3.2', 'KE.3.3', 'KE.3.4', 'KE.3.5', 'KE.3.6', 'KE.3.7', 'KE.3.8', 'KE.3.9', 'KE.3.0', 'KE.3.11', 'KE.3.12', 'KE.3.13', 'KE.3.14', 'KE.3.15', 'KE.4.1', 'KE.4.2', 'KE.4.3', 'KE.4.4', 'KE.4.5', 'KE.4.6', 'KE.4.7', 'KE.4.8', 'KE.4.9', 'KE.4.10', 'PL.1.1', 'PL.1.2', 'PL.1.3', 'PL.1.4', 'PL.1.5', 'PL.1.6', 'PL.1.7', 'PL.1.8', 'PL.1.9', 'PL.1.10', 'PL.2.1', 'PL.2.2', 'PL.2.3', 'PL.2.4', 'PL.2.5', 'PL.2.6', 'PL.2.7', 'PL.2.8', 'PL.2.9', 'PL.2.10', 'PL.3.1', 'PL.3.2', 'PL.3.3', 'PL.3.4', 'PL.3.5', 'PL.3.6', 'PL.3.7', 'PL.3.8', 'PL.3.9', 'PL.3.10', 'PL.3.11', 'PL.3.12', 'PL.3.13', 'PL.3.14', 'PL.3.15', 'PL.3.16', 'PL.3.17', 'PL.3.18', 'PL.3.19', 'PL.3.20', 'PL.4.1', 'PL.4.2', 'PL.4.3', 'PL.4.4', 'PL.4.5', 'PL.4.6', 'PL.4.7', 'PL.4.8', 'PL.4.9', 'PL.4.10', 'KI.1.1', 'KI.1.2', 'KI.1.3', 'KI.1.4', 'KI.1.5', 'KI.1.6', 'KI.1.7', 'KI.1.8', 'KI.1.9', 'KI.1.10', 'KI.1.11', 'KI.1.12', 'KI.1.13', 'KI.1.14', 'KI.1.15', 'KI.1.16', 'KI.1.17', 'KI.1.18', 'KI.2.1', 'KI.2.2', 'KI.2.3', 'KI.2.4', 'KI.2.5', 'KI.2.6', 'KI.2.7', 'KI.2.8', 'KI.2.9', 'KI.2.10', 'KI.2.11', 'KI.2.12', 'KI.3.1', 'KI.3.2', 'KI.3.3', 'KI.3.4', 'KI.3.5', 'KI.3.6', 'KI.3.7', 'KI.3.8', 'KI.3.9', 'KI.3.10', 'KI.3.11', 'KI.3.12', 'KI.3.13', 'KI.3.14', 'KI.3.15', 'KI.3.16', 'KI.3.17', 'KI.3.18', 'KI.4.1', 'KI.4.2', 'KI.4.3', 'KI.4.4', 'KI.4.5', 'KI.4.6', 'KI.4.7', 'KI.4.8', 'KI.4.9', 'KI.4.10', 'KI.4.11', 'KI.4.12', 'KI.4.13', 'KI.4.14', 'KI.4.15', 'KI.4.16', 'KI.4.17', 'TK.1.1', 'TK.1.2', 'TK.1.3', 'TK.1.4', 'TK.1.5', 'TK.1.6', 'TK.1.7', 'TK.1.8', 'TK.1.9', 'TK.1.10', 'TK.1.11', 'TK.1.12', 'TK.1.13', 'TK.2.1', 'TK.2.2', 'TK.2.3', 'TK.2.4', 'TK.2.5', 'TK.2.6', 'TK.2.7', 'TK.2.8', 'TK.2.9', 'TK.2.10', 'TK.2.11', 'TK.2.12', 'TK.3.1', 'TK.3.2', 'TK.3.3', 'TK.3.4', 'TK.3.5', 'TK.3.6', 'TK.3.7', 'TK.3.8', 'TK.3.9', 'TK.3.10', 'TK.3.11', 'TK.4.1', 'TK.4.2', 'TK.4.3', 'TK.4.4', 'TK.4.5', 'TK.4.6', 'TK.4.7', 'TK.4.8', 'TK.4.9', 'TK.4.10', 'TK.4.11', 'TK.4.12', 'TK.4.13', 'TK.4.14', 'TK.4.15', 'TK.5.1', 'TK.5.2', 'TK.5.3', 'TK.5.4', 'TK.5.5', 'TK.5.6', 'TK.5.7', 'TK.5.8', 'TK.5.9', 'TK.5.10', 'TK.5.11', 'TK.5.12', 'TK.5.13', 'TK.5.14', 'TK.5.15', 'IN.1.1', 'IN.1.2', 'IN.1.3', 'IN.1.4', 'IN.1.5', 'IN.1.6', 'IN.1.7', 'IN.1.8', 'IN.1.9', 'IN.1.10', 'IN.1.11', 'IN.1.12', 'IN.1.13', 'IN.1.14', 'IN.2.1', 'IN.2.2', 'IN.2.3', 'IN.2.4', 'IN.2.5', 'IN.2.6', 'IN.2.7', 'IN.2.8', 'IN.2.9', 'IN.2.10', 'IN.2.11', 'IN.2.12', 'IN.2.13', 'IN.3.1', 'IN.3.2', 'IN.3.3', 'IN.3.4', 'IN.3.5', 'IN.3.6', 'IN.3.7', 'IN.3.8', 'IN.3.9', 'IN.3.10', 'IN.3.11', 'IN.3.12', 'IN.3.13', 'IN.4.1', 'IN.4.2', 'IN.4.3', 'IN.4.4', 'IN.4.5', 'IN.4.6', 'IN.4.7', 'IN.4.8', 'IN.4.9', 'IN.4.10', 'IN.4.11', 'IN.4.12', 'IN.4.13', 'LI.1.1', 'LI.1.2', 'LI.1.3', 'LI.1.4', 'LI.1.5', 'LI.1.6', 'LI.1.7', 'LI.1.8', 'LI.1.9', 'LI.1.10', 'LI.1.11', 'LI.1.12', 'LI.1.13', 'LI.1.14', 'LI.1.15', 'LI.2.1', 'LI.2.2', 'LI.2.3', 'LI.2.4', 'LI.2.5', 'LI.2.6', 'LI.2.7', 'LI.2.8', 'LI.2.9', 'LI.2.10', 'LI.2.11', 'LI.2.12', 'LI.2.13', 'LI.2.14', 'LI.2.15'];
    // Print array to check
    dd($kode);
});
