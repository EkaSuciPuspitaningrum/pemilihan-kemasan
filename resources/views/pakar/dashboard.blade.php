@extends('layouts-pakar.app')

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
                <h1>Dashboard Pakar</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pakar</h4>     
                            </div>
                            <div class="card-body">
                                {{ DB::table('pakar')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jenis Kemasan</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('jenis_kemasan')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Kriteria Produk</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('kriteria_produk')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Basis Pengetahuan</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('pengetahuan')->count() }}
                            </div>
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
                                        <a class="nav-link active" id="produk-tab" data-toggle="tab" href="#data_produk" role="tab" aria-controls="produk" aria-selected="true">Kriteria Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="kemasan-tab" data-toggle="tab" href="#data_kemasan" role="tab" aria-controls="kemasan" aria-selected="false">Jenis Kemasan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pengetahuan-tab" data-toggle="tab" href="#basis_pengetahuan" role="tab" aria-controls="pengetahuan" aria-selected="false">Basis Pengetahuan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="data_produk" role="tabpanel" aria-labelledby="produk-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Kriteria Produk:</h6>
                                            <p class="">Pada halaman ini, Anda dapat menambah, mengubah dan menghapus data sesuai dengan data yang telah ditentukan. Berikut langka-langkah pada halaman data:</p>
                                        </div>
                                        <ol>
                                            <li>Jika ingin menambah data, Anda dapat menekan tombol "Tambah Data" dan mengisi data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin mengubah data, Anda dapat menekan tombol "Edit" dan mengubah data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin menghapus data, Anda dapat menekan tombol "Hapus" maka data akan terhapus.</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="data_kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Jenis Kemasan:</h6>
                                            <p class="">Pada halaman ini, Anda dapat menambah, mengubah dan menghapus data sesuai dengan data yang telah ditentukan. Berikut langka-langkah pada halaman data:</p>
                                        </div>
                                        <ol>
                                            <li>Jika ingin menambah data, Anda dapat menekan tombol "Tambah Data" dan mengisi data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin mengubah data, Anda dapat menekan tombol "Edit" dan mengubah data yang dibutuhkan, setelah itu tekan tombol simpan.</li>
                                            <li>Jika ingin menghapus data, Anda dapat menekan tombol "Hapus" maka data akan terhapus.</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="basis_pengetahuan" role="tabpanel" aria-labelledby="pengetahuan-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Basis Pengetahuan:</h6>
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
