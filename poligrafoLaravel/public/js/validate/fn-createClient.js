$(document).ready(function(){
    $("#createClient").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            name: { required:true },
            email: { required:true, email: true  },
            tel: { required:true, number:true },
            country: { required:true },
            city: { required:true },
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
            country: { required: "El campo rol es obligatorio." },
            city: { required: "El campo clave es obligatorio." },
	},
	submitHandler: function(form){
            var dataString = $('#createClient').serialize();
            console.log(dataString);
            $.ajax({
	        type: "POST",
	        url: "create_client",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
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
                    } else {
                        /// do some thing else
                    }
                }
            });
            //$('#createUser')[0].reset();
	}//cerrado de la accion del submiting  
    });//cerrada validating jquery 
}); //cerrado de document ready

