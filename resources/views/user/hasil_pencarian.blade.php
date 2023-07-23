@extends('layouts-user.app')

@section('title', 'Hasil Pencarian Kemasan')

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
            <h1>Hasil Pencarian Kemasan</h1>
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
                            <div class="pilihan" class="mt-4">
                                <h3 style="font-size: 25px" class="mb-2">Pilihan Pengguna</h3>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria Produk</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriteria as $kriteriaa)
                                            @foreach ($kepastian as $key => $kp)
                                                @if ($kriteriaa->id == $key)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                
                                                    <td>{{$kriteriaa->kriteria_produk}}</td>
                                                    <td>
                                                        @if($kp == 1)
                                                        Pasti
                                                        @elseif($kp == 2)
                                                        Hampir pasti
                                                        @elseif($kp == 3)
                                                        Mungkin
                                                        @elseif($kp == 4)
                                                        Ragu-ragu
                                                        @else
                                                        Tidak
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @foreach ($kemasans as $kemasan)
                            @if ($kemasan->id == array_key_first($cfHasil))
                                <div class="row bg-light rounded-sm mt-4">
                                    <div class="col-md p-3">
                                        <h3 style="font-size: 25px" class="mb-4">Hasil Rekomendasi</h3>
                                        <p>Berdasarkan daftar kriteria produk yang dipilih, jenis kemasan yang yang cocok dengan produk Anda :</p>
                                            <h4 style="font-size: 22px" class="mb-3 text-success">{{ $kemasan->jenis_kemasan }}</h4>
                                            <p style="font-size: 20px" class="text-success">Presentase : {{$cfHasil[array_key_first($cfHasil)] * 100}}%</p>
                                    </div>
                                </div>
                                <div class="my-4"></div>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 style="font-size: 25px" class="mb-2">Penjelasan Kemasan</h3>
                                        <br>
                                        {!!$kemasan->keterangan_kemasan!!}
                                    </div>
                                </div>
                            @endif
                        @endforeach
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
