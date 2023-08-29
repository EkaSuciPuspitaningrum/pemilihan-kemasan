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
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">

@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Hasil Pencarian Kemasan</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pilihan Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="pilihan" class="mt-4">
                                <table id="table" class="table table-hover table-bordered mb-3" >
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-white text-center">No</th>
                                            <th class="text-white text-center">Kriteria Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($selectedCriteria as $criteria)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
        
                                            <td>{{$criteria->kriteria_produk}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                           
                                <div class="row bg-light rounded-sm mt-4">
                                    <div class="col-md p-3">
                                        <h3 style="font-size: 25px" class="mb-4">Hasil Rekomendasi</h3>
                                        <p>Berdasarkan daftar kriteria produk yang dipilih, jenis kemasan yang yang cocok dengan produk Anda :</p>
                                           <strong><h4 style="font-size: 22px" class="mb-3 text-success">{{ $selectedJenisKemasan->jenis_kemasan }}</h4></strong>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <div class="card" style="text-align: justify">
                        <div class="card-header">
                            <h4>Penjelasan Kemasan :</h4>
                        </div>
                        <div class="card-body">
                            {{ $selectedJenisKemasan->keterangan_kemasan }}
                        </div>
                    </div>

                    <div id="kemungkinan" class="mt-4 no-print">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kemungkinan Jenis Kemasan Lain :</h4>
                            </div>
                            <div class="card-body">  
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Kemasan</th>
                                            <th>Jenis Kemasan</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    ?>
                                    @foreach ($jenisKemasans as $jenisKemasan)
                                        @if ($jenisKemasan->id !== $selectedJenisKemasan->id)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $jenisKemasan->jenis_kemasan }}</td>
            <td>{{ $jenisKemasanCF[$jenisKemasan->id] }}</td> <!-- Display the CF value -->

                                            </tr>
                                        @endif
                                    @endforeach

                                </table>
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
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/table.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script>
        $('#plain tr:first').hide();
    </script>
@endpush
