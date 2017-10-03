$(document).ready(function(){
    $("#createCompany").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            name_company: { required:true },
            ruc_company: { required:true },
            tel_company: { required:true, number:true },
            email_compamy: { required:true, email: true  },
            address_company: { required:true },
	},
	messages: {
            name_company: { required: "El campo nombre de la compañia es obligatorio." },
            ruc_company: { required: "El campo ruc es obligatorio." },
            tel_company: {
                required: "El campo telefono es obligatorio.",
                number: "Debe ingresar un campo con formato correo",
            },
            email_compamy: { 
                    required: "El campo email es obligatorio.",
                    email: "Debe ingresar un campo con formato correo",
                },
            address_company: { required: "El campo direccion es obligatorio." },
	},
	submitHandler: function(form){
            var dataString = $('#createCompany').serialize();
            $.ajax({
	        type: "POST",
	        url: "create_company",
	        data: dataString,
                success: function (data) {
                    alert("bien");
                    $('#createCompany')[0].reset();
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

