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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <span>File yang didukung:
                                    <ol style="font-weight: bold;">
                                        <li>File berekstensi .pdf</li>
                                        <li>dan file berukuran maksimal 10MB</li>
                                    </ol>
                                </span>

                                <h5 class="text-center mb-4" style="font-weight: bold;">FORMULIR DOKUMEN PENDUKUNG ASPEK
                                    MATURITAS</h5>
                                <form action="{{ url('upload_dokumen') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                    </div>

                                    <div class="row">
                                        @php
                                            $arr_aspek_maturity = [];
                                            $arr_bobot = [];
                                        @endphp

                                        @foreach ($aspek_maturity as $index => $row)
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="card card-{{ $color[$index] }}"
                                                    style="max-height: 1000px; overflow-y: auto;">
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
                                                                <label
                                                                    for="{{ $row2->kode_indikator }}">{{ $row2->kode_indikator . ' ' . $row2->nama_indikator }}</label>
                                                            </div>
                                                            @php
                                                                $maturitas_aspek += $row2->hasil > 0 ? $row2->nilai : 0;
                                                            @endphp
                                                            <div class="row">
                                                                <input type="file"
                                                                    name="data_file_{{ strtolower($row2->kode_indikator) }}"
                                                                    id="data_file_{{ strtolower($row2->kode_indikator) }}"
                                                                    class="form-control" accept="application/pdf">
                                                                <input type="hidden" name="nama_files[]"
                                                                    value="data_file_{{ strtolower(str_replace('.', '_', $row2->kode_indikator)) }}">
                                                                @if (count($row2->dokumen_pendukung) > 0)
                                                                    <div
                                                                        style="text-align: justify; text-justify: inter-word; font-size: 14px;line-height: 14px;">
                                                                        <h6 class="text-dark p-0 mt-2 mb-0">Dokumen :
                                                                        </h6>
                                                                        @foreach ($row2->dokumen_pendukung as $row3)
                                                                            <div class="">
                                                                                <button type="submit" name="hapus"
                                                                                    value="{{ $row3->id }}"
                                                                                    class="btn btn-link text-danger p-0"
                                                                                    onclick="return confirm('Anda yakin akan menghapus file ({{ $row3->real_name }})?')"
                                                                                    style="font-size: 14px;">Hapus</button>
                                                                                <a class="link-opacity-50-hover text-dark"
                                                                                    target="_blank"
                                                                                    href="{{ asset('storage/' . $row3->files) }}"
                                                                                    style="">{{ $row3->real_name }}</a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
