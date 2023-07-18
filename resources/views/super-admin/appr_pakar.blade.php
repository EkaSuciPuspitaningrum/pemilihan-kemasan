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
                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close"
                                data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{session('message')}}
                        </div>
                    </div>
                @endif
                <br>
                
                    <div class="card">
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table style="width: 2000px" id="table" class="table-hover table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Nama Pertama</th>
                                            <th style="text-align: center" scope="col">Nama Terakhir</th>
                                            <th style="text-align: center" scope="col">Pendidikan Terakhir</th>
                                            <th style="text-align: center" scope="col">Nama Instansi</th>
                                            <th style="text-align: center" scope="col">Dokumen</th>
                                            <th style="text-align: center" scope="col">Email</th>
                                            <th style="text-align: center" scope="col">Password</th>
                                            <th style="text-align: center" scope="col">Created At</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($calon_pakar as $dataa )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td style="text-align: center">{{$dataa->first_name_pakar}}</td>
                                            <td style="text-align: center">{{$dataa->last_name_pakar}}</td>
                                            <td style="text-align: center">{{$dataa->pend_terakhir}}</td>
                                            <td style="text-align: center">{{$dataa->nama_instansi}}</td>
                                            <td style="text-align: center">{{$dataa->dokumen}}</td>
                                            <td style="text-align: center">{{$dataa->email}}</td>
                                            <td style="text-align: center">{{$dataa->password}}</td>
                                            <td style="text-align: center">{{$dataa->created_at}}</td>
                                            <td style="text-align: center">
                                                <a data-toggle="modal" data-target="#cvPakar{{ $dataa->id }}" href="/lihat_cv_appr/{{ $dataa->id }}" type="button" class="btn btn-success" >Lihat CV</a>
                                                <a href="/move_calon_pakar/{{ $dataa->id }}" type="button" class="btn btn-warning">Approve</a>
                                                <a href="/calon_pakar/hapus/{{ $dataa->id }}" type="button" class="btn btn-danger">Hapus</a>
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

    @foreach ($calon_pakar as $dataa )
    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="cvPakar{{ $dataa->id }}">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curriculum Vitae (CV) / Daftar Riwayat Hidup Pakar</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="pdf-container">
                        <embed src="{{ url('lihat_cv_appr', $dataa->id) }}" type="application/pdf" width="100%" height="400px" />
                    </div>
                    
                </div>
            </div>
    </div>  
    @endforeach

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

