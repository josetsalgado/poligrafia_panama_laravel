@extends('layouts.default')
@section('content')



  <!-- page content -->

  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-hospital-o"></i> Llegaron a cita</span>
      <div class="count">8</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-hospital-o"></i> Pruebas Realizadas</span>
      <div class="count">8</div>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-hospital-o"></i> Pruebas NO Realizadas</span>
      <div class="count">8</div>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <a href="payment_record">
        <span class="count_top"><i class="fa fa-credit-card"></i> Total Pagos Pendientes</span>
        <div class="count">10</div>
      </a>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
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
          <h4 class="dash_titulo"> <i class="fa fa-calendar-o"></i> Viernes 13 Octubre 2017</span>
          </h4>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:00</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:00</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Copa<br>
                Daisy Aryelis Latorraca Cedeño</a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-863-1742    </b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Proluxsa<br>
                Edwards Arrocha </a>
              <span class="time pull-right"><b>RE-AGENDADO</b></span>
              <p><b>8-838-64</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">9:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">10:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">11:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">11:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel tile overflow_hidden">
        <div class="x_title">
          <h4 class="dash_titulo"><i class="fa fa-calendar"></i> Sabado 14 Octubre 2017</h4>
          <ul class="nav navbar-right panel_toolbox">
            <li>
              <div class="btn-group">
                <button class="btn btn-info" type="button"><i class="fa fa-chevron-left"></i></button>
                <button class="btn btn-info" type="button"><i class="fa fa-chevron-right"></i></button>
              </div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:00</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br> Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:00</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Copa<br>  Daisy Aryelis Latorraca Cedeño</a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-863-1742</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">7:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Proluxsa<br>
                Edwards Arrocha </a>
              <span class="time pull-right"><b>RE-AGENDADO</b></span>
              <p><b>8-838-64</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">9:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">Am</p>
              <p class="day">7:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br>
                Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">11:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br> Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
          <article class="media event"  id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit">
            <a class="pull-left date">
              <p class="month">AM</p>
              <p class="day">11:30</p>
            </a>
            <div class="media-body">
              <a class="title" href="#">Bienes Raíces Ágora, S.A<br> Lisbet Del Carmen Garcia Vivas </a>
              <span class="time pull-right"><b>NO ASISTIÓ</b></span>
              <p><b>8-884-505</b></p>
            </div>
          </article>
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
            <form id="antoform" class="form-horizontal calender" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label">Empresa</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="empresa" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="empresa">Empresa 1</option>
                    <option value="empresa">Empresa 2</option>
                    <option value="empresa">Empresa 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Cliente</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="heard" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="cliente">Cliente 1</option>
                    <option value="cliente">Cliente 2</option>
                    <option value="cliente">Cliente 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Horaio</label>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <select id="heard" class="form-control col-xs-12" required="">
                    <option>7:00</option>
                    <option>7:30</option>
                    <option>8:00</option>
                    <option>8:30</option>
                    <option>9:00</option>
                    <option>9:30</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>11:30</option>
                    <option>12:00</option>
                    <option>12:30</option>
                    <option>1:00</option>
                    <option>1:30</option>
                    <option>2:00</option>
                    <option>2:30</option>
                    <option>3:00</option>
                    <option>3:30</option>
                    <option>4:00</option>
                    <option>4:30</option>
                    <option>5:00</option>
                    <option>5:30</option>
                    <option>6:00</option>
                    <option>6:30</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tipo de Prueba</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="prueba" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="prueba-pre-empleo">Prueba Pre Empleo</option>
                    <option value="prueba-permanencia">Prueba Permanencia</option>
                    <option value="prueba-especifica">Prueba Especifica</option>
                    <option value="pruebas-psicologicas">Pruebas Psicologícas</option>
                    <option value="pruebas-socioeconomicas">Pruebas Socioeconómicas</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Estatus</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="inputSuccess4" placeholder="Pendiente"  disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <h4><i class="fa fa-user"></i> Candidato</h4>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="candidato" name="candidato">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="cedula" name="cedula">
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="puesto" name="puesto">
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-3 control-label col-xs-12">Celular</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="celular" name="celular">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                <div class="col-sm-9 col-xs-12">
                  <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary antosubmit">Guardar Cita</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal editar -->
  <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-edit"></i> Editar cita</h4>
        </div>
        <div class="modal-body">

          <div id="testmodal2" style="padding: 5px 20px;">
            <form id="antoform2" class="form-horizontal calender" role="form">
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Poligrafista</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" required="">
                    <option value="">Seleccione</option>
                    <option value="poligrafista">Poligrafista 1</option>
                    <option value="poligrafista">Poligrafista 2</option>
                    <option value="poligrafista">Poligrafista 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Empresa</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="empresa" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="empresa">Empresa 1</option>
                    <option value="empresa">Empresa 2</option>
                    <option value="empresa">Empresa 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Cliente</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="heard" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="empresa">Cliente 1</option>
                    <option value="cliente">Cliente 2</option>
                    <option value="cliente">Cliente 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Horaio</label>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <select id="heard" class="form-control col-xs-12" required="">
                    <option>7:00</option>
                    <option>7:30</option>
                    <option>8:00</option>
                    <option>8:30</option>
                    <option>9:00</option>
                    <option>9:30</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>11:30</option>
                    <option>12:00</option>
                    <option>12:30</option>
                    <option>1:00</option>
                    <option>1:30</option>
                    <option>2:00</option>
                    <option>2:30</option>
                    <option>3:00</option>
                    <option>3:30</option>
                    <option>4:00</option>
                    <option>4:30</option>
                    <option>5:00</option>
                    <option>5:30</option>
                    <option>6:00</option>
                    <option>6:30</option>
                  </select>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Llegada</label>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <select id="heard" class="form-control col-xs-12" required="">
                    <option>7:00</option>
                    <option>7:30</option>
                    <option>8:00</option>
                    <option>8:30</option>
                    <option>9:00</option>
                    <option>9:30</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>11:30</option>
                    <option>12:00</option>
                    <option>12:30</option>
                    <option>1:00</option>
                    <option>1:30</option>
                    <option>2:00</option>
                    <option>2:30</option>
                    <option>3:00</option>
                    <option>3:30</option>
                    <option>4:00</option>
                    <option>4:30</option>
                    <option>5:00</option>
                    <option>5:30</option>
                    <option>6:00</option>
                    <option>6:30</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tipo de Prueba</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="prueba" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="prueba-pre-empleo">Prueba Pre Empleo</option>
                    <option value="prueba-permanencia">Prueba Permanencia</option>
                    <option value="prueba-especifica">Prueba Especifica</option>
                    <option value="pruebas-psicologicas">Pruebas Psicologícas</option>
                    <option value="pruebas-socioeconomicas">Pruebas Socioeconómicas</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Estatus</label>
                <div class="col-sm-9 col-xs-12">
                  <select id="prueba" class="form-control col-xs-12" required="">
                    <option value="">Seleccione</option>
                    <option value="no-asistio">No asistio</option>
                    <option value="re-agendada">Re-agendada</option>
                    <option value="procesada">Procesada</option>
                    <option value="aprobada">Aprobada</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <h4><i class="fa fa-user"></i> Candidato</h4>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="candidato" name="candidato">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="cedula" name="cedula">
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="puesto" name="puesto">
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-3 control-label col-xs-12">Celular</label>
                <div class="col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="celular" name="celular">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                <div class="col-sm-9 col-xs-12">
                  <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary antosubmit2">Guardar Cita</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

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
@stop
