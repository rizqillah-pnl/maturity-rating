<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenHasil;
use App\Models\InputanMaturity;
use App\Models\IndikatorMaturity;
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
        $inputan = InputanMaturity::where('aspek_maturity_id', 'KI')->where('user_id', auth()->user()->id)->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.kapabilitas-internal', ['title' => 'Aspek Kapabilitas Internal', 'inputan' => $new_inputan]);
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
            ['indikator_maturity_id' => 'KI.1', 'inputan' => 'indikator11', 'tipe_inputan' => 'ki_indikator11' . auth()->user()->id, 'nilai' => $request->indikator11, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.1', 'inputan' => 'indikator12', 'tipe_inputan' => 'ki_indikator12' . auth()->user()->id, 'nilai' => $request->indikator12, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.1', 'inputan' => 'indikator13', 'tipe_inputan' => 'ki_indikator13' . auth()->user()->id, 'nilai' => $request->indikator13, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.2', 'inputan' => 'indikator21', 'tipe_inputan' => 'ki_indikator21' . auth()->user()->id, 'nilai' => $request->indikator21, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.2', 'inputan' => 'indikator22', 'tipe_inputan' => 'ki_indikator22' . auth()->user()->id, 'nilai' => $request->indikator22, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.3', 'inputan' => 'indikator31', 'tipe_inputan' => 'ki_indikator31' . auth()->user()->id, 'nilai' => $request->indikator31, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.3', 'inputan' => 'indikator32', 'tipe_inputan' => 'ki_indikator32' . auth()->user()->id, 'nilai' => $request->indikator32, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.3', 'inputan' => 'indikator33', 'tipe_inputan' => 'ki_indikator33' . auth()->user()->id, 'nilai' => $request->indikator33, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.3', 'inputan' => 'indikator34', 'tipe_inputan' => 'ki_indikator34' . auth()->user()->id, 'nilai' => $request->indikator34, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.4', 'inputan' => 'indikator41', 'tipe_inputan' => 'ki_indikator41' . auth()->user()->id, 'nilai' => $request->indikator41, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.4', 'inputan' => 'indikator42', 'tipe_inputan' => 'ki_indikator42' . auth()->user()->id, 'nilai' => $request->indikator42, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'KI.4', 'inputan' => 'indikator43', 'tipe_inputan' => 'ki_indikator43' . auth()->user()->id, 'nilai' => $request->indikator43, 'aspek_maturity_id' => 'KI', 'user_id' => auth()->user()->id],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR KI.1
        $ki1 = intval(round(($request->indikator11 + $request->indikator12 + $request->indikator13) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.1', 'variabel' => 'ki1' . auth()->user()->id, 'hasil' => $ki1, 'variabel_fullname' => 'KI.1 - Sumber Daya Manusia', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KI.1', 'indikator' => 'ki.1' . auth()->user()->id, 'nilai' => $ki1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR KI.2
        $ki2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.2', 'variabel' => 'ki2' . auth()->user()->id, 'hasil' => $ki2, 'variabel_fullname' => 'KI.2 - Proses Bisnis', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KI.2', 'indikator' => 'ki.2' . auth()->user()->id, 'nilai' => $ki2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR KI.3
        $ki3 = intval(round(($request->indikator31 + $request->indikator32 + $request->indikator33 + $request->indikator34) / 4));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.3', 'variabel' => 'ki3' . auth()->user()->id, 'hasil' => $ki3, 'variabel_fullname' => 'KI.3 - Teknologi', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KI.3', 'indikator' => 'ki.3' . auth()->user()->id, 'nilai' => $ki3, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR KI.4
        $ki4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'KI.4', 'variabel' => 'ki4' . auth()->user()->id, 'hasil' => $ki4, 'variabel_fullname' => 'KI.4 - Customer Focus', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'KI.4', 'indikator' => 'ki.4' . auth()->user()->id, 'nilai' => $ki4, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        return redirect()->back()->with('success', 'Berhasil Mengupload Data Aspek Kapabilitas Internal!');
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
