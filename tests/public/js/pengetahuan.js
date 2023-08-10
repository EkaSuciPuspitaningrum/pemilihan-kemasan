function sum() {
    $('#package').on('change', function() {
        // ambil data dari elemen option yang dipilih
        const nilai_mb = $('#nilai_mb option:selected').data('nilai_mb');
        const nilai_md = $('#nilai_md option:selected').data('nilai_md');

        // kalkulasi nilai_cf
        const nilai_cf = nilai_mb - nilai_md;

        // tampilkan data ke element
        $('[name=nilai_cf]').val(nilai_cf);

    });
}