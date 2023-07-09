@extends('layouts-super-admin.app')

@section('title', 'Data Pakar')

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
            <h1>Data Pakar</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Pakar</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data pakar.</p>
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
                        <div class="card-header">
                            <div class="buttons">
                                <button class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#dataPakar">Tambah Data Pakar</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table">
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
                                    <tbody style="width: fit-content">
                                        @foreach ($pakar as $dataa )
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>{{$dataa->first_name_pakar}}</td>
                                            <td>{{$dataa->last_name_pakar}}</td>
                                            <td>{{$dataa->pend_terakhir}}</td>
                                            <td>{{$dataa->nama_instansi}}</td>
                                            <td>{{$dataa->dokumen}}</td>
                                            <td>{{$dataa->email}}</td>
                                            <td>{{$dataa->password}}</td>
                                            <td>{{$dataa->created_at}}</td>
                                            <td >
                                                <a data-toggle="modal" href="" type="button" class="btn btn-warning" data-target="#editPakar">Edit</a>
                                                <a href="/pakar/hapus/{{ $dataa->id }}" type="button" class="btn btn-danger">Hapus</a>
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
            id="dataPakar">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masukkan Data Pakar</h5>
                        <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url("/data_pakar_store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body modal-lg">
                            <div class="form-group">
                                <label for="first_name_pakar">Nama Pertama</label>
                                <input type="text"
                                       class="form-control"
                                       id="first_name_pakar" name="first_name_pakar">
                            </div>
                            <div class="form-group">
                                <label for="last_name_pakar">Nama Terakhir</label>
                                <input type="text"
                                       class="form-control"
                                       id="last_name_pakar" name="last_name_pakar">
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
                            <div class="form-group">
                                <label for="pend_terakhir">Pendidikan Terakhir</label>
                                <select name="pend_terakhir" id="pend_terakhir" class="form-control">
                                  <option value="D4/S1/Setara">D4/S1/Setara</option>
                                  <option value="S2/Setara">S2/Setara</option>
                                  <option value="S3/Setara">S3/Setara</option>
                                </select>
                              </div>
                            <div class="form-group">
                                <label for="nama_instansi">Nama Instansi</label>
                                <input type="text"
                                       class="form-control"
                                       id="nama_instansi" name="nama_instansi">
                            </div>
                            <div class="form-group">
                                <label for="dokumen">Curriculum Vitae (CV) / Daftar Riwayat Hidup</label>
                                <div class="input-group mb-3">
                                  <input type="file" class="form-control" required id="dokumen" name="dokumen">
                                  <label class="input-group-text" for="customFile">Upload</label>
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

    <div class="modal fade"
            tabindex="-1"
            role="dialog"
            id="editPakar">
            <div class="modal-dialog"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Pakar</h5>
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

