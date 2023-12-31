<?php

namespace App\Http\Controllers;

use App\Models\AspekMaturity;
use App\Models\IndikatorMaturity;
use App\Models\LevelMaturity;
use App\Models\VariabelIndikator;
use Illuminate\Http\Request;

class HasilMaturityController extends Controller
{
    public function index()
    {
        $aspek_maturity = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['kriteria_maturity', 'variabel_indikator' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }, 'komponen_hasil' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }]);
        }])->get();

        $indikator_maturity = IndikatorMaturity::all()->toArray();
        foreach ($indikator_maturity as $index => $row) {
            $indikator_maturity[$index] = strtolower(str_replace('.', '', $row['kode_indikator']));
        }

        $level = LevelMaturity::all();
        return view('pages.hasil_maturity', ['title' => 'Hasil Maturity Rating', 'aspek_maturity' => $aspek_maturity, 'level' => $level, 'indikator_maturity' => $indikator_maturity]);
    }

    public function rangkuman_hasil()
    {
        $aspek_maturity = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['komponen_hasil' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }]);
        }])->get();

        $indikator_maturity = IndikatorMaturity::all()->toArray();
        foreach ($indikator_maturity as $index => $row) {
            $indikator_maturity[$index] = strtolower(str_replace('.', '', $row['kode_indikator']));
        }

        $level = LevelMaturity::all();
        return view('pages.rangkuman_hasil', ['title' => 'Rangkuman Hasil Maturity Rating', 'aspek_maturity' => $aspek_maturity, 'level' => $level, 'indikator_maturity' => $indikator_maturity]);
    }
}
