<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenHasil;
use App\Models\InputanMaturity;
use App\Models\IndikatorMaturity;
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
        $inputan = InputanMaturity::where('aspek_maturity_id', 'TK')->get();
        $new_inputan = [];
        foreach ($inputan as $index => $row) {
            $new_inputan[$row->inputan] = $row->nilai;
        }

        return view('pages.tata_kk', ['title' => 'Aspek Tata Kelola dan Kepemimpinan', 'inputan' => $new_inputan]);
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
            ['indikator_maturity_id' => 'TK.1', 'inputan' => 'indikator11', 'tipe_inputan' => 'tk_indikator11', 'nilai' => $request->indikator11, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.1', 'inputan' => 'indikator12', 'tipe_inputan' => 'tk_indikator12', 'nilai' => $request->indikator12, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.2', 'inputan' => 'indikator21', 'tipe_inputan' => 'tk_indikator21', 'nilai' => $request->indikator21, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.2', 'inputan' => 'indikator22', 'tipe_inputan' => 'tk_indikator22', 'nilai' => $request->indikator22, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.3', 'inputan' => 'indikator31', 'tipe_inputan' => 'tk_indikator31', 'nilai' => $request->indikator31, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.3', 'inputan' => 'indikator32', 'tipe_inputan' => 'tk_indikator32', 'nilai' => $request->indikator32, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.4', 'inputan' => 'indikator41', 'tipe_inputan' => 'tk_indikator41', 'nilai' => $request->indikator41, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.4', 'inputan' => 'indikator42', 'tipe_inputan' => 'tk_indikator42', 'nilai' => $request->indikator42, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.4', 'inputan' => 'indikator43', 'tipe_inputan' => 'tk_indikator43', 'nilai' => $request->indikator43, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.5', 'inputan' => 'indikator51', 'tipe_inputan' => 'tk_indikator51', 'nilai' => $request->indikator51, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.5', 'inputan' => 'indikator52', 'tipe_inputan' => 'tk_indikator52', 'nilai' => $request->indikator52, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
            ['indikator_maturity_id' => 'TK.5', 'inputan' => 'indikator53', 'tipe_inputan' => 'tk_indikator53', 'nilai' => $request->indikator53, 'aspek_maturity_id' => 'TK', 'user_id' => auth()->user()->id],
        ], ['tipe_inputan', 'indikator_maturity_id'], ['nilai']);


        // INDIKATOR TK.1
        $tk1 = intval(round(($request->indikator11 + $request->indikator12) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.1', 'variabel' => 'tk1', 'hasil' => $tk1, 'variabel_fullname' => 'TK.1 - Perencanaan Strategis', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'TK.1', 'indikator' => 'tk.1' . auth()->user()->id, 'nilai' => $tk1, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR TK.2
        $tk2 = intval(round(($request->indikator21 + $request->indikator22) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.2', 'variabel' => 'tk2', 'hasil' => $tk2, 'variabel_fullname' => 'TK.2 - Etika Bisnis', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'TK.2', 'indikator' => 'tk.2' . auth()->user()->id, 'nilai' => $tk2, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR TK.3
        $tk3 = intval(round(($request->indikator31 + $request->indikator32) / 2));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.3', 'variabel' => 'tk3', 'hasil' => $tk3, 'variabel_fullname' => 'TK.3 - Stakeholder Relationship', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'TK.3', 'indikator' => 'tk.3' . auth()->user()->id, 'nilai' => $tk3, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR TK.4
        $tk4 = intval(round(($request->indikator41 + $request->indikator42 + $request->indikator43) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.4', 'variabel' => 'tk4', 'hasil' => $tk4, 'variabel_fullname' => 'TK.4 - Manajemen Risiko', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'TK.4', 'indikator' => 'tk.4' . auth()->user()->id, 'nilai' => $tk4, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        // INDIKATOR TK.5
        $tk5 = intval(round(($request->indikator51 + $request->indikator52 + $request->indikator53) / 3));
        VariabelIndikator::upsert(['indikator_maturity_id' => 'TK.5', 'variabel' => 'tk5', 'hasil' => $tk5, 'variabel_fullname' => 'TK.5 - Pengawasan dan Pelaporan', 'user_id' => auth()->user()->id], ['variabel', 'indikator_maturity_id']);

        KomponenHasil::upsert(['indikator_maturity_id' => 'TK.5', 'indikator' => 'tk.5' . auth()->user()->id, 'nilai' => $tk5, 'user_id' => auth()->user()->id], ['indikator', 'user_id', 'indikator_maturity_id']);

        return redirect()->back()->with('success', 'Berhasil Mengupload Data Aspek Tata Kelola dan Kepemimpinan!');
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
