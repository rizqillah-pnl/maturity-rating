<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class KapabilitasInternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kapabilitas-internal', ['title' => 'Aspek Kapabilitas Internal']);
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
        // INDIKATOR KI.1
        $ki1 = intval(round(($request->indikator11 + $request->indikator12 + $request->indikator13) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.1', 'variabel' => 'ki1', 'hasil' => $ki1, 'variabel_fullname' => 'KI.1 - Sumber Daya Manusia'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR KI.2
        $ki2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.2', 'variabel' => 'ki2', 'hasil' => $ki2, 'variabel_fullname' => 'KI.2 - Proses Bisnis'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR KI.3
        $ki3 = intval(round(($request->indikator31 + $request->indikator32 + $request->indikator33 + $request->indikator34) / 4));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.3', 'variabel' => 'ki3', 'hasil' => $ki3, 'variabel_fullname' => 'KI.3 - Teknologi'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR KI.4
        $ki4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.4', 'variabel' => 'ki4', 'hasil' => $ki4, 'variabel_fullname' => 'KI.4 - Customer Focus'], ['variabel', 'indikator_maturity_id']);

        return redirect()->route('tata_kk.index')->with('success', 'Berhasil Mengupload Data Aspek Kapabilitas Internal!');
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
