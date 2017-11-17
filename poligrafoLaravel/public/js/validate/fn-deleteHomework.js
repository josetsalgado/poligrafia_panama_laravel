function fnDelete(id) {
    console.log(id);
    alertify.confirm("¿Esta seguro que desea eliminar esta tarea?",
            function (e) {
                if (e) {
                    var success = alertify.success('Tarea eliminada');
                    $.ajax({
                        url: 'delete_homework/'+id,
                        type: 'get',
                        success: function (data) {
                           $("#load_update_homework").load("homework #load_update_homework");
                           $("#top_nav").load("homework #top_nav");
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
