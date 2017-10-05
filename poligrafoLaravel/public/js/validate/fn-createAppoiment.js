$(document).ready(function () {
    //funcion para mostrar lista de clientes asociados a la empresa
    $("#empresa").change(function(){getClient();});
    $("#client").attr("disabled",true);
    function getClient(){
        var code = $("#empresa").val();

        $.get("appoiment_company/"+code, function (resultado) {
            if (resultado == false)
            {
                alert("Usted debe crear un cliente asociado a esta compañia");
            }
            else
            {
                $("#client").attr("disabled", false);
                document.getElementById("client").options.length = 1;
                $('#client').append(resultado);
            }
        });
    }
    
    //calendario
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        locale: 'es',
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectHelper: true,
        dayClick: function (date, jsEvent, view) {
            //modal para pedir una cita
            var date = new Date(date._i);
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var day = date.getDate() + 1;
            var getDate = year + "-" + month + "-" + day;

            $("#myModal").modal("show");
            $("#dateEpoch").attr("value", getDate);
        },
        eventClick: function (calEvent, jsEvent, view) {
            //modal para editar una cita
            $("#CalenderModalEdit").load("editQuote/" + calEvent.id);
            $("#CalenderModalEdit").modal("show");
        },
        editable: true,
        eventLimit: true, 
        events: {
            //data que se carga en el modal mediante json
            url: 'getQuotes',
        },
       
    });
    
    //validar solicitud de cita
    $("#createQuote").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            empresa: { required:true },
            client: { required:true },
            schedule: { required:true },
            service: { required:true },
            status: { required:true }, 
            candidateName: { required:true }, 
            candidateLastname: { required:true }, 
            ciCandidate: { required:true }, 
            jobCandidate: { required:true }, 
            telCandidate: { required:true }, 
            descriptionCandidate: { required:true }, 
        },
	messages: {
            empresa: { required: "El campo empresa es obligatorio." },
            client: { required: "El campo cliente es obligatorio." },
            schedule: { required: "El campo horario es obligatorio." },
            service: { required: "El campo tipo de prueba es obligatorio." },
            status: { required: "El campo estatus es obligatorio." }, 
            candidateName: { required: "El campo nombre del candidato es obligatorio." }, 
            candidateLastname: { required: "El campo apellido del candidato es obligatorio." }, 
            ciCandidate: { required: "El campo cedula es obligatorio." }, 
            jobCandidate: { required: "El puesto es obligatorio." }, 
            telCandidate: { required: "El telefono es obligatorio." }, 
            descriptionCandidate: { required: "El descripción es obligatorio." }, 
	},
	submitHandler: function(form){
            var dataString = $('#createQuote').serialize();
            $.ajax({
	        type: "POST",
	        url: "create_quote",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
                        $('#createQuote')[0].reset();
                        $('.close').click();
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
});