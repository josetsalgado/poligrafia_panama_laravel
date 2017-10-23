function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este cliente?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: 'delete_client/' + id,
                        type: 'get',
                        success: function (data) {
                            console.log(data);
                            alertify.success('Cliente eliminado');
                            $("#datatable-responsive").load("show_client #datatable-responsive");
                        },error: function (err) {
                            console.log(err);
                        }
                    });
                    return false;
                } else {
                    alertify.error("Usted ha cancelado la solicitud");

                }
            },
            function () {
                var error = alertify.error('Cancel');
            });
}
