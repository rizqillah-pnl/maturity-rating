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

                        @php
                            $color = ['primary', 'danger', 'success', 'warning', 'info', 'dark'];
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
                                                                {{ $row2->kode_indikator }} |
                                                                {{ $row2->nama_indikator }}
                                                            </h4>
                                                        </div>

                                                        <div class="card-body">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-2">ID</div>
                                                                    <div class="col-5">Kriteria Indikator</div>
                                                                    <div class="col-3">Work Product</div>
                                                                    <div class="col-2">Level</div>
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
