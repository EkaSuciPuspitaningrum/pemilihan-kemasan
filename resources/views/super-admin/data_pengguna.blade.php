@extends('layouts-super-admin.app')

@section('title', 'Data Pengguna')

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
            <h1>Data Pengguna</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Pengguna</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data pengguna.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#jenisKemasan">Tambah Data Pengguna</button>
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
                                            <th style="text-align: center" scope="col">Nama Pertama</th>
                                            <th style="text-align: center" scope="col">Nama Terakhir</th>
                                            <th style="text-align: center" scope="col">Email</th>
                                            <th style="text-align: center" scope="col">Password</th>
                                            <th style="text-align: center" scope="col">Created At</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($data_pengguna as $dataa )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$dataa->first_name_user}}</td>
                                            <td>{{$dataa->last_name_user}}</td>
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

    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="jenisKemasan">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Pengguna</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/data_pengguna_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="first_name_user">Nama Pertama</label>
                                <input type="text"
                                       class="form-control"
                                       id="first_name_user" name="first_name_user">
                            </div>
                            <div class="form-group">
                                <label for="last_name_user">Nama Terakhir</label>
                                <input type="text"
                                       class="form-control"
                                       id="last_name_user" name="last_name_user">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text"
                                       class="form-control"
                                       id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text"
                                       class="form-control"
                                       id="password" name="password">
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

    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editKemasan">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Pengguna</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{-- <form action="{{ url("/kemasan_edit/{id}",$kemasan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="jeniskemasan">Jenis Kemasan</label>
                                <input type="text"
                                       class="form-control"
                                       id="jenis_kemasan" name="jenis_kemasan" value="{{ $kemasan->jenis_kemasan }}" required>
                                    <code>* Isi dengan jenis dan bahan, contoh : Plastik PVC</code>
                            </div>
                            <div class="form-group">
                                <label for="ketKemasan">Keterangan Kemasan</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kemasan" 
                                 required>{{ $kemasan->keterangan_kemasan }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button"
                                class="btn btn-danger"
                                data-dismiss="modal">Tutup</button>
                            <button type="submit"
                                class="btn btn-warning">Edit</button>
                        </div>
                    </form> --}}
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
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush

