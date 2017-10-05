$(document).ready(function () {
    //funcion para mostrar lista de clientes asociados a la empresa
    getClient();
    $("#empresaEdit").change(function(){getClient();});
    $("#clientEdit").attr("disabled",true);
    function getClient(){
        var code = $("#empresaEdit").val();

        $.get("appoiment_company/"+code, function (resultado) {
            if (resultado == false)
            {
                alert("Usted debe crear un cliente asociado a esta compañia");
            }
            else
            {
                $("#clientEdit").attr("disabled", false);
                document.getElementById("clientEdit").options.length = 1;
                $('#clientEdit').append(resultado);
            }
        });
    }
    
   
    
    //validar solicitud de cita
    $("#editQuotePatien").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            polygraphist: { required:true },
            empresaEdit: { required:true },
            clientEdit: { required:true },
            scheduleEdit: { required:true },
            serviceEdit: { required:true },
            statusEdit: { required:true }, 
            candidateNameEdit: { required:true }, 
            candidateLastnameEdit: { required:true }, 
            ciCandidateEdit: { required:true }, 
            jobCandidateEdit: { required:true }, 
            telCandidateEdit: { required:true }, 
            descriptionCandidateEdit: { required:true }, 
        },
	messages: {
            polygraphist: { required: "El campo poligrafista es obligatorio." },
            empresaEdit: { required: "El campo empresa es obligatorio." },
            clientEdit: { required: "El campo cliente es obligatorio." },
            scheduleEdit: { required: "El campo horario es obligatorio." },
            serviceEdit: { required: "El campo tipo de prueba es obligatorio." },
            statusEdit: { required: "El campo estatus es obligatorio." }, 
            candidateNameEdit: { required: "El campo nombre del candidato es obligatorio." }, 
            candidateLastnameEdit: { required: "El campo apellido del candidato es obligatorio." }, 
            ciCandidateEdit: { required: "El campo cedula es obligatorio." }, 
            jobCandidateEdit: { required: "El puesto es obligatorio." }, 
            telCandidateEdit: { required: "El telefono es obligatorio." }, 
            descriptionCandidateEdit: { required: "El descripción es obligatorio." }, 
	},
	submitHandler: function(form){
            var dataString = $('#editQuotePatien').serialize();
            $.ajax({
	        type: "POST",
	        url: "update_quote",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
                        $('#editQuotePatien')[0].reset();
                        $('.close').click();
	       	},error: function (err) {
                    console.log(err);
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
});