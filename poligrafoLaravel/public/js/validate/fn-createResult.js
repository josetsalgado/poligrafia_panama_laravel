
var options = {
    pre_empleo: ["","AFMGQT-V2-2R", "AFMGQT-V2-3R", "AFMGQT-V2-4R", "DLST"],
    especifica: ["","AFMGQT-V1-2R", "AFMGQT-V1-3R", "UTAH", "RASKIN"],
    rutina: ["","AFMGQT-V1-2R", "AFMGQT-V1-3R", "AFMGQT-V2-2R", "AFMGQT-V2-3R", "AFMGQT-V2-4R", "DLST"],
    reevaluacion: ["","AFMGQT-V2-2R", "AFMGQT-V2-3R", "AFMGQT-V2-4R", "DLST","AFMGQT-V1-2R", "AFMGQT-V1-3R", "UTAH", "RASKIN"]
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
        case "Reevaluación":
            $.each(options["reevaluacion"], function (element, index) {
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
        case "Reevaluación":
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


                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");


                    $("#64").attr("name",'g3_r1');
                    $("#65").attr("name",'g4_r1');
                    $("#66").attr("name",'g3_r2');
                    $("#67").attr("name",'g4_r2');

                    

                    break;
                case "AFMGQT-V1-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_2R").addClass("show-div");
                    $("#28").attr("name",'g3_r4');
                    $("#29").attr("name",'g4_r4');
                    $("#30").attr("name",'g5_r4');
                    $("#31").attr("name",'g3_r6');
                    $("#32").attr("name",'g4_r6');
                    $("#33").attr("name",'g5_r6');
                    for (var a=1; a<28; a++) {
                        $("#"+a).removeAttr("name");
                    }
                    for (var i=34; i<68; i++) {
                        $("#"+i).removeAttr("name");
                    }

                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    $("#34").attr("name",'g3_r4');
                    $("#35").attr("name",'g4_r4');
                    $("#36").attr("name",'g5_r4');
                    $("#37").attr("name",'g3_r6');
                    $("#38").attr("name",'g4_r6');
                    $("#39").attr("name",'g5_r6');
                    $("#40").attr("name",'g3_r8');
                    $("#41").attr("name",'g4_r8');
                    $("#42").attr("name",'g5_r8');

                    break;
                case "UTAH":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#UTAH").addClass("show-div");

                    $("#43").attr("name",'g3_r4');
                    $("#44").attr("name",'g4_r4');
                    $("#45").attr("name",'g5_r4');
                    $("#46").attr("name",'g3_r8');
                    $("#47").attr("name",'g4_r8');
                    $("#48").attr("name",'g5_r8');
                    $("#49").attr("name",'g3_r11');
                    $("#50").attr("name",'g4_r11');
                    $("#51").attr("name",'g5_r11');
                    break;
                case "RASKIN":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#RASKIN").addClass("show-div");
                    $("#52").attr("name",'g3_r4');
                    $("#53").attr("name",'g4_r4');
                    $("#54").attr("name",'g5_r4');
                    $("#55").attr("name",'g3_r6');
                    $("#56").attr("name",'g4_r6');
                    $("#57").attr("name",'g5_r6');
                    $("#58").attr("name",'g3_r8');
                    $("#59").attr("name",'g4_r8');
                    $("#60").attr("name",'g5_r8');
                    $("#61").attr("name",'g3_r10');
                    $("#62").attr("name",'g4_r10');
                    $("#63").attr("name",'g5_r10');
                    break;
                default:
                    break;
            }
            break;
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
                    $("#28").attr("name",'g3_r4');
                    $("#29").attr("name",'g4_r4');
                    $("#30").attr("name",'g5_r4');
                    $("#31").attr("name",'g3_r6');
                    $("#32").attr("name",'g4_r6');
                    $("#33").attr("name",'g5_r6');
                    for (var a=1; a<28; a++) {
                        $("#"+a).removeAttr("name");
                    }
                    for (var i=34; i<68; i++) {
                        $("#"+i).removeAttr("name");
                    }

                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    $("#34").attr("name",'g3_r4');
                    $("#35").attr("name",'g4_r4');
                    $("#36").attr("name",'g5_r4');
                    $("#37").attr("name",'g3_r6');
                    $("#38").attr("name",'g4_r6');
                    $("#39").attr("name",'g5_r6');
                    $("#40").attr("name",'g3_r8');
                    $("#41").attr("name",'g4_r8');
                    $("#42").attr("name",'g5_r8');

                    break;
                case "UTAH":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#UTAH").addClass("show-div");

                    $("#43").attr("name",'g3_r4');
                    $("#44").attr("name",'g4_r4');
                    $("#45").attr("name",'g5_r4');
                    $("#46").attr("name",'g3_r8');
                    $("#47").attr("name",'g4_r8');
                    $("#48").attr("name",'g5_r8');
                    $("#49").attr("name",'g3_r11');
                    $("#50").attr("name",'g4_r11');
                    $("#51").attr("name",'g5_r11');
                    break;
                case "RASKIN":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#RASKIN").addClass("show-div");
                    $("#52").attr("name",'g3_r4');
                    $("#53").attr("name",'g4_r4');
                    $("#54").attr("name",'g5_r4');
                    $("#55").attr("name",'g3_r6');
                    $("#56").attr("name",'g4_r6');
                    $("#57").attr("name",'g5_r6');
                    $("#58").attr("name",'g3_r8');
                    $("#59").attr("name",'g4_r8');
                    $("#60").attr("name",'g5_r8');
                    $("#61").attr("name",'g3_r10');
                    $("#62").attr("name",'g4_r10');
                    $("#63").attr("name",'g5_r10');
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
                     $("#28").attr("name",'g3_r4');
                    $("#29").attr("name",'g4_r4');
                    $("#30").attr("name",'g5_r4');
                    $("#31").attr("name",'g3_r6');
                    $("#32").attr("name",'g4_r6');
                    $("#33").attr("name",'g5_r6');
                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    $("#34").attr("name",'g3_r4');
                    $("#35").attr("name",'g4_r4');
                    $("#36").attr("name",'g5_r4');
                    $("#37").attr("name",'g3_r6');
                    $("#38").attr("name",'g4_r6');
                    $("#39").attr("name",'g5_r6');
                    $("#40").attr("name",'g3_r8');
                    $("#41").attr("name",'g4_r8');
                    $("#42").attr("name",'g5_r8');
                    break;
                case "AFMGQT-V2-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_2R").addClass("show-div");
                     $("#1").attr("name",'g3_r4');
                    $("#2").attr("name",'g4_r4');
                    $("#3").attr("name",'g5_r4');
                    $("#4").attr("name",'g3_r5');
                    $("#5").attr("name",'g4_r5');
                    $("#6").attr("name",'g5_r5');
                    break;
                case "AFMGQT-V2-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_3R").addClass("show-div");
                    $("#7").attr("name",'g3_r4');
                    $("#8").attr("name",'g4_r4');
                    $("#9").attr("name",'g5_r4');
                    $("#10").attr("name",'g3_r5');
                    $("#11").attr("name",'g4_r5');
                    $("#12").attr("name",'g5_r5');
                    $("#13").attr("name",'g3_r7');
                    $("#14").attr("name",'g4_r7');
                    $("#15").attr("name",'g5_r7');
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
                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");
                    break;
                default:
                    break;
            }
            break;

            case "Reevaluación":
            //servicio
            switch (tecnicals) {
                //tecnicas
                case "AFMGQT-V1-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_2R").addClass("show-div");
                     $("#28").attr("name",'g3_r4');
                    $("#29").attr("name",'g4_r4');
                    $("#30").attr("name",'g5_r4');
                    $("#31").attr("name",'g3_r6');
                    $("#32").attr("name",'g4_r6');
                    $("#33").attr("name",'g5_r6');
                    break;
                case "AFMGQT-V1-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V1_3R").addClass("show-div");
                    $("#34").attr("name",'g3_r4');
                    $("#35").attr("name",'g4_r4');
                    $("#36").attr("name",'g5_r4');
                    $("#37").attr("name",'g3_r6');
                    $("#38").attr("name",'g4_r6');
                    $("#39").attr("name",'g5_r6');
                    $("#40").attr("name",'g3_r8');
                    $("#41").attr("name",'g4_r8');
                    $("#42").attr("name",'g5_r8');
                    break;
                case "AFMGQT-V2-2R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_2R").addClass("show-div");
                     $("#1").attr("name",'g3_r4');
                    $("#2").attr("name",'g4_r4');
                    $("#3").attr("name",'g5_r4');
                    $("#4").attr("name",'g3_r5');
                    $("#5").attr("name",'g4_r5');
                    $("#6").attr("name",'g5_r5');
                    break;
                case "AFMGQT-V2-3R":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#AFMGQT_V2_3R").addClass("show-div");
                    $("#7").attr("name",'g3_r4');
                    $("#8").attr("name",'g4_r4');
                    $("#9").attr("name",'g5_r4');
                    $("#10").attr("name",'g3_r5');
                    $("#11").attr("name",'g4_r5');
                    $("#12").attr("name",'g5_r5');
                    $("#13").attr("name",'g3_r7');
                    $("#14").attr("name",'g4_r7');
                    $("#15").attr("name",'g5_r7');
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
                    break;
                case "DLST":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#DLST").addClass("show-div");
                    break;
                    case "UTAH":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#UTAH").addClass("show-div");

                    $("#43").attr("name",'g3_r4');
                    $("#44").attr("name",'g4_r4');
                    $("#45").attr("name",'g5_r4');
                    $("#46").attr("name",'g3_r8');
                    $("#47").attr("name",'g4_r8');
                    $("#48").attr("name",'g5_r8');
                    $("#49").attr("name",'g3_r11');
                    $("#50").attr("name",'g4_r11');
                    $("#51").attr("name",'g5_r11');
                    break;
                case "RASKIN":
                    $(".hidden-div").attr("class","hidden-div");
                    $("#RASKIN").addClass("show-div");
                    $("#52").attr("name",'g3_r4');
                    $("#53").attr("name",'g4_r4');
                    $("#54").attr("name",'g5_r4');
                    $("#55").attr("name",'g3_r6');
                    $("#56").attr("name",'g4_r6');
                    $("#57").attr("name",'g5_r6');
                    $("#58").attr("name",'g3_r8');
                    $("#59").attr("name",'g4_r8');
                    $("#60").attr("name",'g5_r8');
                    $("#61").attr("name",'g3_r10');
                    $("#62").attr("name",'g4_r10');
                    $("#63").attr("name",'g5_r10');
                    break;
                default:
                    break;
            }
            break;
        default:
            break;
    }
});
