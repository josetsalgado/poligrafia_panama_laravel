@extends('layouts.default')
@section('content')
<!-- page content -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile">
                    <div class="x_title">
                        <h4 class="dash_titulo"> <i class="fa fa-calendar-o"></i> TAREAS</span>
                        </h4>
                        <div class="pull-right col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                         <input type="text" name="birthdate" class="form-control has-feedback-left" value="10/24/1984" />
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="tdl-holder">
                            <h4 id="slopes"></h4><h4 id="performed"></h4>
                            <div class="tdl-content">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="click_check"><i></i>
                                            <span>Agendar Citas</span>
                                            <a href='#'><i class="fa fa-trash-o" class="click_check"></i></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"  checked class="click_check"><i></i>
                                            <span>Enviar Correos</span>
                                            <a href='#'><i class="fa fa-trash-o"></i></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="click_check"><i></i>
                                            <span>Agendar comprobante de pagos</span>
                                            <a href='#'><i class="fa fa-trash-o"></i></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" checked class="click_check"><i></i>
                                            <span>Llamar</span>
                                            <a href='#'><i class="fa fa-trash-o"></i></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><i></i>
                                            <span>Actualizar datos de empresa</span>
                                            <a href='#'><i class="fa fa-trash-o"></i></a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10"><input type="text" class="tdl-new" placeholder="Agregar nueva tarea y presionar 'Enter'..."></div>
                            <div class="col-md-2"><a href="#." class="btn btn-danger" id="btn-add"><i class="fa fa-plus-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>

        <!-- /page content -->

<script type="text/javascript">
    $( document ).ready(function() {
        count();
        $(".click_check").click(function(){
            count();
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

            $(".tdl-content ul").append("<li><label><input type='checkbox'><i></i><span>"+ v +"</span><a href='#'><i class='fa fa-trash-o'></i></a></label></li>");
        }
        function count(){
            var numberOfChecked = $('input:checkbox:checked').length;
            var totalCheckboxes = $('input:checkbox').length;
            var numberNotChecked = totalCheckboxes - numberOfChecked;

            //tareas realizadas
            $("#slopes").text("");
            $("#slopes").append("Tareas realizadas ("+numberOfChecked+") Tareas pendientes ("+numberNotChecked+")");

            //tareas pendientes

        }


        $(".tdl-content a").bind("click", function(){
            var _li = $(this).parent().parent("li");
            _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
                _li.remove();
            });
            return false;
        });


        $(".tdl-content").on('click', "a", function(){
            var _li = $(this).parent().parent("li");
            _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
                _li.remove();
            });
            return false;
        });


        $(function() {
            $('input[name="birthdate"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    "locale": {
                        "direction": "ltr",
                        "format": "MM/DD/YYYY",
                        "separator": " - ",
                        "applyLabel": "Aplicar",
                        "cancelLabel": "Cancelar",
                        "fromLabel": "From",
                        "toLabel": "To",
                        "customRangeLabel": "Personalizado",
                        "daysOfWeek": [
                            "Do",
                            "Lu",
                            "Ma",
                            "Mi",
                            "Ju",
                            "Vi",
                            "Sa"
                        ],
                        "monthNames": [
                            "Enero",
                            "Febrero",
                            "Marzo",
                            "Abril",
                            "Mayo",
                            "Junio",
                            "Julio",
                            "Agosto",
                            "Septiembre",
                            "Octubre",
                            "Noviembre",
                            "Diciembre"
                        ],
                        "firstDay": 1
                    },
                    "alwaysShowCalendars": true,
                    "startDate": "11/01/2017",
                },
                function(start, end, label) {
                    var years = moment().diff(start, 'years');
                });
        });
    });
</script>

@stop
