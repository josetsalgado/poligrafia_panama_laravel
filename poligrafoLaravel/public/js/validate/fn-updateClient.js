$(document).ready(function(){
    $("#updateClient").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            name: { required:true },
            email: { required:true, email: true  },
            tel: { required:true, number:true },
            city: { required:true },
            country: { required:true },
	},
	messages: {
            name: { required: "El campo nombre es obligatorio." },
            email: { 
                    required: "El campo email es obligatorio.",
                    email: "Debe ingresar un campo con formato correo",
                },
            tel: { 
                    required: "El campo telefono es obligatorio.",
                    number: "Debe ingresar un campo con formato correo",
                },
            city: { required: "El campo rol es obligatorio." },
            country: { required: "El campo clave es obligatorio." },
	},
	submitHandler: function(form){
            var dataString = $('#updateClient').serialize();
            console.log(dataString);
            $.ajax({
	        type: "POST",
	        url: "update_client",
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

