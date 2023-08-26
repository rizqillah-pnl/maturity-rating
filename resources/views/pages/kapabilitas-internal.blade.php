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
                        {{-- <div class="mb-3">
                            <a href="{{ url('/') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>
                                Kembali</a>
                        </div> --}}
                        <form action="{{ url('surat_masuk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-button-submit />

                            <x-kapabilitas-internal.1 />
                            <x-kapabilitas-internal.2 />
                            <x-kapabilitas-internal.3 />
                            <x-kapabilitas-internal.4 />

                            <x-button-submit />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
