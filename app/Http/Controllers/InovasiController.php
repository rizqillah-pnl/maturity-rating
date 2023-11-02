<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputanMaturity;
use App\Models\VariabelIndikator;
use App\Http\Controllers\Controller;
use App\Models\IndikatorMaturity;
use App\Models\KomponenHasil;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputan = InputanMaturity::where('aspek_maturity_id', 'IN')->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.inovasi', ['title' => 'Aspek Inovasi', 'inputan' => $new_inputan]);
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
            ['indikator_maturity_id' => 'IN.1', 'inputan' => 'indikator11', 'tipe_inputan' => 'in_indikator11', 'nilai' => $request->indikator11, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.1', 'inputan' => 'indikator12', 'tipe_inputan' => 'in_indikator12', 'nilai' => $request->indikator12, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.2', 'inputan' => 'indikator21', 'tipe_inputan' => 'in_indikator21', 'nilai' => $request->indikator21, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.2', 'inputan' => 'indikator22', 'tipe_inputan' => 'in_indikator22', 'nilai' => $request->indikator22, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.3', 'inputan' => 'indikator31', 'tipe_inputan' => 'in_indikator31', 'nilai' => $request->indikator31, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.3', 'inputan' => 'indikator32', 'tipe_inputan' => 'in_indikator32', 'nilai' => $request->indikator32, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.3', 'inputan' => 'indikator33', 'tipe_inputan' => 'in_indikator33', 'nilai' => $request->indikator33, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.4', 'inputan' => 'indikator41', 'tipe_inputan' => 'in_indikator41', 'nilai' => $request->indikator41, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.4', 'inputan' => 'indikator42', 'tipe_inputan' => 'in_indikator42', 'nilai' => $request->indikator42, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'IN.4', 'inputan' => 'indikator43', 'tipe_inputan' => 'in_indikator43', 'nilai' => $request->indikator43, 'aspek_maturity_id' => 'IN', 'user_id' => auth()->user()->id],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);

        // INDIKATOR IN.1
        $in1 = intval(round(($request->indikator11 + $request->indikator12) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.1', 'variabel' => 'in1', 'hasil' => $in1, 'variabel_fullname' => 'IN.1 - Keterlibatan Pengguna Jasa', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'IN.1', 'indikator' => 'in.1' . auth()->user()->id, 'nilai' => $in1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR IN.2
        $in2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.2', 'variabel' => 'in2', 'hasil' => $in2, 'variabel_fullname' => 'IN.2 - Proses Inovasi', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'IN.2', 'indikator' => 'in.2' . auth()->user()->id, 'nilai' => $in2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR IN.3
        $in3 = intval(round(($request->indikator31 + $request->indikator32 + $request->indikator33) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.3', 'variabel' => 'in3', 'hasil' => $in3, 'variabel_fullname' => 'IN.3 - Manajemen Pengetahuan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'IN.3', 'indikator' => 'in.3' . auth()->user()->id, 'nilai' => $in3, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR IN.4
        $in4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'IN.4', 'variabel' => 'in4', 'hasil' => $in4, 'variabel_fullname' => 'IN.4 - Manajemen Perubahan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'IN.4', 'indikator' => 'in.4' . auth()->user()->id, 'nilai' => $in4, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

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
