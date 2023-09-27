<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndikatorHasil;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;
use App\Models\InputanMaturity;

class KeuanganController extends Controller
{
    public function index()
    {
        return view('pages.keuangan', ['title' => 'Aspek Keuangan']);
    }

    public function store(Request $request)
    {
        // Menginput Nilai Variabel Awal
        InputanMaturity::upsert([
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'aset_lancar', 'tipe_inputan' => 'ke_aset_lancar', 'nilai' => $request->aset_lancar],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'kwjb_jgk', 'tipe_inputan' => 'ke_kwjb_jgk', 'nilai' => $request->kwjb_jgk],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'pdp_inves_jgk', 'tipe_inputan' => 'ke_pdp_inves_jgk', 'nilai' => $request->pdp_inves_jgk],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'saldo_rek_op', 'tipe_inputan' => 'ke_saldo_rek_op', 'nilai' => $request->saldo_rek_op],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'pengelolaan_kas', 'tipe_inputan' => 'ke_pengelolaan_kas', 'nilai' => $request->pengelolaan_kas],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'target_rasio_lancar', 'tipe_inputan' => 'ke_target_rasio_lancar', 'nilai' => $request->target_rasio_lancar],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'target_optimalisasi_kas', 'tipe_inputan' => 'ke_target_optimalisasi_kas', 'nilai' => $request->target_optimalisasi_kas],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'output_blu', 'tipe_inputan' => 'ke_output_blu', 'nilai' => $request->output_blu],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'input_blu', 'tipe_inputan' => 'ke_input_blu', 'nilai' => $request->input_blu],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'target_pobo', 'tipe_inputan' => 'ke_target_pobo', 'nilai' => $request->target_pobo],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'surplus_pos', 'tipe_inputan' => 'ke_surplus_pos', 'nilai' => $request->surplus_pos],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'kerugian', 'tipe_inputan' => 'ke_kerugian', 'nilai' => $request->kerugian],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'total_aset', 'tipe_inputan' => 'ke_total_aset', 'nilai' => $request->total_aset],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'total_ekuitas', 'tipe_inputan' => 'ke_total_ekuitas', 'nilai' => $request->total_ekuitas],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'target_imbalan_atas_aset', 'tipe_inputan' => 'ke_target_imbalan_atas_aset', 'nilai' => $request->target_imbalan_atas_aset],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'target_imbalan_atas_ekuitas', 'tipe_inputan' => 'ke_target_imbalan_atas_ekuitas', 'nilai' => $request->target_imbalan_atas_ekuitas],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'pendapatan_lra', 'tipe_inputan' => 'ke_pendapatan_lra', 'nilai' => $request->pendapatan_lra],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'total_belanja_lra', 'tipe_inputan' => 'ke_total_belanja_lra', 'nilai' => $request->total_belanja_lra],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'target_tingkat_kemandirian', 'tipe_inputan' => 'ke_target_tingkat_kemandirian', 'nilai' => $request->target_tingkat_kemandirian],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR KE.1
        $rasio_lancar = $request->aset_lancar / $request->kwjb_jgk;
        $target_rasio_lancar = $request->target_rasio_lancar / 100;
        $rasio_optimalisasi_kas = $request->pdp_inves_jgk / ($request->saldo_rek_op + $request->pengelolaan_kas);
        $target_optimalisasi_kas = $request->target_optimalisasi_kas / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_lancar', 'hasil' => $rasio_lancar], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_optimalisasi_kas', 'hasil' => $rasio_optimalisasi_kas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_optimalisasi_kas', 'hasil' => $target_optimalisasi_kas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_rasio_lancar', 'hasil' => $target_rasio_lancar], ['variabel', 'indikator_maturity_id']);

        $perbedaan_rasio_lancar = $rasio_lancar / $target_rasio_lancar;
        if ($perbedaan_rasio_lancar >= 0.6) {
            $ke11 = 5;
        } else if ($perbedaan_rasio_lancar >= 0.4 && $perbedaan_rasio_lancar < 0.6) {
            $ke11 = 4;
        } else if ($perbedaan_rasio_lancar >= 0.2 && $perbedaan_rasio_lancar < 0.4) {
            $ke11 = 3;
        } else if ($perbedaan_rasio_lancar >= 0 && $perbedaan_rasio_lancar < 0.2) {
            $ke11 = 2;
        } else {
            $ke11 = 1;
        }
        $perbedaan_optimalisasi_kas = $rasio_optimalisasi_kas / $target_optimalisasi_kas;
        if ($perbedaan_optimalisasi_kas >= 0.6) {
            $ke12 = 5;
        } else if ($perbedaan_optimalisasi_kas >= 0.4 && $perbedaan_optimalisasi_kas < 0.6) {
            $ke12 = 4;
        } else if ($perbedaan_optimalisasi_kas >= 0.2 && $perbedaan_optimalisasi_kas < 0.4) {
            $ke12 = 3;
        } else if ($perbedaan_optimalisasi_kas >= 0 && $perbedaan_optimalisasi_kas < 0.2) {
            $ke12 = 2;
        } else {
            $ke12 = 1;
        }

        $ke1 = intval(round(($ke11 + $ke12) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'ke1', 'hasil' => $ke1, 'variabel_fullname' => 'KE.1 - Likuiditas'], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.2
        $pobo = $request->output_blu / $request->input_blu;
        $target_pobo = $request->target_pobo / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'pobo', 'hasil' => $pobo, 'variabel_fullname' => 'Pendapatan Operasional terhadap Beban Operasional (POBO)'], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'target_pobo', 'hasil' => $target_pobo], ['variabel', 'indikator_maturity_id']);

        $perbedaan_pobo = $pobo / $target_pobo;
        if ($perbedaan_pobo >= 0.6) {
            $ke2 = 5;
        } else if ($perbedaan_pobo >= 0.4 && $perbedaan_pobo < 0.6) {
            $ke2 = 4;
        } else if ($perbedaan_pobo >= 0.2 && $perbedaan_pobo < 0.4) {
            $ke2 = 3;
        } else if ($perbedaan_pobo >= 0 && $perbedaan_pobo < 0.2) {
            $ke2 = 2;
        } else {
            $ke2 = 1;
        }
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'ke2', 'hasil' => $ke2, 'variabel_fullname' => 'KE.2 - Efisiensi'], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.3
        $imbalan_atas_aset = ($request->surplus_pos / $request->kerugian) / $request->total_aset;
        $target_imbalan_atas_aset = $request->target_imbalan_atas_aset / 100;
        $imbalan_atas_ekuitas = ($request->surplus_pos / $request->kerugian) / $request->total_ekuitas;
        $target_imbalan_atas_ekuitas = $request->target_imbalan_atas_ekuitas / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_aset', 'hasil' => $imbalan_atas_aset], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_ekuitas', 'hasil' => $imbalan_atas_ekuitas], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_aset', 'hasil' => $target_imbalan_atas_aset], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_ekuitas', 'hasil' => $target_imbalan_atas_ekuitas], ['variabel', 'indikator_maturity_id']);

        $perbedaan_imbalan_atas_aset = $imbalan_atas_aset / $target_imbalan_atas_aset;
        if ($perbedaan_imbalan_atas_aset >= 0.6) {
            $ke31 = 5;
        } else if ($perbedaan_imbalan_atas_aset >= 0.4 && $perbedaan_imbalan_atas_aset < 0.6) {
            $ke31 = 4;
        } else if ($perbedaan_imbalan_atas_aset >= 0.2 && $perbedaan_imbalan_atas_aset < 0.4) {
            $ke31 = 3;
        } else if ($perbedaan_imbalan_atas_aset >= 0 && $perbedaan_imbalan_atas_aset < 0.2) {
            $ke31 = 2;
        } else {
            $ke31 = 1;
        }
        $perbedaan_imbalan_atas_ekuitas = $imbalan_atas_ekuitas / $target_imbalan_atas_ekuitas;
        if ($perbedaan_imbalan_atas_ekuitas >= 0.6) {
            $ke32 = 5;
        } else if ($perbedaan_imbalan_atas_ekuitas >= 0.4 && $perbedaan_imbalan_atas_ekuitas < 0.6) {
            $ke32 = 4;
        } else if ($perbedaan_imbalan_atas_ekuitas >= 0.2 && $perbedaan_imbalan_atas_ekuitas < 0.4) {
            $ke32 = 3;
        } else if ($perbedaan_imbalan_atas_ekuitas >= 0 && $perbedaan_imbalan_atas_ekuitas < 0.2) {
            $ke32 = 2;
        } else {
            $ke32 = 1;
        }
        $ke3 = intval(round(($ke31 + $ke32) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'ke3', 'hasil' => $ke3, 'variabel_fullname' => 'KE.3 - Efektivitas'], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR KE.4
        $tingkat_kemandirian = $request->pendapatan_lra / $request->total_belanja_lra;
        $target_tingkat_kemandirian = $request->target_tingkat_kemandirian / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'tingkat_kemandirian', 'hasil' => $tingkat_kemandirian], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'target_tingkat_kemandirian', 'hasil' => $target_tingkat_kemandirian], ['variabel', 'indikator_maturity_id']);

        $perbedaan_tingkat_kemandirian = $tingkat_kemandirian / $target_tingkat_kemandirian;
        if ($perbedaan_tingkat_kemandirian >= 0.6) {
            $ke4 = 5;
        } else if ($perbedaan_tingkat_kemandirian >= 0.4 && $perbedaan_tingkat_kemandirian < 0.6) {
            $ke4 = 4;
        } else if ($perbedaan_tingkat_kemandirian >= 0.2 && $perbedaan_tingkat_kemandirian < 0.4) {
            $ke4 = 3;
        } else if ($perbedaan_tingkat_kemandirian >= 0 && $perbedaan_tingkat_kemandirian < 0.2) {
            $ke4 = 2;
        } else {
            $ke4 = 1;
        }
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'ke4', 'hasil' => $ke4, 'variabel_fullname' => 'KE.4 - Tingkat Kemandirian'], ['variabel', 'indikator_maturity_id']);

        return redirect()->route('pelayanan.index')->with('success', 'Berhasil Mengupload Data Aspek Keuangan!');
    }
}
