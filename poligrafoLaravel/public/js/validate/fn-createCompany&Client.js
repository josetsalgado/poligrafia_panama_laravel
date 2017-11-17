$(document).ready(function(){
    $("#companyClient").validate({



	},
	submitHandler: function(form){
            var dataString = $('#companyClient').serialize();
            console.log(dataString);
            $.ajax({
	        type: "POST",
	        url: "create_client_company",
	        data: dataString,
                success: function (data) {
                    $('#companyClient')[0].reset();
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
/*