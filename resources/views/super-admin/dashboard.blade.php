@extends('layouts-super-admin.app')

@section('title', 'Dashboard')

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
                <h1>Dashboard Admin</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-person-circle-check"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Approve Pakar</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('calon_pakar')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Pakar</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('pakar')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Riwayat Pencarian</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('data_pencarian')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Admin</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('user')->count() }}
                            </div>
                        </div>
                    </div>
                </div>   
        </section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cara Penggunaan Web</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="approve-tab" data-toggle="tab" href="#data_approve" role="tab" aria-controls="approve" aria-selected="true">Approve Pakar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pakar-tab" data-toggle="tab" href="#data_pakar" role="tab" aria-controls="pakar" aria-selected="false">Data Pakar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="admin-tab" data-toggle="tab" href="#basis_admin" role="tab" aria-controls="admin" aria-selected="false">Data Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="data_approve" role="tabpanel" aria-labelledby="approve-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Approve Pakar:</h6>
                                        </div>
                                        <ol>
                                            <li>Memastikan apakah data calon telah lengkap.</li>
                                            <li>Memastikan data calon pakar sesuai dengan ketentuan.</li>
                                            <li>Menekan tombol "Approve" untuk menyimpan data ke dalam database pakar.</li>
                                            <li>Menekan tombol "Hapus", jika data dirasa masih belum sesuai.</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="data_pakar" role="tabpanel" aria-labelledby="pakar-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Data Pakar:</h6>
                                            <p class="">Pada halaman ini, Anda dapat menambah, mengubah dan menghapus data sesuai dengan data yang telah ditentukan. Berikut langka-langkah pada halaman data:</p>
                                        </div>
                                        <ol>
                                            <li>Jika ingin menambah data, Anda dapat menekan tombol "Tambah Data" dan mengisi data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin mengubah data, Anda dapat menekan tombol "Edit" dan mengubah data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin menghapus data, Anda dapat menekan tombol "Hapus" maka data akan terhapus.</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="basis_admin" role="tabpanel" aria-labelledby="admin-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Data Admin:</h6>
                                            <p class="">Pada halaman ini, Anda dapat menambah, mengubah dan menghapus data sesuai dengan data yang telah ditentukan. Berikut langka-langkah pada halaman data:</p>
                                        </div>
                                        <ol>
                                            <li>Jika ingin menambah data, Anda dapat menekan tombol "Tambah Data" dan mengisi data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin mengubah data, Anda dapat menekan tombol "Edit" dan mengubah data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin menghapus data, Anda dapat menekan tombol "Hapus" maka data akan terhapus.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
