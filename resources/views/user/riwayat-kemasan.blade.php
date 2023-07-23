@extends('layouts-user.app')

@section('title', 'Riwayat Pencarian')

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
            <h1>Riwayat Pencarian Kemasan</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div> 
                                @php
                                    $i=1;
                                @endphp 
                                <table id="table" class="table" style="text-align: center; width: 1200px">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Nama Produk</th>
                                            <th style="text-align: center" scope="col">Berat Produk</th>
                                            <th style="text-align: center" scope="col">Ukuran Produk</th>
                                            <th style="text-align: center" scope="col">Volume Produk</th>
                                            <th style="text-align: center" scope="col">Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Persentase</th>
                                            <th style="text-align: center" scope="col">Tanggal Pencarian</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($riwayat as $riwayatt )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$riwayatt->nama_produk}}</td>
                                            <td>{{$riwayatt->berat_produk}}</td>
                                            <td>{{$riwayatt->ukuran_produk}}</td>
                                            <td>{{$riwayatt->volume_produk}}</td>
                                            <td>{{$riwayatt->kemasan->jenis_kemasan}}</td>
                                            <td>{{$riwayatt->persen * 100}}%</td>
                                            <td>{{ date_format($riwayatt->created_at,'d-m-Y') }}</td>
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
