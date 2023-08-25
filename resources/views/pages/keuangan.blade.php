@extends('layouts.main')

@section('container')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Aspek Keuangan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Aspek Keuangan</li>
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
                        <div class="mb-3">
                            <a href="{{ url('/') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>
                                Kembali</a>
                        </div>
                        <form action="{{ url('surat_masuk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card p-3">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary" title="Submit untuk simpan data!">Next >
                                        Aspek Pelayanan</button>
                                    <button type="reset" class="btn btn-dark"
                                        title="Hapus data yang telah diisi!">Reset</button>
                                </div>
                            </div>

                            <x-keuangan.ke1 />
                            <x-keuangan.ke2 />
                            <x-keuangan.ke3 />
                            <x-keuangan.ke4 />

                            <div class="card p-3">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary" title="Submit untuk simpan data!">Next >
                                        Aspek Pelayanan</button>
                                    <button type="reset" class="btn btn-dark"
                                        title="Hapus data yang telah diisi!">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
