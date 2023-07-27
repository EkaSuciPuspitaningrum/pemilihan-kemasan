@extends('layouts-super-admin.app')

@section('title', 'Data Produk')

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
            <h1>Pustaka Produk</h1>
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
            <h2 class="section-title">Kriteria Produk</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data kriteria-kriteria produk.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#kriteriaProduk">Tambah Kriteria Produk</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                <table id="table" class="table-hover table" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Kriteria</th>
                                            <th style="text-align: center" scope="col">Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">Keterangan Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($kriteria_produk as $kriteria )
                                        <tr>
                                            <td style="text-align: center">{{ $loop->iteration }}</td>
                                            <td style="text-align: center">P-{{$kriteria->id}}</td>
                                            <td>{{$kriteria->kriteria_produk}}</td>
                                            <td>{{$kriteria->keterangan_kriteria}}</td>
                                            <td style="text-align: center">
                                                <a data-toggle="modal" href="{{url('kriteria/edit', $kriteria->id)}}" data-target="#editKriteria{{ $kriteria->id }}" type="button" class="btn btn-warning edit">Edit</a>
                                                <a href="/kriteria/hapus/{{ $kriteria->id }}" type="button" class="btn btn-danger">Hapus</a>
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
            id="kriteriaProduk">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Kriteria - Kriteria Produk</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/kriteria_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="kriteriaproduk">Kriteria Produk</label>
                                <input type="text"
                                       class="form-control"
                                       id="kriteria_produk" name="kriteria_produk">
                            </div>
                            <div class="form-group">
                                <label for="kriteriaproduk">Keterangan Kriteria Produk</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kriteria"
                                 required></textarea>
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

@foreach ($kriteria_produk as $kriteria )
<div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editKriteria{{ $kriteria->id }}">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Kriteria - Kriteria Produk</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('kriteria/update', $kriteria->id)}}"  method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="kriteriaproduk">Kriteria Produk</label>
                                <input type="text"
                                       class="form-control"
                                       id="kriteria_produk" name="kriteria_produk" value="{{ $kriteria->kriteria_produk }}">
                            </div>
                            <div class="form-group">
                                <label for="kriteriaproduk">Keterangan Kriteria Produk</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kriteria"
                                 required>{{ $kriteria->keterangan_kriteria }}</textarea>
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
