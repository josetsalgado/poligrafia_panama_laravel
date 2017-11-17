var total = parseInt($("#total_pay").val());
$(".keyUp").keyup(function (idKey) {
    var payment = parseInt($("#payment").val());
    var discount = parseInt($("#discount").val());
    if (!discount && !payment) {
        $("#total_pay").val(total);
    } else {
        if(payment){
            $("#total_pay").val( total - payment);
        }
        if(discount){
            $("#total_pay").val( total - discount);
        }
        if(payment && discount){
            $("#total_pay").val( total - payment - discount);
        }
    }
});

 

$('#myModal').on('shown.bs.modal', function () {
    $(this).removeData('bs.modal');
});

$(document).ready(function () {
    $("#createPayment").validate({
        wrapper: "div",
        errorClass: "text-danger",
        rules: {
            facture_number: {required: true},
            way_to_pay: {required: true},
            payment: {required: true, number: true},
            observations: {required: true},
            discount: {min: 1, number: true},
        },
        messages: {
            facture_number: {required: "El campo numero de factura fiscal es obligatorio."},
            way_to_pay: {required: "El campo forma de pago es obligatorio."},
            payment: {
                required: "El campo monto a pagar es obligatorio.",
                number: "Debe ingresar un campo con formato numerico",
            },
            observations: {required: "El campo observaciones es obligatorio."},
            discount: {
                min: "Valor mínimo ingresado debe ser mínimo 1.",
                number: "Debe ingresar un campo con formato numerico",
            },
        },
        submitHandler: function (form) {
            var dataString = $('#createPayment').serialize();
            $.ajax({
                type: "POST",
                url: "create_payment",
                data: dataString,
                success: function (data) {
                    $(".close").click();
                    $('#createPayment')[0].reset();
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
        }//cerrado de la accion del submiting  
    });//cerrada validating jquery 
}); //cerrado de document ready

