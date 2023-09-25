<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class TataKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tata_kk', ['title' => 'Aspek Tata Kelola dan Kepemimpinan']);
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
        // INDIKATOR TK.1
        $tk1 = intval(round(($request->indikator11 + $request->indikator12) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.1', 'variabel' => 'tk1', 'hasil' => $tk1, 'variabel_fullname' => 'TK.1 - Perencanaan Strategis'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR TK.2
        $tk2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.2', 'variabel' => 'tk2', 'hasil' => $tk2, 'variabel_fullname' => 'TK.2 - Etika Bisnis'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR TK.3
        $tk3 = intval(round(($request->indikator31 + $request->indikator32) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.3', 'variabel' => 'tk3', 'hasil' => $tk3, 'variabel_fullname' => 'TK.3 - Stakeholder Relationship'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR TK.4
        $tk4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.4', 'variabel' => 'tk4', 'hasil' => $tk4, 'variabel_fullname' => 'TK.4 - Manajemen Risiko'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR TK.5
        $tk5 = intval(round(($request->indikator51 + $request->indikator52 + $request->indikator53) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.5', 'variabel' => 'tk5', 'hasil' => $tk5, 'variabel_fullname' => 'TK.5 - Pengawasan dan Pelaporan'], ['variabel', 'indikator_maturity_id']);

        return redirect()->route('inovasi.index')->with('success', 'Berhasil Mengupload Data Aspek Tata Kelola dan Kepemimpinan!');
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
