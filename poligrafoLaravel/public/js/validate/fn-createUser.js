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
	        url: "create_user",
	        data: dataString,
	        success: function(data) {
                   	alert("bien");
	       	},error: function (err) {
                    console.log(err.responseJSON);
                }
            });
            $('#createUser')[0].reset();
	}//cerrado de la accion del submiting  
    });//cerrada validating jquery 
}); //cerrado de document ready