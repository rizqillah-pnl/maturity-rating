<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndikatorHasil;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class KeuanganController extends Controller
{
    public function index()
    {
        return view('pages.keuangan', ['title' => 'Aspek Keuangan']);
    }

    public function store(Request $request)
    {
        // INDIKATOR KE.1
        $rasio_lancar = $request->aset_lancar / $request->kwjb_jgk;
        $target_rasio_lancar = $request->target_rasio_lancar / 100;
        $rasio_optimalisasi_kas = $request->pdp_inves_jgk / ($request->saldo_rek_op + $request->pengelolaan_kas);
        $target_optimalisasi_kas = $request->target_optimalisasi_kas / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_lancar', 'hasil' => $rasio_lancar], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_optimalisasi_kas', 'hasil' => $rasio_optimalisasi_kas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_optimalisasi_kas', 'hasil' => $target_optimalisasi_kas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_rasio_lancar', 'hasil' => $target_rasio_lancar], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.2
        $pobo = $request->output_blu / $request->input_blu;
        $target_pobo = $request->target_pobo / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'pobo', 'hasil' => $pobo, 'variabel_fullname' => 'Pendapatan Operasional terhadap Beban Operasional (POBO)'], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'target_pobo', 'hasil' => $target_pobo], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.3
        $imbalan_atas_aset = ($request->surplus_pos / $request->kerugian) / $request->total_aset;
        $target_imbalan_atas_aset = $request->target_imbalan_atas_aset / 100;
        $imbalan_atas_ekuitas = ($request->surplus_pos / $request->kerugian) / $request->total_ekuitas;
        $target_imbalan_atas_ekuitas = $request->target_imbalan_atas_ekuitas / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_aset', 'hasil' => $imbalan_atas_aset], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_ekuitas', 'hasil' => $imbalan_atas_ekuitas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_aset', 'hasil' => $target_imbalan_atas_aset], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_ekuitas', 'hasil' => $target_imbalan_atas_ekuitas], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.4
        $tingkat_kemandirian = $request->pendapatan_lra / $request->total_belanja_lra;
        $target_tingkat_kemandirian = $request->target_tingkat_kemandirian / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'tingkat_kemandirian', 'hasil' => $tingkat_kemandirian], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'target_tingkat_kemandirian', 'hasil' => $target_tingkat_kemandirian], ['variabel', 'indikator_maturity_id']);


        return redirect()->route('pelayanan.index')->with('success', 'Berhasil Mengupload Data Aspek Keuangan!');
    }
}
