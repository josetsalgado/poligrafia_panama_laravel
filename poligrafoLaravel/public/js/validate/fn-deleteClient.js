//funcion para borrar usuarios
function fnDelete(id) {
    alertify.confirm("¿Esta seguro que desea eliminar este cliente?",
            function (e) {
                if (e) {
                    var success = alertify.success('Encuestdo eliminado');
                    $.ajax({
                        url: 'create_user',
//                        data: id,
                        type: 'post',
                        success: function(){
                            console.log("bien");
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
