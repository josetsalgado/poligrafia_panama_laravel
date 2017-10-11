@extends('layouts.default')
@section('content')


    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
        <div class="count">25</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-suitcase"></i> Total Clientes  </span>
        <div class="count">35</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-hospital-o"></i> Total Productos</span>
        <div class="count">8</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-calendar"></i> Citas Pendientes</span>
        <div class="count green">50</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-credit-card"></i> Total Pagos Pendientes</span>
        <div class="count">10</div>
      </div>
    </div>
    <!-- /top tiles -->
    <br />


    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile">
          <div class="x_title">
            <h4 class="dash_titulo">Citas del Día</h4>
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
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item One Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Three Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile overflow_hidden">
          <div class="x_title">
            <h4 class="dash_titulo">Citas Pendientes</h4>
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
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item One Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Two Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="media event">
              <a class="pull-left date">
                <p class="month">April</p>
                <p class="day">23</p>
              </a>
              <div class="media-body">
                <a class="title" href="#">Item Three Title</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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

@stop
