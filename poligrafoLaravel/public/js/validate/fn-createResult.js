
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
                    $("#1").attr("name",'g3_r4');
                    $("#2").attr("name",'g4_r4');
                    $("#3").attr("name",'g5_r4');
                    $("#4").attr("name",'g3_r5');
                    $("#5").attr("name",'g4_r5');
                    $("#6").attr("name",'g5_r5');

                    for (var i=7; i<68; i++) {
                        $("#"+i).removeAttr("name");
                    }
                    
                    break;
                case "AFMGQT-V2-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_3R").addClass("show-div");

                    //asignar nombre
                    $("#7").attr("name",'g3_r4');
                    $("#8").attr("name",'g4_r4');
                    $("#9").attr("name",'g5_r4');
                    $("#10").attr("name",'g3_r5');
                    $("#11").attr("name",'g4_r5');
                    $("#12").attr("name",'g5_r5');
                    $("#13").attr("name",'g3_r7');
                    $("#14").attr("name",'g4_r7');
                    $("#15").attr("name",'g5_r7');

                    //remove name de los input no seleccionados
                   for (var i=1; i<7; i++) {
                        $("#"+i).removeAttr("name");
                    }
                    for (var a=16; a<68; a++) {
                        $("#"+a).removeAttr("name");
                    }

                    break;
                case "AFMGQT-V2-4R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_4R").addClass("show-div");
                    //asignar nombre
                    $("#16").attr("name",'g3_r4');
                    $("#17").attr("name",'g4_r4');
                    $("#18").attr("name",'g5_r4');
                    $("#19").attr("name",'g3_r5');
                    $("#20").attr("name",'g4_r5');
                    $("#21").attr("name",'g5_r5');
                    $("#22").attr("name",'g3_r7');
                    $("#23").attr("name",'g4_r7');
                    $("#24").attr("name",'g5_r7');
                    $("#25").attr("name",'g5_r8');
                    $("#26").attr("name",'g5_r8');
                    $("#27").attr("name",'g5_r8');

                    //remove name de los input no seleccionados
                   for (var i=1; i<16; i++) {
                        $("#"+i).removeAttr("name");
                    }
                    for (var a=28; a<68; a++) {
                        $("#"+a).removeAttr("name");
                    }


                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");


                    $("#64").attr("name",'g3_r1');
                    $("#65").attr("name",'g4_r1');
                    $("#66").attr("name",'g3_r2');
                    $("#67").attr("name",'g4_r2');

                    for (var a=1; a<64; a++) {
                        $("#"+a).removeAttr("name");
                    }

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
