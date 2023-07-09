@extends('layouts-pakar.app')

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

        {{-- <div class="section-body">
            <h2 class="section-title">Jenis Produk</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data jenis-jenis produk.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#jenisProduk">Tambah Jenis Produk</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table-striped table"  style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: center" scope="col">#</th>
                                            <th  style="text-align: center" scope="col">Kode Jenis</th>
                                            <th  style="text-align: center" scope="col">Jenis Produk</th>
                                            <th  style="text-align: center" scope="col">Keterangan Jenis Produk</th>
                                            <th  style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($jenis_produk as $produk )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$produk->id_produk}}</td>
                                            <td>{{$produk->jenis_produk}}</td>
                                            <td>{{$produk->keterangan_produk}}</td>
                                            <td><a data-toggle="modal"  data-target="#editJenis" href="{{ url('/produk_show/{id}',$produk->id) }}" type="button" class="btn btn-warning">Edit</a>
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
        </div> --}}

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
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table-2" class="table-striped table" style="text-align: center">
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
                                            <th>{{ $i++}}</th>
                                            <td>{{$kriteria->id_kriteria}}</td>
                                            <td>{{$kriteria->kriteria_produk}}</td>
                                            <td>{{$kriteria->keterangan_kriteria}}</td>
                                            <td><a data-toggle="modal" data-target="#editKriteria" href="{{ url('/kriteria_show/{id}',$kriteria->id) }}" type="button" class="btn btn-warning">Edit</a>
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

    {{-- <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="jenisProduk">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Jenis-Jenis Produk</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/produk_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="jeniskemasan">Jenis Produk</label>
                                <input type="text"
                                       class="form-control"
                                       id="jenis_produk" name="jenis_produk">
                            </div>
                            <div class="form-group">
                                <label for="jeniskemasan">Keterangan Jenis Produk</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_produk"
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
</div> --}}

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
    </div>


    {{-- <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editJenis">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Jenis-Jenis Produk</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="jeniskemasan">Jenis Produk</label>
                                <input type="text"
                                       class="form-control"
                                       id="jenis_produk" name="jenis_produk" >
                            </div>
                            <div class="form-group">
                                <label for="jeniskemasan">Keterangan Jenis Produk</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_produk"
                                 required></textarea>
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
</div> --}}


<div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editKriteria">
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
                                class="btn btn-warning">Edit</button>
                        </div>
                    </form>
                </div>
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
    <script src="{{ asset('js/page/table-2.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
