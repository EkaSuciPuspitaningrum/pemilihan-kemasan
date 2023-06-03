@extends('layouts.app')

@section('title', 'Kriteria Kemasan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap4.min.css" />
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pencarian Kemasan</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Produk</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Masukkan Data Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="namaproduk">Nama Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="namaproduk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Produk</label>
                                    <select class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="beratproduk">Berat Produk</label>
                                    <input type="number"
                                           class="form-control"
                                           id="beratproduk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Ukuran Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="inputPassword4" required>
                                    <code>Panjang x Lebar x Tinggi (cm), Jika cair kosongkan!</code>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Volume Produk</label>
                                    <input type="number"
                                           class="form-control"
                                           id="inputPassword4" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Komposisi Produk</label>
                                    <textarea class="form-control"
                                              data-height="150" required></textarea>
                                </div>
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
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/select.bootstrap4.js"></script>
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/table.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
