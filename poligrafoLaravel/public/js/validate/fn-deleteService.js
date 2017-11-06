function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este servicio?",
        function (e) {
            if (e) {
                $.ajax({
                    url: 'delete_service/' + id,
                    type: 'get',
                    success: function (data) {
                        console.log(data);
                        alertify.success('Servicio eliminado');
                        $("#datatable-responsive").load("show_product #datatable-responsive");
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
