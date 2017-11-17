$(document).ready(function () {
      count();

      //agregar tareas
      $(".click_check").click(function(){
            count();
          var valor = $(this).val();
          if (valor==0) {
            $(this).val("1");
          }else{
            $(this).val("0");
          }
      });

      $(".tdl-new").bind('keypress', function(e){
            var code = (e.keyCode ? e.keyCode : e.which);
            if(code == 13) {
                  var v = $(this).val();
                  var s = v.replace(/ +?/g, '');
                  if (s == ""){
                        return false;
                  }else{
                        addTarea(v);
                        $(this).val("");
                  }
            }
      });
      $("#btn-add").click(function(){
            var v = $(".tdl-new").val();
            var s = v.replace(/ +?/g, '');
            if (s == ""){
                  return false;
            }else{
                  addTarea(v);
                  $(".tdl-new").val("");
            }
      });

      function addTarea(v) {

            $(".tdl-content ul").append("<li><label><input type='checkbox' value='1'><i></i><span>"+ v +"</span><a href='#'><i class='fa fa-trash-o'></i></a></label></li>");
      }
      function count(){
            var numberOfChecked = $('input:checkbox:checked').length;
            var totalCheckboxes = $('input:checkbox').length;
            var numberNotChecked = totalCheckboxes - numberOfChecked;

            $("#slopes").text("");
            $("#slopes").append("Tareas realizadas ("+numberOfChecked+") Tareas pendientes ("+numberNotChecked+")");
      }

      $(".tdl-content a").bind("click", function(){
            var _li = $(this).parent().parent("li");
            _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
                  _li.remove();
            });
            count();
            return false;
      });


      $(".tdl-content").on('click', "a", function(){
            var _li = $(this).parent().parent("li");
            _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
                  _li.remove();
            });
            return false;
      });

      //validar envio de tarea
      $("#createHomework").validate({

        wrapper: "div",
        errorClass: "text-danger",

      rules: {
            add_homework: { required:true },
      },
      messages: {
            add_homework: { required: "El campo nombre es obligatorio." },
      },
      submitHandler: function(form){
            var dataString = $('#createHomework').serialize();
            console.log(dataString);
            $.ajax({
              type: "POST",
              url: "homework_create",
              data: dataString,
              success: function(data) {
                  $('#createHomework')[0].reset();
                  alertify.success('Tarea creada con exito');
                  $("#load_update_homework").load("homework #load_update_homework");
                  $("#top_nav").load("homework #top_nav");
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
            //$('#createUser')[0].reset();
      }//cerrado de la accion del submiting
    });//cerrada validating jquery
  });
