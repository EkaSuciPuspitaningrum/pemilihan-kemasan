@extends('layouts-user.app')

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
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
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
                        <div class="card-icon bg-danger">
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
                        <div class="card-icon bg-warning">
                            <i class="fas fa-book-open"></i>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-database"></i>
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
            </div> 
        </section>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Cara Penggunaan</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="jenis-tab" data-toggle="tab" href="#jenis" role="tab" aria-controls="jenis" aria-selected="true">Pencarian Kemasan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="jenis-tab">
                                    <div class="card-body">
                                        <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Pencarian Kemasan:</h6>
                                    </div>
                                    <ol>
                                        <li>Masukkan data produk yang terdiri dari:</li>
                                        <ol type="a">
                                            <li>Nama produk</li>
                                            <li>Berat produk</li>
                                            <li>Ukuran produk</li>
                                            <li>Volume produk</li>
                                        </ol>
                                        <li>Memilih kriteria produk yang sesuai dengan produk masing-masing.</li>
                                        <li>Menekan tombol analisa dan tunggu hingga hasil keluar.</li>
                                        <li>Hasil dapat dilihat di halaman riwyat pencarian.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
