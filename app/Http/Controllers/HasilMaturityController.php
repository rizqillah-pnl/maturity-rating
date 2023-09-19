<?php

namespace App\Http\Controllers;

use App\Models\AspekMaturity;
use App\Models\LevelMaturity;
use Illuminate\Http\Request;

class HasilMaturityController extends Controller
{
    public function index()
    {
        $data = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['kriteria_maturity']);
        }])->get();

        $level = LevelMaturity::all();
        return view('pages.hasil_maturity', ['title' => 'Hasil Maturity Rating', 'data' => $data, 'level' => $level]);
    }
}
