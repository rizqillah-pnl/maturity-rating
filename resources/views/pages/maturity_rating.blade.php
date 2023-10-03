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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                        @foreach ($data as $index => $row)
                            <div class="card card-{{ $color[$index] }}">
                                <div class="card-header">
                                    <h2 class="card-title" style="font-weight: 600">ASPEK
                                        {{ $row->kode_aspek . '.' . strtoupper($row->nama_aspek) }}</h2>
                                </div>
                                <div class="card-body">
                                    @foreach ($row->indikator_maturity as $index2 => $row2)
                                        <div class="row">
                                            <label class="col-12 form-label">
                                                <div id="accordion">
                                                    <div class="card mb-2">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100">
                                                                <a class="d-block w-100" data-bs-toggle="collapse"
                                                                    href="#collapse{{ $index . $index2 }}"
                                                                    aria-expanded="true">
                                                                    {{ $row2->kode_indikator }} |
                                                                    {{ $row2->nama_indikator }}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{ $index . $index2 }}" class="collapse"
                                                            data-parent="#accordion" style="">
                                                            <div class="card-body">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-2">ID</div>
                                                                        <div class="col-5">Kriteria Indikator</div>
                                                                        <div class="col-3">Work Product</div>
                                                                        <div class="col-2">Level</div>
                                                                    </div>
                                                                    @foreach ($row2->kriteria_maturity as $index3 => $row3)
                                                                        <div class="row" style="font-weight: 500">
                                                                            <div class="col-2">{{ $row3->kode_kriteria }}
                                                                            </div>
                                                                            <div class="col-5">
                                                                                {{ $row3->kriteria_indikator }}</div>
                                                                            <div class="col-3">
                                                                                {!! $row3->work_product ? $row3->work_product : 'Tidak ada work product.' !!}</div>
                                                                            <div
                                                                                class="col-2 text-{{ $level[$row3->maturity_level - 1]->color }}">
                                                                                {{ $level[$row3->maturity_level - 1]->nama_level . '(' . $row3->maturity_level . ')' }}
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
