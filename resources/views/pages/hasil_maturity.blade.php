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
                        @foreach ($aspek_maturity as $index => $row)
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
                                                            <h4 class="card-title w-100" style="font-weight: bold;">
                                                                {{ $row2->kode_indikator }} |
                                                                {{ $row2->nama_indikator }}
                                                            </h4>
                                                        </div>

                                                        <div class="card-body">
                                                            @if (count($row2->variabel_indikator) > 0)
                                                                <table class="table table-responsive table-borderless">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Variabel</th>
                                                                            <th>Nilai/Level</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($row2->variabel_indikator as $index3 => $row3)
                                                                            @if (in_array($row3->variabel, $indikator_maturity))
                                                                                @php
                                                                                    $aspek_tipe = 'Level';
                                                                                @endphp
                                                                            @else
                                                                                @php
                                                                                    $aspek_tipe = 'Nilai';
                                                                                @endphp
                                                                            @endif
                                                                            @php
                                                                                $var = $row3->variabel_fullname ? ucwords($row3->variabel_fullname) : ucwords(str_replace('_', ' ', $row3->variabel));
                                                                            @endphp

                                                                            <tr style="font-weight: normal;">
                                                                                <td class="text-nowrap">
                                                                                    {{ $loop->iteration }}
                                                                                </td>
                                                                                <td class="text-nowrap">{{ $var }}
                                                                                </td>
                                                                                <td
                                                                                    class="text-nowrap {{ $aspek_tipe == 'Level' ? 'text-' . $color[$row3->hasil - 1] : '' }}">
                                                                                    @if ($aspek_tipe == 'Level')
                                                                                        {{ $level[$row3->hasil - 1]->nama_level }}
                                                                                    @else
                                                                                        {{ $row3->hasil }}
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            @else
                                                                <h6>Belum Ada Nilai/Variabel!</h6>
                                                            @endif
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
