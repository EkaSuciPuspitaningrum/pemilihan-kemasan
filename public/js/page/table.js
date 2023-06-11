$(document).ready(function() {
    $('#table').DataTable({
        scrollX: true,
        autoWidth: false,
        paging: true,
        info: true,
        searching: true,
        responsive: true,
        ordering: true,
    });
});