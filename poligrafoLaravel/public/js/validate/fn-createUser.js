$(document).ready(function(){
    $("#createUser").validate({
	rules: {
            name: { required:true },
	},
	messages: {
            name: { required:"El campo nombre es obligatorio." },
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
                    console.log(err);
                }
            });
            $('#createUser')[0].reset();
	}//cerrado de la accion del submiting  
    });//cerrada validating jquery 
}); //cerrado de document ready