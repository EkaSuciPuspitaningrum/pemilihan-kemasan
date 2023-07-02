@extends('layouts-super-admin.app')

@section('title', 'Approve Data Pakar')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Approve Data Pakar</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Approve Data Pakar</h2>
            <p class="section-lead">Silahkan approve maupun hapus data calon pakar.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Calon Pakar</th>
                                            <th style="text-align: center" scope="col">Nama Pertama</th>
                                            <th style="text-align: center" scope="col">Nama Terakhir</th>
                                            <th style="text-align: center" scope="col">Pendidikan Terakhir</th>
                                            <th style="text-align: center" scope="col">Nama Instansi</th>
                                            <th style="text-align: center" scope="col">Email</th>
                                            <th style="text-align: center" scope="col">Password</th>
                                            <th style="text-align: center" scope="col">Tanggal Pembuatan Akun</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($calon_pakar as $dataa )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$dataa->id_pakar}}</td>
                                            <td>{{$dataa->first_name_pakar}}</td>
                                            <td>{{$dataa->last_name_pakar}}</td>
                                            <td>{{$dataa->pend_terakhir}}</td>
                                            <td>{{$dataa->nama_instansi}}</td>
                                            <td>{{$dataa->email}}</td>
                                            <td>{{$dataa->password}}</td>
                                            <td>{{$dataa->created_at}}</td>
                                            <td><a data-toggle="modal" href=""  data-target="#editKemasan" type="button" class="btn btn-warning">Edit</a>
                                                <a href="" type="button" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/table.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush

