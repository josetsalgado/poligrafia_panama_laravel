$(document).ready(function () {
    //funcion para mostrar lista de clientes asociados a la empresa
    $("#empresa").change(function () {
        getClient();
    });
    $("#client").attr("disabled", true);
    function getClient() {
        var code = $("#empresa").val();

        $.get("appoiment_company/" + code, function (resultado) {
            if (resultado == false)
            {
                alert("Usted debe crear un cliente asociado a esta compañia");

                $("#client").attr("disabled", true);
                $("#client").empty().append(' <option value="">Seleccione</option>');

            }
            else
            {
                $("#client").attr("disabled", false);
                document.getElementById("client").options.length = 1;
                $('#client').append(resultado);
            }
        });
    }

    //calendario
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        locale: 'es',
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectHelper: true,
        dayClick: function (date, jsEvent, view) {
            //modal para pedir una cita
            var date = new Date(date._i);
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var day = date.getDate() + 1;
            var getDate = year + "-" + month + "-" + day;

            $("#myModal").modal("show");
            $("#dateEpoch").attr("value", getDate);
        },
        eventClick: function (calEvent, jsEvent, view) {
            //modal para editar una cita
            $("#CalenderModalEdit").load("editQuote/" + calEvent.id);
            $("#CalenderModalEdit").modal("show");
        },
        editable: true,
        eventLimit: true,
        events: {
            //data que se carga en el modal mediante json
            url: 'getQuotes',
        },
    });

    //validar solicitud de cita
    $("#createQuote").validate({
        wrapper: "div",
        errorClass: "text-danger",
        submitHandler: function (form) {
            var dataString = $('#createQuote').serialize();
            $.ajax({
                type: "POST",
                url: "create_quote",
                data: dataString,
                success: function (data) {
                    $('#createQuote')[0].reset();
                    $('.close').click();
                    location.reload();
                }, error: function (err) {
                    if (err.status === 422) {
                        $errors = err.responseJSON; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger" role="alert">';
                        errorsHtml += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>';

                        $.each($errors, function (key, value) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></di>';

                        $('#form-errors').html(errorsHtml); //appending to a <div id="form-errors"></div> inside form

                        window.setTimeout(function () {
                            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                                $(this).remove();
                            });
                        }, 4000);
                    } else {
                        /// do some thing else
                    }
                }
            });
            //$('#createUser')[0].reset();
        }//cerrado de la accion del submiting  
    });//cerrada validating jquery 
});