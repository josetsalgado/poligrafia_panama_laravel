$(document).ready(function () {
      //actualizar los datos

$(".click_check").click(function(){
       var id = $(this).attr("id");
      update(id);
      });


      function update(id){
          var dataString = $('#homework_update').serialize();
          var url = "homework_update/"+id;
        //  alert(url);
          console.log(dataString);
        //  $("#load_update_homework").load("homework #load_update_homework");
         // $('#homework_update')[0].reset();
          $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data) {
                  alertify.success('Tarea creada con exito');
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
                  } else {
                        /// do some thing else
                  }
            }
      });
      }
});