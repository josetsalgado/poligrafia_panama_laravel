$(document).ready(function(){
    $("#createUser").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            name: { required:true },
            lastname: { required:true },
            email: { required:true, email: true  },
            tel: { required:true, number:true },
            rol: { required:true },
            password: { required:true },
            password_confirmation: { required:true, equalTo: password },
	},
	messages: {
            name: { required: "El campo nombre es obligatorio." },
            lastname: { required: "El campo apellido es obligatorio." },
            email: { 
                    required: "El campo email es obligatorio.",
                    email: "Debe ingresar un campo con formato correo",
                },
            tel: { 
                    required: "El campo telefono es obligatorio.",
                    number: "Debe ingresar un campo con formato correo",
                },
            rol: { required: "El campo rol es obligatorio." },
            password: { required: "El campo clave es obligatorio." },
            password_confirmation: { 
                required: "El campo confirmar clave es obligatorio.",
                equalTo: "Este campo debe ser igual que el campo clave",
            },
	},
	submitHandler: function(form){
            var dataString = $('#createUser').serialize();
            console.log(dataString);
            $.ajax({
	        type: "POST",
	        url: "update_user",
	        data: dataString,
	        success: function(data) {
                    $(".close").click();
	       	},error: function (err) {
                    if (err.status === 422) {
                        $errors = err.responseJSON; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger form-errors" role="alert">';
                        errorsHtml += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>';

                        $.each($errors, function (key, value) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';

                        $('#form-error').html(errorsHtml); //appending to a <div id="form-errors"></div> inside form

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

