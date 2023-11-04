<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenHasil;
use App\Models\InputanMaturity;
use App\Models\IndikatorMaturity;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputan = InputanMaturity::where('aspek_maturity_id', 'PL')->where('user_id', auth()->user()->id)->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.pelayanan', ['title' => 'Aspek Pelayanan', 'inputan' => $new_inputan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menginput Nilai Variabel Awal
        InputanMaturity::upsert([
            ['indikator_maturity_id' => 'PL.1', 'inputan' => 'hasil_penilaian_ikm', 'tipe_inputan' => 'pl_hasil_penilaian_ikm' . auth()->user()->id, 'nilai' => $request->hasil_penilaian_ikm, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.1', 'inputan' => 'skala_maks_ikm', 'tipe_inputan' => 'pl_skala_maks_ikm' . auth()->user()->id, 'nilai' => $request->skala_maks_ikm, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.1', 'inputan' => 'target_ikm', 'tipe_inputan' => 'pl_target_ikm' . auth()->user()->id, 'nilai' => $request->target_ikm, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.2', 'inputan' => 'layanan_tpt_waktu', 'tipe_inputan' => 'pl_layanan_tpt_waktu' . auth()->user()->id, 'nilai' => $request->layanan_tpt_waktu, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.2', 'inputan' => 'jum_layanan', 'tipe_inputan' => 'pl_jum_layanan' . auth()->user()->id, 'nilai' => $request->jum_layanan, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.2', 'inputan' => 'target_efisiensi_pelayanan', 'tipe_inputan' => 'pl_target_efisiensi_pelayanan' . auth()->user()->id, 'nilai' => $request->target_efisiensi_pelayanan, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.3', 'inputan' => 'pengaduan_ditindaklanjut', 'tipe_inputan' => 'pl_pengaduan_ditindaklanjut' . auth()->user()->id, 'nilai' => $request->pengaduan_ditindaklanjut, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.3', 'inputan' => 'jumlah_pengaduan', 'tipe_inputan' => 'pl_jumlah_pengaduan' . auth()->user()->id, 'nilai' => $request->jumlah_pengaduan, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.3', 'inputan' => 'penyelasaian_tepat_waktu', 'tipe_inputan' => 'pl_penyelasaian_tepat_waktu' . auth()->user()->id, 'nilai' => $request->penyelasaian_tepat_waktu, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.4', 'inputan' => 'realisasi_sub_indikator', 'tipe_inputan' => 'pl_realisasi_sub_indikator' . auth()->user()->id, 'nilai' => $request->realisasi_sub_indikator, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.4', 'inputan' => 'target_sub_indikator', 'tipe_inputan' => 'pl_target_sub_indikator' . auth()->user()->id, 'nilai' => $request->target_sub_indikator, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'PL.4', 'inputan' => 'target_keberhasilan_pemenuhan_layanan', 'tipe_inputan' => 'pl_target_keberhasilan_pemenuhan_layanan' . auth()->user()->id, 'nilai' => $request->target_keberhasilan_pemenuhan_layanan, 'aspek_maturity_id' => 'PL', 'user_id' => auth()->user()->id],
        ], ['user_id', 'tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR PL.1
        $skala_maks_ikm = ($request->skala_maks_ikm == 0) ? 1 : $request->skala_maks_ikm;
        $indeks_kepuasan_masyarakat = $request->hasil_penilaian_ikm / $skala_maks_ikm;
        $target_ikm = $request->target_ikm / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.1', 'variabel' => 'indeks_kepuasan_masyarakat' . auth()->user()->id, 'hasil' => $indeks_kepuasan_masyarakat, 'variabel_fullname' => 'Indeks Kepuasan Masyarakat (IKM)', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.1', 'variabel' => 'target_ikm' . auth()->user()->id, 'hasil' => $target_ikm, 'variabel_fullname' => 'Target Indeks Kepuasan Masyarakat (IKM)', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_ikm = ($target_ikm == 0) ? 1 : $target_ikm;
        $perbedaan_indeks_kepuasan_masyarakat = $indeks_kepuasan_masyarakat / $target_ikm;
        if ($perbedaan_indeks_kepuasan_masyarakat >= 0.6) {
            $pl1 = 5;
        } else if ($perbedaan_indeks_kepuasan_masyarakat >= 0.4 && $perbedaan_indeks_kepuasan_masyarakat < 0.6) {
            $pl1 = 4;
        } else if ($perbedaan_indeks_kepuasan_masyarakat >= 0.2 && $perbedaan_indeks_kepuasan_masyarakat < 0.4) {
            $pl1 = 3;
        } else if ($perbedaan_indeks_kepuasan_masyarakat >= 0 && $perbedaan_indeks_kepuasan_masyarakat < 0.2) {
            $pl1 = 2;
        } else {
            $pl1 = 1;
        }
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.1', 'variabel' => 'pl1' . auth()->user()->id, 'hasil' => $pl1, 'variabel_fullname' => 'PL.1 - Indeks Kepuasan Masyarakat', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'PL.1', 'indikator' => 'pl.1' . auth()->user()->id, 'nilai' => $pl1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);


        // INDIKATOR PL.2
        $jum_layanan = ($request->jum_layanan == 0) ? 1 : $request->jum_layanan;
        $efisiensi_waktu_pelayanan = $request->layanan_tpt_waktu / $jum_layanan;
        $target_efisiensi_pelayanan = $request->target_efisiensi_pelayanan / 100;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.2', 'variabel' => 'efisiensi_waktu_pelayanan' . auth()->user()->id, 'hasil' => $efisiensi_waktu_pelayanan, 'variabel_fullname' => 'Efisiensi Waktu Pelayanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.2', 'variabel' => 'target_efisiensi_pelayanan' . auth()->user()->id, 'hasil' => $target_efisiensi_pelayanan, 'variabel_fullname' => 'Target Efisiensi Waktu Pelayanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $target_efisiensi_pelayanan = ($target_efisiensi_pelayanan == 0) ? 1 : $target_efisiensi_pelayanan;
        $perbedaan_efisiensi_waktu_pelayanan = $efisiensi_waktu_pelayanan / $target_efisiensi_pelayanan;
        if ($perbedaan_efisiensi_waktu_pelayanan >= 0.6) {
            $pl2 = 5;
        } else if ($perbedaan_efisiensi_waktu_pelayanan >= 0.4 && $perbedaan_efisiensi_waktu_pelayanan < 0.6) {
            $pl2 = 4;
        } else if ($perbedaan_efisiensi_waktu_pelayanan >= 0.2 && $perbedaan_efisiensi_waktu_pelayanan < 0.4) {
            $pl2 = 3;
        } else if ($perbedaan_efisiensi_waktu_pelayanan >= 0 && $perbedaan_efisiensi_waktu_pelayanan < 0.2) {
            $pl2 = 2;
        } else {
            $pl2 = 1;
        }
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.2', 'variabel' => 'pl2' . auth()->user()->id, 'hasil' => $pl2, 'variabel_fullname' => 'PL.2 - Efisiensi Waktu Pelayanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'PL.2', 'indikator' => 'pl.2' . auth()->user()->id, 'nilai' => $pl2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);


        // INDIKATOR PL.3
        $jumlah_pengaduan = ($request->jumlah_pengaduan == 0) ? 1 : $request->jumlah_pengaduan;
        $tingkat_pengaduan_ditindaklanjuti = $request->pengaduan_ditindaklanjut / $jumlah_pengaduan;

        $pengaduan_ditindaklanjut = ($request->pengaduan_ditindaklanjut == 0) ? 1 : $request->pengaduan_ditindaklanjut;
        $tingkat_penyelesaian_pengaduan_tepat_waktu = $request->penyelasaian_tepat_waktu / $pengaduan_ditindaklanjut;

        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.3', 'variabel' => 'tingkat_pengaduan_ditindaklanjuti' . auth()->user()->id, 'hasil' => $tingkat_pengaduan_ditindaklanjuti, 'variabel_fullname' => 'Tingkat/Jumlah Pengaduan Ditindaklanjuti', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.3', 'variabel' => 'tingkat_penyelesaian_pengaduan_tepat_waktu' . auth()->user()->id, 'hasil' => $tingkat_penyelesaian_pengaduan_tepat_waktu, 'variabel_fullname' => 'Tingkat/Jumlah Penyelesaian Pengaduan Tepat Waktu', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        if ($tingkat_pengaduan_ditindaklanjuti >= 0.9) {
            $pl31 = 5;
        } else if ($tingkat_pengaduan_ditindaklanjuti >= 0.7 && $tingkat_pengaduan_ditindaklanjuti < 0.9) {
            $pl31 = 4;
        } else if ($tingkat_pengaduan_ditindaklanjuti >= 0.4 && $tingkat_pengaduan_ditindaklanjuti < 0.7) {
            $pl31 = 3;
        } else if ($tingkat_pengaduan_ditindaklanjuti >= 0.2 && $tingkat_pengaduan_ditindaklanjuti < 0.4) {
            $pl31 = 2;
        } else {
            $pl31 = 1;
        }
        if ($tingkat_penyelesaian_pengaduan_tepat_waktu >= 0.9) {
            $pl32 = 5;
        } else if ($tingkat_penyelesaian_pengaduan_tepat_waktu >= 0.7 && $tingkat_penyelesaian_pengaduan_tepat_waktu < 0.9) {
            $pl32 = 4;
        } else if ($tingkat_penyelesaian_pengaduan_tepat_waktu >= 0.4 && $tingkat_penyelesaian_pengaduan_tepat_waktu < 0.7) {
            $pl32 = 3;
        } else if ($tingkat_penyelesaian_pengaduan_tepat_waktu >= 0.2 && $tingkat_penyelesaian_pengaduan_tepat_waktu < 0.4) {
            $pl32 = 2;
        } else {
            $pl32 = 1;
        }

        $pl3 = intval(round(($pl31 + $pl32) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.3', 'variabel' => 'pl3' . auth()->user()->id, 'hasil' => $pl3, 'variabel_fullname' => 'PL.3 - Sistem Pengaduan Layanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'PL.3', 'indikator' => 'pl.3' . auth()->user()->id, 'nilai' => $pl3, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);


        // INDIKATOR PL.4
        $target_sub_indikator = ($request->target_sub_indikator == 0) ? 1 : $request->target_sub_indikator;
        $tingkat_keberhasilan_pemenuhan_layanan = $request->realisasi_sub_indikator / $target_sub_indikator;
        $target_keberhasilan_pemenuhan_layanan = ($request->target_keberhasilan_pemenuhan_layanan / 100);

        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.4', 'variabel' => 'tingkat_keberhasilan_pemenuhan_layanan' . auth()->user()->id, 'hasil' => $tingkat_keberhasilan_pemenuhan_layanan, 'variabel_fullname' => 'Tingkat/Jumlah Keberhasilan Pemenuhan Layanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.4', 'variabel' => 'target_keberhasilan_pemenuhan_layanan' . auth()->user()->id, 'hasil' => $target_keberhasilan_pemenuhan_layanan, 'variabel_fullname' => 'Target Jumlah Keberhasilan Pemenuhan Layanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        $perbedaan_tingkat_keberhasilan_pemenuhan_layanan = $tingkat_keberhasilan_pemenuhan_layanan / $target_keberhasilan_pemenuhan_layanan;
        if ($perbedaan_tingkat_keberhasilan_pemenuhan_layanan >= 0.6) {
            $pl4 = 5;
        } else if ($perbedaan_tingkat_keberhasilan_pemenuhan_layanan >= 0.4 && $perbedaan_tingkat_keberhasilan_pemenuhan_layanan < 0.6) {
            $pl4 = 4;
        } else if ($perbedaan_tingkat_keberhasilan_pemenuhan_layanan >= 0.2 && $perbedaan_tingkat_keberhasilan_pemenuhan_layanan < 0.4) {
            $pl4 = 3;
        } else if ($perbedaan_tingkat_keberhasilan_pemenuhan_layanan >= 0 && $perbedaan_tingkat_keberhasilan_pemenuhan_layanan < 0.2) {
            $pl4 = 2;
        } else {
            $pl4 = 1;
        }

        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.4', 'variabel' => 'pl4' . auth()->user()->id, 'hasil' => $pl4, 'variabel_fullname' => 'PL.4 - Tingkat Keberhasilan Pemenuhan Layanan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'PL.4', 'indikator' => 'pl.4' . auth()->user()->id, 'nilai' => $pl4, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        return redirect()->back()->with('success', 'Berhasil Mengupload Data Aspek Pelayanan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
