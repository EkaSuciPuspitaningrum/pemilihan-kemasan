@extends('layouts-user.app')

@section('title', 'Metode')

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
            <h1>Penjelasan Mengenai Metode</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Metode : Certainty Factors</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-0" style="text-align: justify">
                                Certainty Factor atau faktor kepastian adalah metode yang membuktikan apakah fakta tersebut pasti atau tidak dengan menampilkannya dengan bentuk metric dan sistem pakar ini cocok untuk membantu pengambilan keputusan dalam menentukan sesuatu yang belum pasti. 
                                Ketidakpastian dalam pengambilan suatu keputusan ini terjadi karena adanya kurangnya informasi untuk mengambil keputusan, 
                                tingkat kepastian pada gejala, kaidah, dan hasil identifikasi. Certainty factor ini diperkenalkan oleh Shortliffe Buchanan pada tahun 1975, dimana teori ini dikembangkan bersamaan dengan pembuatan sistem pakar MYCIN.
                                MYCIN ini merupakan sistem pakar yang digunakan untuk memudahkan dokter-dokter yang belum berpengalaman dalam menangani suatu penyakit tertentu.
                            </p>
                            <br>
                            <p class="mb-0" style="text-align: justify">
                                Beberapa istilah yang ada pada metode certainty factor antara lain:
                                <ol>
                                    <li>Evidence</li>
                                    <p>
                                        Evidence merupakan fakta atau gejala yang mendukung hipotesa.
                                    </p>
                                    <li>Hipotesa</li>
                                    <p>
                                        Hipotesa merupakan hasil yang dicari atau hasil yang didapat dari gejala-gejala.
                                    </p>
                                    <li>Measure of Increased Belief (MB)</li>
                                    <p>
                                        Measure of Increased Belief adalah ukuran kenaikan kepercayaan dimana 0 ≤ MB ≤ 1.
                                    </p>
                                    <li>Measure of Increased Disbelief  (MD)</li>
                                    <p>
                                        Measure of Increased Belief adalah ukuran kenaikan ketidakpercayaan dimana 0 ≤ MD ≤ 1.
                                    </p>
                                    <li>CF[H,E]</li>
                                    <p>
                                        Merupakan istilah dari hipotesis H yang dipengaruhi oleh gejala atau fakta (evidence) E. Adapun kriteria pada CF[H,E] yaitu: 
                                        (1)Besarnya nilai CF berkisar antara -1 sampai 1 dan (2)Nilai -1 menunjukkan ketidakpercayaan mutlak sedangkan nilai 1 menunjukkan kepercayaan mutlak.

                                    </p>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelebihan dan Kekurangan</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-0" style="text-align: justify">
                                Metode Certainty Factor (CF) adalah salah satu teknik dalam sistem pakar dan kecerdasan buatan yang digunakan untuk mengukur kepercayaan atau keyakinan terhadap suatu hipotesis berdasarkan bukti atau fakta yang ada. Kelebihan dari metode Certainty Factor antara lain:
                                <ol>
                                    <li>
                                        Representasi tingkat keyakinan: Certainty Factor memungkinkan para ahli atau sistem pakar untuk menyatakan tingkat keyakinan mereka terhadap suatu hipotesis secara eksplisit dengan menggunakan nilai numerik. Ini memberikan cara yang jelas dan transparan untuk menggambarkan tingkat keyakinan dan ketidakpastian.
                                    </li>
                                    <li>
                                        Penanganan ketidakpastian: Metode ini mempertimbangkan ketidakpastian dalam penilaian, karena nilai Certainty Factor dapat mencakup rentang dari -1 hingga +1. Nilai positif menunjukkan tingkat keyakinan positif, sementara nilai negatif menunjukkan tingkat ketidakpercayaan atau kontradiksi terhadap suatu hipotesis.
                                    </li>
                                    <li>
                                        Kompatibilitas dengan perubahan: Metode Certainty Factor memungkinkan sistem untuk mengatasi situasi ketika ada penambahan atau penghapusan aturan atau fakta. Ketika ada perubahan dalam basis pengetahuan, nilai Certainty Factor dapat disesuaikan dengan informasi baru untuk memperbarui tingkat keyakinan.
                                    </li>
                                    <li>
                                        Mendukung kombinasi aturan: Metode ini memungkinkan penggabungan beberapa aturan yang saling terkait. Ketika aturan-aturan ini bergantung satu sama lain, Certainty Factor dari masing-masing aturan dapat digabungkan untuk menghasilkan tingkat keyakinan keseluruhan.
                                    </li>
                                    <li>
                                        Intuitif dan mudah diinterpretasi: Konsep Certainty Factor relatif mudah dipahami dan diinterpretasi. Nilai CF positif menunjukkan bahwa suatu fakta mendukung hipotesis, sementara nilai CF negatif menunjukkan bahwa fakta tersebut bertentangan dengan hipotesis.
                                    </li>
                                    <li>
                                        Dapat digunakan dalam sistem yang kompleks: Metode Certainty Factor dapat diterapkan dalam sistem yang memiliki banyak aturan dan fakta yang saling terkait. Dengan pendekatan yang tepat, metode ini dapat membantu sistem pakar mengambil keputusan yang kompleks dengan mempertimbangkan tingkat keyakinan dari berbagai aturan dan fakta.
                                    </li>
                                </ol>
                            </p>
                            <p class="mb-0" style="text-align: justify">
                                Namun, seperti metode lainnya, metode Certainty Factor juga memiliki beberapa kelemahan, seperti sensitivitas terhadap fakta yang tidak lengkap, perlu pemilihan nilai ambang batas untuk mengambil keputusan, dan kemungkinan terjadinya konflik antara aturan-aturan yang bertentangan. Oleh karena itu, sebelum menggunakannya, perlu dipertimbangkan konteks dan karakteristik dari sistem yang akan diimplementasikan.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Perhitungan : Certainty Factors</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">
                                Berikut rumus perhitungan certainty factor pada web pemilihan kemasan ini:
                            </p>
                            <br>
                            <p class="mb-0"  style="text-align: justify">
                                Jika data yang diketahui adalah 1 hipotesa yang mempunyai 1 evidence, 1 MB dan 1 MD. Rumusnya adalah:
                                <code>CF[H,E] = MB[H,E] – MD[H,E]</code>
                                <br>
                                <i>
                                    **Namun untuk memudahkan pakar maka web ini akan langsung menerima nilai kapastian mutlak (CF). 
                                </i>
                            </p>
                            <br>
                            <p class="mb-0">
                                Jika data yang diketahui adalah banyak hipotesa, banyak envidence dan memiliki banyak CF envidence serta menggunakan rule konjungsi seperti <strong>E1 AND E2 AND En, THEN H</strong>. Maka hasil yang dicari adalah CF kombinasi terlebih dahulu. Rumusnya adalah:
                                <ol>
                                    <li>Jika kedua CF > 0</li>
                                    <code>CF[H, E] = CF[lama] + CF[baru] (1 - CF[lama])</code>
                                    <li>Jika Kedua CF < 0</li>
                                    <code>CF[H, E] = CF[lama] + CF[baru] (1 + CF[lama])</code>
                                </ol>
                            </p>
                            <strong>
                                Nilai CF[H,E] ini kemudian akan dilakukan persentase, persentase terbesar maka itulah pilihan terbaik.
                            </strong>
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
