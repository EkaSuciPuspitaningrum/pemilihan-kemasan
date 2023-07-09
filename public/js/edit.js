$(document).ready(function() {
    $(document).on('click', '.edit', function() {
        var id = $(this).val();
        alert(id)
            // $.ajax({
            //     type: "GET",
            //     url: "/admin/edit" + id,
            //     success: function(response) {
            //         console.log(response.name.email);
            //     }
            // });
    });
});