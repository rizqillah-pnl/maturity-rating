<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.inovasi', ['title' => 'Aspek Inovasi']);
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
        // INDIKATOR IN.1
        $in1 = intval(round(($request->indikator11 + $request->indikator12) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.1', 'variabel' => 'in1', 'hasil' => $in1, 'variabel_fullname' => 'IN.1 - Keterlibatan Pengguna Jasa'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR IN.2
        $in2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.2', 'variabel' => 'in2', 'hasil' => $in2, 'variabel_fullname' => 'IN.2 - Proses Inovasi'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR IN.3
        $in3 = intval(round(($request->indikator31 + $request->indikator32 + $request->indikator33) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.3', 'variabel' => 'in3', 'hasil' => $in3, 'variabel_fullname' => 'IN.3 - Manajemen Pengetahuan'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR IN.4
        $in4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.4', 'variabel' => 'in4', 'hasil' => $in4, 'variabel_fullname' => 'IN.4 - Manajemen Perubahan'], ['variabel', 'indikator_maturity_id']);

        return redirect()->route('lingkungan.index')->with('success', 'Berhasil Mengupload Data Aspek Inovasi!');
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
