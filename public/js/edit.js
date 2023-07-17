$(document).ready(function() {
    var table = $('table').DataTable();
    table.on('click', 'edit', function() {
        $tr = $(this).closest('tr');
        if ($(tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }
        var data = table.row($tr).data();
        console.log(data);

        $('name').val(data[1]);
        $('email').val(data[2]);
        $('password').val(data[3]);

        $('#editForm').attr('action', '/admin/edit/' + data[0]);
        $('#editAdmin'.modal('show'));
    })
});