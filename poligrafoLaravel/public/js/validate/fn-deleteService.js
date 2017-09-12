function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este servicio?",
            function (e) {
                if (e) {
                    var success = alertify.success('Servicio eliminado');
                    $.ajax({
                        url: 'delete_service/' + id,
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
