@extends('layouts-admin.app')

@section('title', 'Jenis Kemasan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pustaka Kemasan</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Jenis Kemasan</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data jenis-jenis kemasan.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#jenisKemasan">Tambah Jenis Kemasan</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="table" class="table" > 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table-striped table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kode Jenis</th>
                                            <th scope="col">Jenis Kemasan</th>
                                            <th scope="col">Bahan Keamasan</th>
                                            <th scope="col">Keterangan Jenis Kemasan</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($jenis_kemasan as $kemasan )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$kemasan->id_kemasan}}</td>
                                            <td>{{$kemasan->jenis_kemasan}}</td>
                                            <td>{{$kemasan->bahan_kemasan}}</td>
                                            <td>{{$kemasan->keterangan_kemasan}}</td>
                                            <td><a data-toggle="modal" href="/kemasan_show/{{$kemasan->id_kemasan}}"  data-target="#editJenis" type="button" class="btn btn-warning">Edit</a>
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

    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="jenisKemasan">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Kemasan kemasan</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/kemasan_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="jeniskemasan">Jenis Kemasan</label>
                                <input type="text"
                                       class="form-control"
                                       id="jenis_kemasan" name="jenis_kemasan">
                            </div>
                            <div class="form-group">
                                <label for="bahankemasan">Bahan Kemasan</label>
                                <input type="text"
                                       class="form-control"
                                       id="bahan_kemasan" name="bahan_kemasan">
                            </div>
                            <div class="form-group">
                                <label for="ketKemasan">Keterangan Kemasan</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kemasan"
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
</div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/table.js') }}"></script>
@endpush
