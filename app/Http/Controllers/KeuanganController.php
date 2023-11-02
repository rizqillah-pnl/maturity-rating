<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenHasil;
use App\Models\IndikatorHasil;
use App\Models\InputanMaturity;
use App\Models\IndikatorMaturity;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class KeuanganController extends Controller
{
    public function index()
    {
        $inputan = InputanMaturity::where('aspek_maturity_id', 'KE')->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.keuangan', ['title' => 'Aspek Keuangan', 'inputan' => $new_inputan]);
    }

    public function store(Request $request)
    {
        // Menginput Nilai Variabel Awal
        InputanMaturity::upsert([
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'aset_lancar', 'tipe_inputan' => 'ke_aset_lancar', 'nilai' => $request->aset_lancar, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'kwjb_jgk', 'tipe_inputan' => 'ke_kwjb_jgk', 'nilai' => $request->kwjb_jgk, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'pdp_inves_jgk', 'tipe_inputan' => 'ke_pdp_inves_jgk', 'nilai' => $request->pdp_inves_jgk, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'saldo_rek_op', 'tipe_inputan' => 'ke_saldo_rek_op', 'nilai' => $request->saldo_rek_op, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'pengelolaan_kas', 'tipe_inputan' => 'ke_pengelolaan_kas', 'nilai' => $request->pengelolaan_kas, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'target_rasio_lancar', 'tipe_inputan' => 'ke_target_rasio_lancar', 'nilai' => $request->target_rasio_lancar, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.1', 'inputan' => 'target_optimalisasi_kas', 'tipe_inputan' => 'ke_target_optimalisasi_kas', 'nilai' => $request->target_optimalisasi_kas, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'output_blu', 'tipe_inputan' => 'ke_output_blu', 'nilai' => $request->output_blu, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'input_blu', 'tipe_inputan' => 'ke_input_blu', 'nilai' => $request->input_blu, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.2', 'inputan' => 'target_pobo', 'tipe_inputan' => 'ke_target_pobo', 'nilai' => $request->target_pobo, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'surplus_pos', 'tipe_inputan' => 'ke_surplus_pos', 'nilai' => $request->surplus_pos, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'kerugian', 'tipe_inputan' => 'ke_kerugian', 'nilai' => $request->kerugian, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'total_aset', 'tipe_inputan' => 'ke_total_aset', 'nilai' => $request->total_aset, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'total_ekuitas', 'tipe_inputan' => 'ke_total_ekuitas', 'nilai' => $request->total_ekuitas, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'target_imbalan_atas_aset', 'tipe_inputan' => 'ke_target_imbalan_atas_aset', 'nilai' => $request->target_imbalan_atas_aset, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.3', 'inputan' => 'target_imbalan_atas_ekuitas', 'tipe_inputan' => 'ke_target_imbalan_atas_ekuitas', 'nilai' => $request->target_imbalan_atas_ekuitas, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'pendapatan_lra', 'tipe_inputan' => 'ke_pendapatan_lra', 'nilai' => $request->pendapatan_lra, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'total_belanja_lra', 'tipe_inputan' => 'ke_total_belanja_lra', 'nilai' => $request->total_belanja_lra, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KE.4', 'inputan' => 'target_tingkat_kemandirian', 'tipe_inputan' => 'ke_target_tingkat_kemandirian', 'nilai' => $request->target_tingkat_kemandirian, 'aspek_maturity_id' => 'KE', 'user_id' => auth()->user()->id],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR KE.1
        $kwjb_jgk = ($request->kwjb_jgk == 0) ? 1 : $request->kwjb_jgk;
        $rasio_lancar = $request->aset_lancar / $kwjb_jgk;
        $target_rasio_lancar = $request->target_rasio_lancar / 100;

        $saldo_rek_op = ($request->saldo_rek_op == 0) ? 1 : $request->saldo_rek_op;
        $pengelolaan_kas = ($request->pengelolaan_kas == 0) ? 1 : $request->pengelolaan_kas;
        $rasio_optimalisasi_kas = $request->pdp_inves_jgk / ($saldo_rek_op + $pengelolaan_kas);
        $target_optimalisasi_kas = $request->target_optimalisasi_kas / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_lancar', 'hasil' => $rasio_lancar, 'variabel_fullname' => 'Rasio Lancar', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'rasio_optimalisasi_kas', 'hasil' => $rasio_optimalisasi_kas, 'variabel_fullname' => 'Rasio Optimalisasi Kas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_optimalisasi_kas', 'hasil' => $target_optimalisasi_kas, 'variabel_fullname' => 'Target Rasio Optimalisasi Kas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'target_rasio_lancar', 'hasil' => $target_rasio_lancar, 'variabel_fullname' => 'Target Rasio1 Lancar', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_rasio_lancar = ($target_rasio_lancar == 0) ? 1 : $target_rasio_lancar;
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

        $target_optimalisasi_kas = ($target_optimalisasi_kas == 0) ? 1 : $target_optimalisasi_kas;
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

        $ke1 = intval(($ke11 + $ke12) / 2);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.1', 'variabel' => 'ke1', 'hasil' => $ke1, 'variabel_fullname' => 'KE.1 - Likuiditas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KE.1', 'indikator' => 'ke.1' . auth()->user()->id, 'nilai' => $ke1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);



        // INDIKATOR KE.2
        $input_blu = ($request->input_blu == 0) ? 1 : $request->input_blu;
        $pobo = $request->output_blu / $input_blu;
        $target_pobo = $request->target_pobo / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'pobo', 'hasil' => $pobo, 'variabel_fullname' => 'Pendapatan Operasional terhadap Beban Operasional (POBO)', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'target_pobo', 'hasil' => $target_pobo, 'variabel_fullname' => 'Target Pendapatan Operasional terhadap Beban Operasional (POBO)', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_pobo = ($target_pobo == 0) ? 1 : $target_pobo;
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
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.2', 'variabel' => 'ke2', 'hasil' => $ke2, 'variabel_fullname' => 'KE.2 - Efisiensi', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KE.2', 'indikator' => 'ke.2' . auth()->user()->id, 'nilai' => $ke2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);


        // INDIKATOR KE.3
        $kerugian = ($request->kerugian == 0) ? 1 : $request->kerugian;
        $total_aset = ($request->total_aset == 0) ? 1 : $request->total_aset;
        $imbalan_atas_aset = ($request->surplus_pos / $kerugian) / $total_aset;
        $target_imbalan_atas_aset = $request->target_imbalan_atas_aset / 100;
        $total_ekuitas = ($request->total_ekuitas == 0) ? 1 : $request->total_ekuitas;
        $imbalan_atas_ekuitas = ($request->surplus_pos / $kerugian) / $total_ekuitas;
        $target_imbalan_atas_ekuitas = $request->target_imbalan_atas_ekuitas / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_aset', 'hasil' => $imbalan_atas_aset, 'variabel_fullname' => 'Imbalan Atas Aset', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'imbalan_atas_ekuitas', 'hasil' => $imbalan_atas_ekuitas, 'variabel_fullname' => 'Imbalan Atas Ekuitas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_aset', 'hasil' => $target_imbalan_atas_aset, 'variabel_fullname' => 'Target Imbalan Atas Aset', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'target_imbalan_atas_ekuitas', 'hasil' => $target_imbalan_atas_ekuitas, 'variabel_fullname' => 'Target Imbalan Atas Ekuitas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_imbalan_atas_aset = ($target_imbalan_atas_aset == 0) ? 1 : $target_imbalan_atas_aset;
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

        $target_imbalan_atas_ekuitas = ($target_imbalan_atas_ekuitas == 0) ? 1 : $target_imbalan_atas_ekuitas;
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
        $ke3 = intval(($ke31 + $ke32) / 2);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.3', 'variabel' => 'ke3', 'hasil' => $ke3, 'variabel_fullname' => 'KE.3 - Efektivitas', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KE.3', 'indikator' => 'ke.3' . auth()->user()->id, 'nilai' => $ke3, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);


        // INDIKATOR KE.4
        $total_belanja_lra = ($request->total_belanja_lra == 0) ? 1 : $request->total_belanja_lra;
        $tingkat_kemandirian = $request->pendapatan_lra / $total_belanja_lra;
        $target_tingkat_kemandirian = $request->target_tingkat_kemandirian / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'tingkat_kemandirian', 'hasil' => $tingkat_kemandirian, 'variabel_fullname' => 'Tingkat Kemandirian', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'target_tingkat_kemandirian', 'hasil' => $target_tingkat_kemandirian, 'variabel_fullname' => 'Target Tingkat Kemandirian', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_tingkat_kemandirian = ($target_tingkat_kemandirian == 0) ? 1 : $target_tingkat_kemandirian;
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
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KE.4', 'variabel' => 'ke4', 'hasil' => $ke4, 'variabel_fullname' => 'KE.4 - Tingkat Kemandirian', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KE.4', 'indikator' => 'ke.4' . auth()->user()->id, 'nilai' => $ke4, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        return redirect()->back()->with('success', 'Berhasil Mengupload Data Aspek Keuangan!');
    }
}
