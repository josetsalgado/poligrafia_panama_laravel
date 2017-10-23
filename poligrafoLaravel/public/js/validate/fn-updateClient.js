$(document).ready(function(){
    $("#updateClient").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            email: { required:true, email: true  },
            tel: { number:true },
	},
	messages: {
            email: { 
                    email: "Debe ingresar un campo con formato correo",
                },
            tel: { 
                    number: "Debe ingresar un campo con formato correo",
                },
	},
	submitHandler: function(form){
            var dataString = $('#updateClient').serialize();
            $.ajax({
	        type: "POST",
	        url: "update_client",
	        data: dataString,
	        success: function(data) {
                    $(".close").click();
                    alertify.success('Datos actualizados');
                            $("#datatable-responsive").load("show_client #datatable-responsive");
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

