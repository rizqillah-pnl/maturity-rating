<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        return view('pages.keuangan', ['title' => 'Aspek Keuangan']);
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
