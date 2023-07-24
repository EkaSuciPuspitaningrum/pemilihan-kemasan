@extends('layouts-user.app')

@section('title', 'Pencarian Kemasan')

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
        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close"
                    data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{session('error')}}
            </div>
        </div>
    @endif
        <div class="section-body">
            <h2 class="section-title">Data Produk</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Masukkan Data Produk</h4>
                        </div>
                        <div class="card-body">
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close"
                                            data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                        {{session('error')}}
                                    </div>
                                </div>
                            @endif
                            <form action="{{ url('/pencarian_analisa') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="berat_produk">Berat Produk (Kg)</label>
                                    <input  type="text"
                                           class="form-control"
                                           id="berat_produk" name="berat_produk" value="{{ old('berat_produk') }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ukuran_produk">Ukuran Produk</label>
                                           <input type="text"
                                           class="form-control"
                                           id="ukuran_produk" name="ukuran_produk" value="{{ old('ukuran_produk') }}" required>
                                           
                                    <code>Panjang x Lebar x Tinggi (cm), Jika cair isi dengan "0 atau -"!</code>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="volume_produk">Volume Produk (Liter)</label>
                                           <input type="number"
                                           class="form-control"
                                           id="volume_produk" name="volume_produk" value="{{ old('volume_produk') }}" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Kriteria Produk</label>
                                    <table id="table" class="table table-hover table-bordered mb-3" >
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center">No</th>
                                                <th class="text-white text-center">Kriteria Produk</th>
                                                <th class="text-white text-center">Pilih Kriteria Produk</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach ($kriteria as $kriteriaa)
                                                <tr>
                                                    <th class="text-center">{{ $loop->iteration }}</th>
                                                    <th>{{ Str::title($kriteriaa->kriteria_produk) }}</th>
                                                    <th class="text-center" >
                                                        <div class="form-group">
                                                            <select name="kondisi[]" id="kondisi" class="form-control">
                                                                <option disabled selected>Pilih</option>
                                                                <option value="{{ $kriteriaa->id }}_1">Yakin</option>
                                                                <option value="{{ $kriteriaa->id }}_2">Hampir yakin</option>
                                                                <option value="{{ $kriteriaa->id }}_3">Mungkin</option>
                                                                <option value="{{ $kriteriaa->id }}_4">Ragu-ragu</option>
                                                                <option value="{{ $kriteriaa->id }}_0">Tidak</option>
                                                            </select>
                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <br> <br>
                                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-solid fa-magnifying-glass"></i>  Analisis</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
