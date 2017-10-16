var seleccione;
    var options = {
        unico : {
          "": "",
          unico_utah: "UTAH zona 3 (ZCT)",
          unico_zct: "ZCT FEDERAL",
          unico_bizona: "BIZONA"
          },
        multiple: {
            "": "",
            multiple_af_v1: "AF MGQT V.1",
            multiple_af_v2: "AF MGQT V.2",
            multiple_mgqt: "MGQT UTAH"
        },
        laborales : {
            "": "",
            laborales: "DLST (screening) TES"
        }
    }

 $(function(){
    $('.spinner .btn:first-of-type').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
        });
        $('.spinner .btn:last-of-type').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
        });
        options
        
    var fillSecondary = function(){
        var selected = $('#primary').val();
        
        $('#secondary').empty();
        seleccione = $("#secondary").val()
        if(!seleccione){
            $("#secondary").attr("disabled", true);
        }
        $.each(options[selected], function (element,index) {
            $("#secondary").attr("disabled", false);
            $('#secondary').append('<option value="'+element+'">'+index+'</option>');
          });
    }
    $('#primary').change(fillSecondary);
        fillSecondary();
    });

$("#secondary").change(function(){
    var typeExam = $('#primary').val();
    var typeTest = $('#secondary').val();
    
    switch(typeExam) {
        case "unico":
            //tipo de test
            switch(typeTest) {
                case "unico_utah":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#utha_zona_3").addClass("show-div");
                    break;
                case "unico_zct":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#zct_federal").addClass("show-div");
                    break;
                case "unico_bizona":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#bizona").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        case "multiple":
            //tipo de test
            switch(typeTest) {
                case "multiple_af_v1":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#af_mgqt_v1").addClass("show-div");
                    break;
                case "multiple_af_v2":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#af_mgqt_v2").addClass("show-div");
                    break;
                case "multiple_mgqt":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#utah").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        case "laborales":
            //tipo de test
            switch(typeTest) {
                case "laborales":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#dlst").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        default:
            break;
    }  
});