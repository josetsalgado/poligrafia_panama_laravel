$("#createModal").click(function () {
    var dataString = $('#createBudget').serialize();
    $.ajax({
        type: "POST",
        url: "modalCrateBudget",
        data: dataString,
        success: function (data) {
            $("#myModal").html(data);
        }
    });
});


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


    $("#createBudget").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
	
	submitHandler: function(form){
            var dataString = $('#createBudget').serialize();
            $.ajax({
	        type: "POST",
	        url: "create_butget",
	        data: dataString,
	        success: function(data) {
                   	$('#createBudget')[0].reset();
                        alertify.success('Cotización creada de forma correcta');
                        window.location.href = "pdfCrateBudget";
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

