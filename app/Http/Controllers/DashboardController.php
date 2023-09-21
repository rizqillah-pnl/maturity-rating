<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AspekMaturity;
use App\Models\LevelMaturity;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function maturity_rating()
    {
        $data = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['kriteria_maturity']);
        }])->get();

        $level = LevelMaturity::all();
        return view('pages.maturity_rating', ['title' => 'Aspek Maturity Rating', 'data' => $data, 'level' => $level]);
    }
}
