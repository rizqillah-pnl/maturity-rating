<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;

class LingkunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.lingkungan', ['title' => 'Aspek Lingkungan']);
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
        // INDIKATOR LI.1
        $li1 = intval(round(($request->indikator11 + $request->indikator12 + $request->indikator13) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'LI.1', 'variabel' => 'li1', 'hasil' => $li1, 'variabel_fullname' => 'LI.1 - Environmental Footprint Management'], ['variabel', 'indikator_maturity_id']);

        // INDIKATOR LI.2
        $li2 = intval(round(($request->indikator21 + $request->indikator22 + $request->indikator23) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'LI.2', 'variabel' => 'li2', 'hasil' => $li2, 'variabel_fullname' => 'LI.2 - Penggunaan Sumber Daya'], ['variabel', 'indikator_maturity_id']);

        return redirect()->to('hasil_maturity')->with('success', 'Berhasil Mengupload Data Aspek Inovasi!');
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
