$(document).ready(function () {

    
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

            var date = new Date(date._i);

            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var day = date.getDate() + 1;
            var getDate = year + "-" + month + "-" + day;

            $("#myModal").modal("show");
            $("#dateEpoch").attr("value", getDate);
        },
        eventClick: function(calEvent, jsEvent, view) {
console.log(view);
            alert('Event: ' + calEvent.title);
            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            alert('View: ' + view.name);

        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: {
            url: 'getQuotes',
        },
       
    });

    $("#createQuote").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            polygraphist: { required:true },
            client: { required:true },
            schedule: { required:true },
            service: { required:true },
            candidateName: { required:true },
            candidateLastname: { required:true },
            ciCandidate: { required:true, number:true },
            jobCandidate: { required:true },
            telCandidate: { required:true, number:true },
            descriptionCandidate: { required:true },
        },
	messages: {
            polygraphist: { required: "El campo poligrafista es obligatorio." },
            client: { required: "El campo cliente es obligatorio." },
            schedule: { required: "El campo horario es obligatorio." },
            service: { required: "El campo tipo de prueba es obligatorio." },
            candidateName: { required: "El campo nombre del candidato es obligatorio." },
            candidateLastname: { required: "El campo apellido del candidato es obligatorio." },
            ciCandidate: { 
                required: "El campo cedula del candidato es obligatorio.",
                number: "Este campo no tiene un formato correcto"
            },
            jobCandidate: { required: "El campo puesto del candidato es obligatorio." },
            telCandidate: { 
                required: "El campo telefono del candidato es obligatorio.",
                number: "Este campo no tiene un formato correcto"
            },
            descriptionCandidate: { required: "El descripción del candidato es obligatorio." },
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