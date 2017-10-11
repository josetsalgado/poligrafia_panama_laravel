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
            $('#createBudget')[0].reset();
        }
        else
        {
            $("#client").attr("disabled", false);
            document.getElementById("client").options.length = 1;
            $('#client').append(resultado);
        }
    });
}



var quantityId;
var prince = '';
var princeOrigin;
var priceVal;
var tru = true;

$($(this)).keyup(function (idKey) {
    quantityId = idKey.target.id;

    var value = parseInt($("#" + quantityId).val());


    quantityId = quantityId.split("quantity_");
    prince = "price_";
    prince = prince.concat(quantityId[1]);

    princeOrigin = "price_origin_";
    princeOrigin = princeOrigin.concat(quantityId[1]);

    priceVal = parseInt($("#" + prince).val());

    princeOrigin = parseInt($("#" + princeOrigin).val());

    if (!value || (value < 0)) {
        $("#" + prince).attr("disabled", true);
        $("#" + prince).val(princeOrigin);
    } else {
        $("#" + prince).attr("disabled", false);
        $("#" + prince).val(value * princeOrigin);
        $("#" + prince).attr("value", value * princeOrigin);
    }
});
    
    
$(document).ready(function(){
    $(document).ready(function() {
    $("input").attr({
       "min" : 0,
       messages: "minimo 0" 
    });
});

jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es obligatorio",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Valor minimo aceptado es {0}.")
});
    $("#createBudget").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            field: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            }
        },
	
	submitHandler: function(form){
            var dataString = $('#createBudget').serialize();
            $.ajax({
	        type: "POST",
	        url: "create_butget",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
                        console.log(dataString);
                        $('#createBudget')[0].reset();
	       	},error: function (err) {
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
}); //cerrado de document ready

