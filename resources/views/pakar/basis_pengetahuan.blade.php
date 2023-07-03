@extends('layouts-pakar.app')

@section('title', 'Aturan Kemasan')

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
            <h1>Basis Pengetahuan Kemasan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Advanced Forms</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#pengetahuanModal">Tambah Basis Pengetahuan Kemasan</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Pengetahuan</th>
                                            <th style="text-align: center" scope="col">Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">MB</th>
                                            <th style="text-align: center" scope="col">MD</th>
                                            <th style="text-align: center" scope="col">CF</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($dataa as $data )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$data->id_pengetahuan}}</td>
                                            <td>{{$data->jenis_kemasan}}</td>
                                            <td>{{$data->kriteria_produk}}</td>
                                            <td>{{$data->nilai_mb}}</td>
                                            <td>{{$data->nilai_md}}</td>
                                            <td>{{$data->nilai_cf}}</td>
                                            <td><a data-toggle="modal" href="/pengetahuan_show/{{$data->id_pengetahuan}}"  data-target="#editData" type="button" class="btn btn-warning">Edit</a>
                                                <a href="/pengetahuan/hapus/{{ $data->id }}" type="button" class="btn btn-danger">Hapus</a>
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

    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="pengetahuanModal">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Basis Pengetahuan Kemasan</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/pengetahuan_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label>Jenis Kemasan</label>
                                <select name="jenis_kemasan" class="form-control">
                                    @foreach ($kemasan as $kemas)
                                        <option>{{ $kemas->jenis_kemasan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Produk</label>
                                <select name="kriteria_produk" class="form-control">
                                    @foreach ($kriteria as $kriteriaa)
                                        <option>{{ $kriteriaa->kriteria_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nilaipercaya">Nilai Kepercayaan (MB)</label>
                                    <select id="nilai_mb" name="nilai_mb" class="form-control">
                                        <option value="1">Sangat Yakin</option>
                                        <option value="0.8">Yakin</option>
                                        <option value="0.6">Cukup Yakin</option>
                                        <option value="0.4">Kurang Yakin</option>
                                        <option value="0.2">Tidak Tahu</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nilaitdkpercaya">Nilai Ketidakpercayaan (MD)</label>
                                    <select id="nilai_md" name="nilai_md" class="form-control">
                                        <option value="1">Sangat Yakin</option>
                                        <option value="0.8">Yakin</option>
                                        <option value="0.6">Cukup Yakin</option>
                                        <option value="0.4">Kurang Yakin</option>
                                        <option value="0.2">Tidak Tahu</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button"
                                class="btn btn-danger"
                                data-dismiss="modal">Tutup</button>
                            <button type="submit"
                                class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
