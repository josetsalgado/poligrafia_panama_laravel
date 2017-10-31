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
            }
            else
            {
                $("#client").attr("disabled", false);
                document.getElementById("client").options.length = 1;
                $('#client').append(resultado);
            }
        });
    }

    //validar solicitud de cita
    $("#createQuote").validate({
        wrapper: "div",
        errorClass: "text-danger",
        
        submitHandler: function (form) {
            var dataString = $('#createQuote').serialize();
            console.log(dataString);
            $.ajax({
                type: "POST",
                url: "create_quote_dasboard",
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

function editQuote(id){
    $("#CalenderModalEdit").load('edit_quote_dasboard/'+id);
    $("#CalenderModalEdit").show();
}
function editQuoteTomorrow(id){
    $("#CalenderModalEditTomorrow").load('edit_quote_dasboard/'+id);  
}