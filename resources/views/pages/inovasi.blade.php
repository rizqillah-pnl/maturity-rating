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
                        <form action="{{ url('inovasi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-button-submit back="tata_kk" next='lingkungan' />

                            <x-inovasi.1 :inputan="$inputan" />
                            <x-inovasi.2 :inputan="$inputan" />
                            <x-inovasi.3 :inputan="$inputan" />
                            <x-inovasi.4 :inputan="$inputan" />

                            <x-button-submit back="tata_kk" next='lingkungan' />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
