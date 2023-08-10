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
        </div>
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
        <div class="section-body">
            <h2 class="section-title">Pengetahuan Kemasan</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data pengetahuan-pengetahuan kemasan.</p>
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
                                <table style="width: 1000px" id="table" class="table-hover table" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">CF</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($data as $dataa )
                                        <tr>
                                            <th style="text-align: center">{{ $i++}}</th>
                                            <td>{{$dataa->kemasan->jenis_kemasan}}</td>
                                            <td>{{$dataa->kriteria->kriteria_produk}}</td>
                                            <td style="text-align: center">{{$dataa->cf}}</td>
                                            <td style="text-align: center"><a data-toggle="modal" href="{{url('pengetahuan/edit', $dataa->id)}}"  data-target="#editData{{ $dataa->id }}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="/pengetahuan/hapus/{{ $dataa->id }}" type="button" class="btn btn-danger">Hapus</a>
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
                                <select name="jenis_kemasan_id" class="form-control">
                                    @foreach ($kemasan as $kemas)
                                        <option value="{{ $kemas->id }}">{{ $kemas->jenis_kemasan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Produk</label>
                                <select name="kriteria_id" class="form-control">
                                    @foreach ($kriteria as $kriteriaa)
                                        <option value="{{ $kriteriaa->id }}">{{ $kriteriaa->kriteria_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nilaipercaya">Nilai Kepercayaan Mutlak (CF)</label>
                                <select id="cf" name="cf" class="form-control">
                                    <option value="1">Sangat Yakin</option>
                                    <option value="0.8">Yakin</option>
                                    <option value="0.6">Cukup Yakin</option>
                                    <option value="0.4">Kurang Yakin</option>
                                    <option value="0.2">Tidak Tahu</option>
                                    <option value="0">Tidak</option>
                                </select>
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

        @foreach ($data as $dataa )
        <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editData{{ $dataa->id }}">
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
                    <form action="{{ url("/pengetahuan/update",$dataa->id) }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label>Jenis Kemasan</label>
                                <select name="jenis_kemasan_id" class="form-control">
                                    @foreach ($kemasan as $kemas)
                                        <option value="{{ $kemas->id }}" {{$dataa->jenis_kemasan == $kemas->jenis_kemasan  ? 'selected' : ''}}>{{ $kemas->jenis_kemasan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Produk</label>
                                <select name="kriteria_id" class="form-control">
                                    @foreach ($kriteria as $kriteriaa)
                                        <option value="{{ $kriteriaa->id }}" {{$dataa->kriteria_produk == $kriteriaa->kriteria_produk  ? 'selected' : ''}}>{{ $kriteriaa->kriteria_produk}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="nilaipercaya">Nilai Kepercayaan Mutlak (CF)</label>
                                <select id="cf" name="cf" class="form-control">
                                    <option value="1" {{ $dataa->cf == '1' ? 'selected' : '' }}>Sangat Yakin</option>
                                    <option value="0.8" {{ $dataa->cf == '0.8' ? 'selected' : '' }}>Yakin</option>
                                    <option value="0.6" {{ $dataa->cf == '0.6' ? 'selected' : '' }}>Cukup Yakin</option>
                                    <option value="0.4" {{ $dataa->cf == '0.4' ? 'selected' : '' }}>Kurang Yakin</option>
                                    <option value="0.2" {{ $dataa->cf == '0.2' ? 'selected' : '' }}>Tidak Tahu</option>
                                    <option value="0" {{ $dataa->cf == '0' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button"
                                class="btn btn-danger"
                                data-dismiss="modal">Tutup</button>
                                <button type="submit"
                                class="btn btn-warning">Edit</button>
                        </div>
                    </form>
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
