$(document).ready(function () {
    
    //validar solicitud de cita
    $("#createPay").validate({
        wrapper: "div",
        errorClass: "text-danger",
        submitHandler: function (form) {
            var dataString = $('#createPay').serialize();
            $.ajax({
                type: "POST",
                url: "create_payment",
                data: dataString,
                success: function (data) {
                    $('#createPay')[0].reset();
                    $('.close').click();
                    $("#datatable-responsive").load("payment_record #datatable-responsive");
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