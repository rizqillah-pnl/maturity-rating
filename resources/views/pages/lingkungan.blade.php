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
                        <form action="{{ url('lingkungan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-button-submit back="inovasi" :next="false" />

                            <x-lingkungan.1 :inputan="$inputan" />
                            <x-lingkungan.2 :inputan="$inputan" />

                            <x-button-submit back="inovasi" :next="false" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
