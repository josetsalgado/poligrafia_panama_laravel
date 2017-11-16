
var options = {
    pre_empleo: ["","AFMGQT-V2-2R", "AFMGQT-V2-3R", "AFMGQT-V2-4R", "DLST"],
    especifica: ["","AFMGQT-V1-2R", "AFMGQT-V1-3R", "UTAH", "RASKIN"],
    rutina: ["","AFMGQT-V1-2R", "AFMGQT-V1-3R", "AFMGQT-V2-2R", "AFMGQT-V2-3R", "AFMGQT-V2-4R", "DLST"],
    reevaluacion: [""]
}

$(function () {
    $("#tecnicals").attr("disabled", true);
    $("#services").change(function () {
        $("#tecnicals").attr("disabled", false);
        var services = $('#services').val();
        $('#tecnicals').empty();
        appendTecnicals(services);
    });
});

function appendTecnicals(services){
    $("#tecnicals").attr("disabled", false);
    switch (services) {
        case "Pre-empleo":
            $.each(options["pre_empleo"], function (element, index) {  
                $('#tecnicals').append('<option value="' + index + '">' + index + '</option>');
            });
            break;
        case "Especifica":
            $.each(options["especifica"], function (element, index) {
                $('#tecnicals').append('<option value="' + index + '">' + index + '</option>');
            });
            break;
        case "Rutina":
            $.each(options["rutina"], function (element, index) {
                $('#tecnicals').append('<option value="' + index + '">' + index + '</option>');
            });
            break;
        default:
            $('#tecnicals').attr('disabled', true);
            break;
    }
}

$("#tecnicals").change(function () {
    var services = $('#services').val();
    var tecnicals = $('#tecnicals').val();
    console.log(services);
    console.log(tecnicals);
    
    switch (services) {
        case "Pre-empleo":
            //servicio pre empleo
            switch (tecnicals) {
                //tecnicas
                case "AFMGQT-V2-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_2R").addClass("show-div");
                    $("#AFMGQT_V2_2R").attr("name",'AFMGQT-V2-2R');
                    break;
                case "AFMGQT-V2-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_3R").addClass("show-div");
                    break;
                case "AFMGQT-V2-4R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_4R").addClass("show-div");
                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        case "Especifica":
            switch (tecnicals) {
                //tecnicas
                case "AFMGQT-V1-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_2R").addClass("show-div");
                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    break;
                case "UTAH":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#UTAH").addClass("show-div");
                    break;
                case "RASKIN":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#RASKIN").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        case "Rutina":
            //servicio
            switch (tecnicals) {
                //tecnicas
                case "AFMGQT-V1-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_2R").addClass("show-div");
                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    break;
                case "AFMGQT-V2-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_2R").addClass("show-div");
                    break;
                case "AFMGQT-V2-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_3R").addClass("show-div");
                    break;
                case "AFMGQT-V2-4R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_4R").addClass("show-div");
                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;
        default:
            break;
    }
});
