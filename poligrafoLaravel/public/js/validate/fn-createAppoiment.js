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
            $("#myModal").modal("show");
//            console.log(date._i);
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
                title: 'All Day Event',
                start: '2017-09-01'
            },
            {
                title: 'Long Event',
                start: '2017-09-07',
                end: '2017-09-10'
            }
        ]
    });

    $("#createQuote").validate({
        
        wrapper: "div",
        errorClass: "text-danger",
        
	rules: {
            polygraphist: { required:true },
            client: { required:true },
            schedule: { required:true },
            candidato: { required:true },
        },
	messages: {
            polygraphist: { required: "El campo poligrafista es obligatorio." },
            client: { required: "El campo cliente es obligatorio." },
            schedule: { required: "El campo cliente es obligatorio." },
            candidato: { required: "El campo nombre es obligatorio." },
	},
	submitHandler: function(form){
            var dataString = $('#createQuote').serialize();
            $.ajax({
	        type: "POST",
	        url: "create_quote",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
                        $('#createUser')[0].reset();
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