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
                                10
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
                                <h4>Data Pakar</h4>
                            </div>
                            <div class="card-body">
                                42
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
                                <h4>Data Pengguna</h4>
                            </div>
                            <div class="card-body">
                                1,201
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
                                <h4>Data Admin</h4>
                            </div>
                            <div class="card-body">
                                47
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
                                        <a class="nav-link active" id="produk-tab" data-toggle="tab" href="#data_produk" role="tab" aria-controls="produk" aria-selected="true">Pustaka Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="kemasan-tab" data-toggle="tab" href="#data_kemasan" role="tab" aria-controls="kemasan" aria-selected="false">Pustaka Kemasan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pengetahuan-tab" data-toggle="tab" href="#basis_pengetahuan" role="tab" aria-controls="pengetahuan" aria-selected="false">Preview</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="data_produk" role="tabpanel" aria-labelledby="produk-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Data Mahasiswa:</h6>
                                        </div>
                                        <ol>
                                            <li>Masukkan tahun periode pendaftaran.</li>
                                            <li>Masukkan data calon mahasiswa dengan file excel ke dalam form yang sudah disediakan.</li>
                                            <li>Masukkan tahun tabel.</li>
                                            <li>Tambahkan nama kolom excel yang akan diinput.</li>
                                            <li>Menekan tombol submit. Data akan ditampilkan pada tabel, silahkan cek kembali.</li>
                                            <li>Jika data salah, silahkan tekan tombol "Cancel" dan lakukan kegiatan penginputan data dari awal.</li>
                                            <li>Jika data benar, silahkan tekan tombol "Save" dan data akan tersimpan.</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="data_kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Program Studi:</h6>
                                            <br>
                                            <div id="accordion">
                                                <div class="accordion">
                                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                                        <h4>Cara Penggunaan Halaman Data</h4>
                                                    </div>
                                                    <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                                        <p class="mb-0">Pada halaman ini, Anda dapat menambah, mengubah dan menghapus data sesuai dengan data yang telah ditentukan. Berikut langka-langkah pada halaman data:</p>
                                                        <p><b>Langkah-Langkah Menambah Data:</b></p>
                                                        <ol>
                                                            <li>Menekan tombol "Add".</li>
                                                            <li>Mengisi data sesuai dengan data yang telah ditentukan sebelumnya.</li>
                                                            <li>Menekan tombol "Tambah" untuk menyimpan data.</li>
                                                        </ol>
                                                        <p><b>Langkah-Langkah Mengubah Data:</b></p>
                                                        <ol>
                                                            <li>Menekan tombol edit yang ditandai dengan simbol pena dengan warna tombol yaitu oranye.</li>
                                                            <li>Mengubah data sesuai dengan yang sudah ditentukan.</li>
                                                            <li>Menekan tombol "Submit", jika data sudah benar.</li>
                                                            <li>Menekan tombol "Close", jika data tidak ingin diubah.</li>
                                                        </ol>
                                                        <p><b>Langkah-Langkah Menghapus Data:</b></p>
                                                        <ol>
                                                            <p>Menekan tombol hapus yang ditandai dengan simbol tempat sampah dengan warna tombol yaitu merah. Maka data secara otomatis akan terhapus.</p>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <div class="accordion">
                                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                                        <h4>Cara Penggunaan Halaman Binding</h4>
                                                    </div>
                                                    <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                                        <p class="mb-0">Pada halaman ini, Anda dapat memvalidasi kembali data program studi yang telah melalui proses tambah, ubah dan hapus pada halaman sebelumnya.</p>
                                                        <p><b>Langkah-Langkah Binding Data:</b></p>
                                                        <ol>
                                                            <li>Menekan tombol "Binding".</li>
                                                            <li>Masukkan program studi uang sesuai pada form Program Studi (Binding).</li>
                                                            <li>Masukkan tahun.</li>
                                                            <li>Memastikan bahwa data sudah sesuai dengan menekan tombol "Nama Prodi Sesuai".</li>
                                                            <li>Jika data benar, silahkan klik tombol "Submit".</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="basis_pengetahuan" role="tabpanel" aria-labelledby="pengetahuan-tab">
                                        <div class="card-body">
                                            <h6 style="color: #6777ef">Cara Penggunaan Untuk Halaman Preview:</h6>
                                            <br>
                                            <p>Pada halaman ini Anda dapat melihat data mahasiswa sesuai dengan seleksi yang dipilih calon mahasiswa.
                                                Pada halaman ini ada keterangan yaitu <b>"post-import"</b> untuk memberitahukan bahwa data masih belum diubah dan <b>"filtered"</b> untuk memberitahukan bahwa data sudah melalui proses filter.
                                                Data juga dapat dilihat sesuai dengan tahun, Anda dapat menekan tahun pada pojok kanan atas.</p>

                                        </div>
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
