@extends('layouts.default')
@section('content')



  <!-- page content -->

    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-calendar"></i> Total Citados</span>
        <div class="count">{{ $totalCitedToday }}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users"></i> Llegaron a cita</span>
        <div class="count">{{ $totalCitedTodayArrived }}</div>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
        <a href="payment_record">
          <span class="count_top"><i class="fa fa-credit-card"></i> Total Pagos Pendientes</span>
          <div class="count">10</div>
        </a>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-6 tile_stats_count">
        <a href="payment_record">
          <span class="count_top"><i class="fa fa-calendar"></i> Pagos Vencidos</span>
          <div class="count green">50</div>
        </a>
      </div>
    </div>
    <!-- /top tiles -->
    <br />


    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile">
          <div class="x_title">
            <h4 class="dash_titulo"> <i class="fa fa-calendar-o"></i> 
                <?php
                    setlocale(LC_ALL,"es_ES");
                    echo strftime("%A") ." ".date("j") ." ". strftime("%B")." ".date("Y");
                ?>
            </h4>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
                @foreach($lastAppointments as $lastAppointment)
                    <article class="media event" id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit" onclick="editQuote({{ $lastAppointment->id_appoiment }})" >
                        <a class="pull-left date" >
                            <?php 
                                $date = new DateTime($lastAppointment->time_appoiment);
                                if((intval($date->format('H')) >=  7 ) && (intval($date->format('H')) <  12 )){
                                    echo '<p class="month">AM</p>';
                                }else{
                                    echo '<p class="month">PM</p>';
                                }
                                echo '<p class="day">'.$date->format('H:i').'</p>';      
                            ?>  
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $lastAppointment->name_company or '' }}<br>
                          {{ $lastAppointment->name_patient or '' }} {{ $lastAppointment->last_name_patient or '' }} </a>
                        <span class="time pull-right"><b>{{ $lastAppointment->status or '' }}</b></span>
                        <p><b>{{ $lastAppointment->phone or '' }}</b></p>
                      </div>
                    </article>
                @endforeach
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile overflow_hidden">
          <div class="x_title">
            <h4 class="dash_titulo"><i class="fa fa-calendar"></i>
                <?php
                    setlocale(LC_ALL,"es_ES");
                     echo strftime("%A",strtotime("+1 day")) ." ".date("d",strtotime("+1 day"))." ". strftime("%B",strtotime("+1 day"))." ".date("Y",strtotime("+1 day"));
                ?>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                  {!! $tomorrowAppointments->render() !!}
                <!-- div class="btn-group">
                  <button class="btn btn-info btn-color" type="button"><i class="fa fa-chevron-left"></i></button>
                  <button class="btn btn-info btn-color" type="button"><i class="fa fa-chevron-right"></i></button>
                </div -->
              </li>
            </ul></h4>
            <div class="clearfix"></div>

          </div>
          <div class="x_content">
                @foreach($tomorrowAppointments as $tomorrowAppointment)
                    <!--<article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">-->
                    <article class="media event" id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit" onclick="editQuote({{ $tomorrowAppointment->id_appoiment }})">
                        <a class="pull-left date" >
                            <?php 
                                $date = new DateTime($lastAppointment->time_appoiment);
                                if((intval($date->format('H')) >=  7 ) && (intval($date->format('H')) <  12 )){
                                    echo '<p class="month">AM</p>';
                                }else{
                                    echo '<p class="month">PM</p>';
                                }
                                echo '<p class="day">'.$date->format('H:i').'</p>';      
                            ?>  
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">{{ $tomorrowAppointment->name_company or '' }}<br>
                          {{ $tomorrowAppointment->name_patient or '' }} {{ $tomorrowAppointment->last_name_patient or '' }} </a>
                        <span class="time pull-right"><b>{{ $tomorrowAppointment->status or '' }}</b></span>
                        <p><b>{{ $tomorrowAppointment->phone or '' }}</b></p>
                      </div>
                    </article>
                @endforeach
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="floaty" >
        <div class="floaty-btn" id="fc_create" data-toggle="modal" data-target="#CalenderModalNew">
                    <span class="floaty-btn-label">
                        <i>Citar a Prueba</i>
                    </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="floaty-btn-icon floaty-btn-icon-plus absolute-center">
            <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" fill="#fff"/>
            <path d="M0 0h24v24h-24z" fill="none"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="floaty-btn-icon floaty-btn-icon-create absolute-center">
            <path d="M3 17.25v3.75h3.75l11.06-11.06-3.75-3.75-11.06 11.06zm17.71-10.21c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" fill="#fff"/>
            <path d="M0 0h24v24h-24z" fill="none"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

  <!-- /page content -->
  <!-- calendar modal -->
  <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Nueva Citas</h4>
              </div>
              <div class="modal-body">
                  <div id="testmodal" style="padding: 5px 20px;">
                      <form id="createQuote" name="createQuote" class="form-horizontal calender" role="form">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Empresa</label>
                              <div class="col-sm-9 col-xs-12">
                                  <select id="empresa" name="empresa" class="form-control col-xs-12">
                                      <option value="">Seleccione</option>
                                      @foreach($companys as $company)
                                      <option value="{{ $company->id_company }}">{{ $company->name_company }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Cliente</label>
                              <div class="col-sm-9 col-xs-12">
                                  <select id="client" name="client" class="form-control col-xs-12">
                                      <option value="">Seleccione</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Horario</label>
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                  <select name="schedule" id="schedule" class="form-control col-xs-12">
                                      <option value="7:00">7:00</option>
                                      <option value="7:30">7:30</option>
                                      <option value="8:00">8:00</option>
                                      <option value="8:30">8:30</option>
                                      <option value="9:00">9:00</option>
                                      <option value="9:30">9:30</option>
                                      <option value="10:00">10:00</option>
                                      <option value="11:00">11:00</option>
                                      <option value="11:30">11:30</option>
                                      <option value="12:00">12:00</option>
                                      <option value="12:30">12:30</option>
                                      <option value="1:00">1:00</option>
                                      <option value="1:30">1:30</option>
                                      <option value="2:00">2:00</option>
                                      <option value="2:30">2:30</option>
                                      <option value="3:00">3:00</option>
                                      <option value="3:30">3:30</option>
                                      <option value="4:00">4:00</option>
                                      <option value="4:30">4:30</option>
                                      <option value="5:00">5:00</option>
                                      <option value="5:30">5:30</option>
                                      <option value="6:00">6:00</option>
                                      <option value="6:30">6:30</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Tipo de Prueba</label>
                              <div class="col-sm-9 col-xs-12">
                                  <select id="service" name="service" class="form-control col-xs-12">
                                      <option value="">Seleccione</option>
                                      @foreach($services as $service)
                                      <option value="{{ $service->id_service }}">{{ $service->name_service }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Estatus</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" name="status" id="status" placeholder="Pendiente"  disabled="disabled">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Ciudad</label>
                              <div class="col-sm-9 col-xs-12">
                                  <select id="city"  name="city" class="form-control col-xs-12" >
                                      <option value="">Seleccione</option>
                                      <option value="PANAMA">PANAMA</option>
                                      <option value="CHIRIQUI">CHIRIQUI</option>
                                      <option value="DAVID">DAVID</option>
                                      <option value="OTROS">OTROS</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <h4><i class="fa fa-user"></i> Candidato</h4>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="candidateName" name="candidateName">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="candidateLastname" name="candidateLastname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="number" class="form-control" id="ciCandidate" name="ciCandidate">
                              </div>
                          </div>
                          <div class="form-group">

                              <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="jobCandidate" name="jobCandidate">
                              </div>
                          </div>
                          <div class="form-group">

                              <label class="col-sm-3 control-label col-xs-12">Celular</label>
                              <div class="col-sm-9 col-xs-12">
                                  <input type="number" class="form-control" id="telCandidate" name="telCandidate">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                              <div class="col-sm-9 col-xs-12">
                                  <textarea class="form-control" style="height:55px;" id="descriptionCandidate" name="descriptionCandidate"></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary antosubmit">Guardar Cita</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
  </div>
  
    <!-- Modal edit-->
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
    <!-- /. modal -->
    
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
<script>
        $('#myModal').on('shown.bs.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
  <script type="text/javascript">
      var $floaty = $('.floaty');

      $floaty.on('mouseover', function(e) {
          $floaty.addClass('is-active');
          e.stopPropagation();
      });

      $floaty.on('mouseout', function() {
          $floaty.removeClass('is-active');
      });
  </script>
  <script type="text/javascript">
      (function(){
          // Variables
          var lista = document.getElementById("lista"),
              tareaInput = document.getElementById("tareaInput"),
              btnNuevaTarea = document.getElementById("btn-agregar");

          // Funciones
          var agregarTarea = function(){
              var tarea = tareaInput.value,
                  nuevaTarea = document.createElement("li"),
                  enlace = document.createElement("a"),
                  contenido = document.createTextNode(tarea);

              if (tarea === "") {
                  tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
                  tareaInput.className = "error";
                  return false;
              }

              // Agregamos el contenido al enlace
              enlace.appendChild(contenido);
              // Le establecemos un atributo href
              enlace.setAttribute("href", "#");
              // Agrergamos el enlace (a) a la nueva tarea (li)
              nuevaTarea.appendChild(enlace);
              // Agregamos la nueva tarea a la lista
              lista.appendChild(nuevaTarea);

              tareaInput.value = "";

              for (var i = 0; i <= lista.children.length -1; i++) {
                  lista.children[i].addEventListener("click", function(){
                      this.parentNode.removeChild(this);
                  });
              }

          };
          var comprobarInput = function(){
              tareaInput.className = "";
              teareaInput.setAttribute("placeholder", "Agrega tu tarea");
          };

          var eleminarTarea = function(){
              this.parentNode.removeChild(this);
          };

          // Eventos

          // Agregar Tarea
          btnNuevaTarea.addEventListener("click", agregarTarea);

          // Comprobar Input
          tareaInput.addEventListener("click", comprobarInput);

          // Borrando Elementos de la lista
          for (var i = 0; i <= lista.children.length -1; i++) {
              lista.children[i].addEventListener("click", eleminarTarea);
          }
      }());
  </script>
  
  <script src="js/validate/fn-createAppoimentDashboard.js"></script>
@stop
