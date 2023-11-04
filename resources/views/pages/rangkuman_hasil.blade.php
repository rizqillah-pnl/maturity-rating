@extends('layouts.main')

@section('container')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @push('css-script')
            <style>
                .text-orange {
                    color: rgb(187, 121, 0);
                }

                .btn-orange,
                .bg-orange {
                    background-color: rgb(187, 121, 0);
                    color: white !important;
                }

                .btn-warning,
                .bg-warning {
                    color: white !important;
                }
            </style>
        @endpush
        @php
            $color = ['danger', 'orange', 'warning', 'primary', 'success', 'info', 'dark'];
        @endphp
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center mb-4" style="font-weight: bold;">RANGKUMAN HASIL PENILAIAN ASPEK
                                    MATURITAS
                                    BLU</h5>
                                <div class="row">
                                    @php
                                        $arr_aspek_maturity = [];
                                        $arr_bobot = [];
                                    @endphp
                                    @foreach ($aspek_maturity as $index => $row)
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="card card-{{ $color[$index] }}" style="min-height: 385px;">
                                                <div class="card-header">
                                                    <h6 class="text-center text-white">{{ $loop->iteration }}. ASPEK
                                                        {{ strtoupper($row->nama_aspek) }}</h6>
                                                </div>
                                                <div class="card-body">
                                                    @php
                                                        $maturitas_aspek = 0;
                                                    @endphp
                                                    @foreach ($row->indikator_maturity as $index2 => $row2)
                                                        <div class="row mt-2">
                                                            <div class="col-8">
                                                                <input type="text"
                                                                    name="{{ $row2->kode_indikator . ' ' . $row2->nama_indikator }}"
                                                                    id="{{ $row2->kode_indikator . ' ' . $row2->nama_indikator }}"
                                                                    class="form-control" readonly
                                                                    value="{{ $row2->kode_indikator . ' ' . $row2->nama_indikator }}">
                                                            </div>
                                                            @php
                                                                $maturitas_aspek += count($row2->komponen_hasil) > 0 ? $row2->komponen_hasil[0]->nilai : 0;
                                                            @endphp
                                                            <div class="col-4">
                                                                <input type="text"
                                                                    name="{{ count($row2->komponen_hasil) > 0 ? $row2->komponen_hasil[0]->indikator_maturity_id : '0' }}"
                                                                    id="{{ count($row2->komponen_hasil) > 0 ? $row2->komponen_hasil[0]->indikator_maturity_id : '0' }}"
                                                                    class="form-control" readonly
                                                                    value="{{ count($row2->komponen_hasil) > 0 ? $row2->komponen_hasil[0]->nilai : '0' }}">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-8 bg-{{ $color[$index] }} text-center">
                                                            MATURITAS ASPEK
                                                        </div>
                                                        @php
                                                            $jum_aspek_maturity = $maturitas_aspek / count($row->indikator_maturity);
                                                            $arr_aspek_maturity[$row->kode_aspek] = $jum_aspek_maturity;
                                                            $arr_bobot[$row->kode_aspek] = $row->bobot;
                                                        @endphp
                                                        <div class="col-4">
                                                            <input type="text" name="nilai11" id="nilai11"
                                                                class="form-control" readonly
                                                                value="{{ $jum_aspek_maturity }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center mb-4" style="font-weight: bold;">BOBOT PERHITUNGAN MATURITAS</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($aspek_maturity as $index => $row)
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        value="{{ $loop->iteration . '. ' . $row->nama_aspek }}" readonly>
                                                    <span class="input-group-text bg-{{ $color[$index] }}"
                                                        id="basic-addon3">{{ $row->bobot > 9 ? $row->bobot : '0' . $row->bobot }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center mb-4" style="font-weight: bold;">DETAIL PERHITUNGAN MATURITAS</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                                        <h6 style="text-decoration: underline; font-weight: bold">ASPEK</h6>
                                        @foreach ($aspek_maturity as $index => $row)
                                            <div class="mb-3 mt-2">
                                                <p>{{ $row->nama_aspek }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                                        <h6 style="text-decoration: underline; font-weight: bold">BOBOT PENILAIAN</h6>
                                        @foreach ($aspek_maturity as $index => $row)
                                            <div class="mb-3 mt-2">
                                                <p>{{ $row->bobot }}%</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                                        <h6 style="text-decoration: underline; font-weight: bold">TINGKAT MATURITAS</h6>
                                        @php
                                            $maturity = 0;
                                        @endphp
                                        @foreach ($arr_aspek_maturity as $index => $row)
                                            @php
                                                $bobot = $arr_bobot[$index] / 100;
                                                $maturity += $bobot * $row;
                                            @endphp
                                            <div class="mb-3 mt-2">
                                                <p>{{ $row }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                                        <h6 style="text-decoration: underline; font-weight: bold">TINGKAT MATURITAS BLU</h6>
                                        <div class="mb-3 mt-2 border p-5 text-center bg-{{ $color[$maturity > 1 ? round($maturity) - 1 : 0] }}"
                                            style="font-weight: bold;">
                                            <span style="font-size: 50px;">{{ number_format($maturity, 2) }}</span>
                                            <span style="font-size: 20px;"> atau
                                                {{ number_format(($maturity / 5) * 100, 2) }}%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="font-weight: bold;">
                                    <p>Tingkat Maturity(Kematangan) BLU Organisasi Anda dinyatakan
                                        @if ($maturity >= 3)
                                            <span class="text-success">Sudah Siap!</span>
                                        @else
                                            <span class="text-danger">Belum Siap!</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('/clear-all') }}" method="post">
                            @csrf
                            <div class="d-flex flex-row-reverse mb-2">
                                <button class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus seluruh data Maturity Rating?!')">Clear
                                    All Data!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
