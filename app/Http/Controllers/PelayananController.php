<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('pages.pelayanan', ['title' => 'Aspek Pelayanan']);
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
        // INDIKATOR PL.1
        $indeks_kepuasan_masyarakat = $request->hasil_penilaian_ikm / $request->skala_maks_ikm;
        $target_ikm = $request->target_ikm / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.1', 'variabel' => 'indeks_kepuasan_masyarakat', 'hasil' => $indeks_kepuasan_masyarakat], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.1', 'variabel' => 'target_ikm', 'hasil' => $target_ikm], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR PL.2
        $efisiensi_waktu_pelayanan = $request->layanan_tpt_waktu / $request->jum_layanan;
        $target_efisiensi_pelayanan = $request->target_efisiensi_pelayanan / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.2', 'variabel' => 'efisiensi_waktu_pelayanan', 'hasil' => $efisiensi_waktu_pelayanan], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.2', 'variabel' => 'target_efisiensi_pelayanan', 'hasil' => $target_efisiensi_pelayanan], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR PL.3
        $tingkat_pengaduan_ditindaklanjuti = $request->pengaduan_ditindaklanjut / $request->jumlah_pengaduan;
        $tingkat_penyelesaian_pengaduan_tepat_waktu = $request->penyelasaian_tepat_waktu / $request->pengaduan_ditindaklanjut;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.3', 'variabel' => 'tingkat_pengaduan_ditindaklanjuti', 'hasil' => $tingkat_pengaduan_ditindaklanjuti], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.3', 'variabel' => 'tingkat_penyelesaian_pengaduan_tepat_waktu', 'hasil' => $tingkat_penyelesaian_pengaduan_tepat_waktu], ['variabel', 'indikator_maturity_id']);


        // INDIKATOR PL.4
        $tingkat_keberhasilan_pemenuhan_layanan = $request->realisasi_sub_indikator / $request->target_sub_indikator;
        $target_keberhasilan_pemenuhan_lyn = $request->target_keberhasilan_pemenuhan_lyn / 100;
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.4', 'variabel' => 'tingkat_keberhasilan_pemenuhan_layanan', 'hasil' => $tingkat_keberhasilan_pemenuhan_layanan], ['variabel', 'indikator_maturity_id']);
        VariabelIndikator::upsert(['indikator_maturity_id' => 'PL.4', 'variabel' => 'target_keberhasilan_pemenuhan_lyn', 'hasil' => $target_keberhasilan_pemenuhan_lyn], ['variabel', 'indikator_maturity_id']);

        return redirect()->route('kapabilitas_internal.index')->with('success', 'Berhasil Mengupload Data Aspek Pelayanan!');
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
