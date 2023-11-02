<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenHasil;
use App\Models\InputanMaturity;
use App\Models\IndikatorMaturity;
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
        $inputan = InputanMaturity::where('aspek_maturity_id', 'LI')->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.lingkungan', ['title' => 'Aspek Lingkungan', 'inputan' => $new_inputan]);
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
            ['indikator_maturity_id' => 'LI.1', 'inputan' => 'indikator11', 'tipe_inputan' => 'li_indikator11', 'nilai' => $request->indikator11, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'LI.1', 'inputan' => 'indikator12', 'tipe_inputan' => 'li_indikator12', 'nilai' => $request->indikator12, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'LI.1', 'inputan' => 'indikator13', 'tipe_inputan' => 'li_indikator13', 'nilai' => $request->indikator13, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'LI.2', 'inputan' => 'indikator21', 'tipe_inputan' => 'li_indikator21', 'nilai' => $request->indikator21, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'LI.2', 'inputan' => 'indikator22', 'tipe_inputan' => 'li_indikator22', 'nilai' => $request->indikator22, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'LI.2', 'inputan' => 'indikator23', 'tipe_inputan' => 'li_indikator23', 'nilai' => $request->indikator23, 'aspek_maturity_id' => 'LI', 'user_id' => auth()->user()->id],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR LI.1
        $li1 = intval(round(($request->indikator11 + $request->indikator12 + $request->indikator13) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'LI.1', 'variabel' => 'li1', 'hasil' => $li1, 'variabel_fullname' => 'LI.1 - Environmental Footprint Management', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'LI.1', 'indikator' => 'li.1' . auth()->user()->id, 'nilai' => $li1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR LI.2
        $li2 = intval(round(($request->indikator21 + $request->indikator22 + $request->indikator23) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'LI.2', 'variabel' => 'li2', 'hasil' => $li2, 'variabel_fullname' => 'LI.2 - Penggunaan Sumber Daya', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'LI.2', 'indikator' => 'li.2' . auth()->user()->id, 'nilai' => $li2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        return redirect()->back()->with('success', 'Berhasil Mengupload Data Aspek Inovasi!');
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
