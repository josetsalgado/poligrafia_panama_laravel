@extends('layouts.default')
@section('content')
<!-- page content -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile">
                    <div class="x_title">
                        <h4 class="dash_titulo"> <i class="fa fa-calendar-o"></i> TAREAS
                            <?php
                            setlocale(LC_ALL,"es_ES");
                            echo strftime("%A") ." ".date("j") ." ". strftime("%B")." ".date("Y");
                            ?>
                            </span> 
                        </h4>
                        <div class="pull-right col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                         <input type="text" name="birthdate" class="form-control has-feedback-left" value="10/24/1984" />
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="tdl-holder">
                        <form id="homework_update" name="homework_update">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <h4 id="slopes"></h4><h4 id="performed"></h4>
                            <div id="load_update_homework" class="tdl-content">
                                <ul>
                                @foreach($homeworks as $key => $homework)
                                    <li>
                                        <label>
                                            <input type="checkbox" id="{{$homework->id_homework}}" name="{{$homework->id_homework}}" class="click_check" value="{{$homework->status_homework}}"><i></i>
                                            <span>{{$homework->name_homework}}</span>
                                            <a href='#' name="delete" value="{{ $homework->id_homework }}" onclick="fnDelete('{{ $homework->id_homework }}')"><i class="fa fa-trash-o" class="click_check"></i></a>
                                        </label>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            </form>
                            <form id="createHomework" name="createHomework"> 
                               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                               <input type="hidden" id="userCreate" name="userCreate" value="{{Auth::user()->name}}">
                               <div class="col-md-10 btn-border-tarea"><input type="text" class="tdl-new" name="add_homework" placeholder="Nueva tarea"></div>
                               <div class="col-md-2 btn-border-tarea">
                                <input class="btn btn-danger btn-add" type="submit" value="Agregar"/>

                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
          </div>

        <!-- /page content -->
  <script src="js/validate/fn-createHomework.js"></script>
  <script src="js/validate/fn-updateHomework.js"></script>
  <script src="js/validate/fn-deleteHomework.js"></script>
<script>
    
      //Calendario
      $(function() {
            $('input[name="birthdate"]').daterangepicker({
                  singleDatePicker: true,
                  showDropdowns: true,
                  "locale": {
                        "direction": "ltr",
                        "format": "DD/MM/YYYY",
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
      
</script>

@stop
