function edit_company(id){
    $("#myModal").load('edit_company/'+id);
}

$(document).ready(function(){
    $("#update_company").validate({

        wrapper: "div",
        errorClass: "text-danger",

	rules: {
        email_compamy: { required:true, email: true  },
        tel_company: { number:true },
	},
	messages: {
        email_compamy: {
                    email: "Debe ingresar un campo con formato correo",
                },
        tel_company: {
                    number: "Debe ingresar un campo con formato telefono",
                },
	},
	submitHandler: function(form){
            var dataString = $('#update_company').serialize();
            $.ajax({
	        type: "POST",
	        url: "edit_company",
	        data: dataString,
	        success: function(data) {
                    $(".close").click();
                    alertify.success('Datos actualizados');
                            $("#datatable-responsive").load("show_company #datatable-responsive");
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

