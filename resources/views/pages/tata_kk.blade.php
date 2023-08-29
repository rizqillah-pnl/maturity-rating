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
                        <form action="{{ url('tata_kk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-button-submit />

                            <x-tata_kk.1 />
                            <x-tata_kk.2 />
                            <x-tata_kk.3 />
                            <x-tata_kk.4 />
                            <x-tata_kk.5 />

                            <x-button-submit />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
