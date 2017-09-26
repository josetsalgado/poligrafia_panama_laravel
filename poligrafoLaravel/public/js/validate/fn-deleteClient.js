function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este cliente?",
            function (e) {
                if (e) {
                    var success = alertify.success('Encuestdo eliminado');
                    $.ajax({
                        url: 'delete_client/'+id,
                        type: 'get'
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
