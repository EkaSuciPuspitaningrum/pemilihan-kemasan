@extends('layouts-super-admin.app')

@section('title', 'Data Admin')

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
            <h1>Data Admin</h1>
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
            <h2 class="section-title">Data Admin</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data Admin.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#dataAdmin">Tambah Data Admin</button>
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
                                            <th style="text-align: center" scope="col">Nama Admin</th>
                                            <th style="text-align: center" scope="col">Email</th>
                                            <th style="text-align: center" scope="col">Password</th>
                                            <th style="text-align: center" scope="col">Created at</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($data_admin as $admin )
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->password}}</td>
                                            <td>{{$admin->created_at}}</td>
                                            <td><a data-toggle="modal" href="/admin/edit/{{ $admin->id }}" data-target="#editAdmin{{ $admin->id }}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="/admin/hapus/{{ $admin->id }}" type="button" class="btn btn-danger">Hapus</a>
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
            id="dataAdmin">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Admin</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/admin_store") }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="name">Nama Admin</label>
                                <input type="text"
                                       class="form-control"
                                       id="name" name="name">
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
            id="editAdmin{{ $admin->id }}">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Admin</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close"
                                    data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{session('success')}}
                            </div>
                        </div>
                        @endif
                    <form action="/admin_update/{{ $admin->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="name">Nama Admin</label>
                                <input type="text"
                                       class="form-control"
                                       id="name" required name="name" value="{{ $admin->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                       class="form-control"
                                       id="email" required name="email" value="{{ $admin->email }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text"
                                       class="form-control"
                                       id="password" required name="password"  value="{{ $admin->password }}">
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
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush

