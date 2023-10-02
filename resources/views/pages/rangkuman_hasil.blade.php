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
            $color = ['danger', 'warning', 'orange', 'primary', 'success', 'info', 'dark'];
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
                                    @foreach ($aspek_maturity as $index => $row)
                                        <div class="col-4">
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
                                                        <div class="col-4">
                                                            <input type="text" name="nilai11" id="nilai11"
                                                                class="form-control" readonly
                                                                value="{{ $maturitas_aspek / count($row->indikator_maturity) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
