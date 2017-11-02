$(document).ready(function () {
    //funcion para mostrar lista de clientes asociados a la empresa
    getClient();
    $("#empresaEdit").change(function () {
        getClient();
    });
    $("#clientEdit").attr("disabled", true);
    function getClient() {
        var code = $("#empresaEdit").val();

        $.get("appoiment_company/" + code, function (resultado) {
            if (resultado == false)
            {
                alert("Usted debe crear un cliente asociado a esta compañia");
            }
            else
            {
                $("#clientEdit").attr("disabled", false);
                document.getElementById("clientEdit").options.length = 1;
                $('#clientEdit').append(resultado);
            }
        });
    }



    //validar solicitud de cita
    $("#editQuotePatien").validate({
        wrapper: "div",
        errorClass: "text-danger",

        submitHandler: function (form) {
            var dataString = $('#editQuotePatien').serialize();
            $.ajax({
                type: "POST",
                url: "update_quote",
                data: dataString,
                success: function (data) {
                    $('#editQuotePatien')[0].reset();
                    $('.close').click();
                    location.reload();

                }, error: function (err) {
                    console.log(err);
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