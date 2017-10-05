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
    
    $(".quantity").keyup(function () {
        var value = parseInt($(this).val());
        var value2 = $("input:text").attr("id");
        console.log(value2);
            if(!value){
                $(".price").val('');
            }else{
                $(".price").val(2+value);
            }       
    });
