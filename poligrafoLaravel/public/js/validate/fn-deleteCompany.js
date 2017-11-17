function fnDelete(id) {
    console.log(id);
    alertify.confirm("¿Esta seguro que desea eliminar esta compañia?",
            function (e) {
                if (e) {
                    var success = alertify.success('Compañia eliminada');
                    $.ajax({
                        url: 'delete_company/'+id,
                        type: 'get',
                        success: function (data) {
                            $("#datatable-responsive").load("show_company #datatable-responsive");
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
