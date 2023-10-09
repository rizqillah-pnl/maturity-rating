<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AspekMaturity;
use App\Models\LevelMaturity;
use App\Models\InputanMaturity;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\IndikatorMaturity;

class DashboardController extends Controller
{
    public function index()
    {
        $inputan_maturity = InputanMaturity::select('aspek_maturity_id', DB::raw('count(*) as total'))
            ->groupBy('aspek_maturity_id')
            ->get();
        $new_inputan = [];
        foreach ($inputan_maturity as $value) {
            $new_inputan[$value->aspek_maturity_id] = $value->total;
        }

        return view('index', ['data_count' => $new_inputan]);
    }

    public function maturity_rating()
    {
        $data = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['kriteria_maturity']);
        }])->get();

        $level = LevelMaturity::all();
        return view('pages.maturity_rating', ['title' => 'Aspek Maturity Rating', 'data' => $data, 'level' => $level]);
    }

    public function clear_all()
    {
        dd('hello');
    }
}
