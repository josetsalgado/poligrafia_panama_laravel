$(document).ready(function(){
    $("#createCompany").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            tel_company: {  number:true },
            email_compamy: { email: true  },
            cost_test_pre_employment: { number: true  },
            cost_specific_test: { number: true  },
            cost_routine_test: { number: true  },
            reevaluation_test_cost: { number: true  },
	},
	messages: {
            
            tel_company: {
                number: "Debe ingresar un campo con formato correo",
            },
            email_compamy: { 
                    email: "Debe ingresar un campo con formato correo",
            },
            cost_test_pre_employment: {
                number: "Debe ingresar un campo con formato correo",
            },
            cost_specific_test: {
                number: "Debe ingresar un campo con formato correo",
            },
            cost_routine_test: {
                number: "Debe ingresar un campo con formato correo",
            },
            reevaluation_test_cost: {
                number: "Debe ingresar un campo con formato correo",
            },
	},
	submitHandler: function(form){
            var dataString = $('#createCompany').serialize();
            console.log(dataString);
            $.ajax({
	        type: "POST",
	        url: "create_company",
	        data: dataString,
                success: function (data) {
                    $('#createCompany')[0].reset();
                    alertify.success('Compañia creada exitosamente');
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
                        $('body,html').animate({scrollTop : 0}, 500);
                        return false;
                    } else {
                        /// do some thing else
                    }
                }
            });
	}//cerrado de la accion del submiting  
    });//cerrada validating jquery 
}); //cerrado de document ready

$(document).ready(function(){
    $("#createClient").validate({

        wrapper: "div",
        errorClass: "text-danger",

        rules: {
            empresa: { required:true },
        },
        messages: {
            empresa: { required: "El campo empresa es obligatorio." },
        },
        submitHandler: function(form){
            var dataString = $('#createClient').serialize();
            console.log(dataString);
            $.ajax({
                type: "POST",
                url: "create_client",
                data: dataString,
                success: function (data) {
                    alertify.success('El nuevo cliente se a agregado de forma correcta');
                    $('#createClient')[0].reset();
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
                        $('body,html').animate({scrollTop : 0}, 500);
                    } else {
                        /// do some thing else
                    }
                }
            });
            //$('#createUser')[0].reset();
        }//cerrado de la accion del submiting
    });//cerrada validating jquery
}); //cerrado de document ready

