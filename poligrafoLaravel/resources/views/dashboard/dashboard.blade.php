@extends('layouts.default')
@section('content')

    <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
              <div class="count">{{ $totalUsers }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-suitcase"></i> Total Clientes  </span>
              <div class="count">{{ $totalClients }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-hospital-o"></i> Total Productos</span>
              <div class="count">{{ $totalServices }}</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar"></i> Citas Pendientes</span>
              <div class="count green">{{ $totalAppoimentPending }}</div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-credit-card"></i> Total Pagos Pendientes</span>
              <div class="count">4567</div>
            </div>
          </div>
          <!-- /top tiles -->
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h4 class="dash_titulo">Ultimas Citas Pendientes</h4>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @foreach($lastFivePendingAppointments as $lastFivePendingAppointment)
                        <article class="media event">
                          <a class="pull-left date">
                            <p class="month">
                                
                            </p>
                            <p class="day">23</p>
                          </a>
                          <div class="media-body">
                            <a class="title" href="#">{{ $lastFivePendingAppointment->name_patient }} {{ $lastFivePendingAppointment->last_name_patient }}</a>
                            <p><strong>Cedula:</strong> {{ $lastFivePendingAppointment->ci_patient }} <br><strong>Telefono:</strong> {{ $lastFivePendingAppointment->phone }}</p>
                          </div>
                        </article>
                    @endforeach
                  </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                  <h4 class="dash_titulo">Ultimas Citas Atendidas</h4>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @foreach($lastFiveApprovedAppointments as $lastFiveApprovedAppointment)
                        <article class="media event">
                          <a class="pull-left date">
                            <p class="month">April</p>
                            <p class="day">23</p>
                          </a>
                          <div class="media-body">
                            <a class="title" href="#">{{ $lastFiveApprovedAppointment->name_patient }} {{ $lastFiveApprovedAppointment->last_name_patient }}</a>
                            <p><strong>Cedula:</strong> {{ $lastFiveApprovedAppointment->ci_patient }} <br><strong>Telefono:</strong> {{ $lastFiveApprovedAppointment->phone }}</p>
                          </div>
                        </article>
                    @endforeach
                  </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h4 class="dash_titulo">Ultimos Clientes</h4>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                        @foreach($lastFiveClients as $lastFiveClient)
                            <li class="media event">
                              <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                              </a>
                              <div class="media-body">
                                <a class="title" href="#">{{ $lastFiveClient->name_client }} </a>
                                <p><strong>Telefono: </strong> {{ $lastFiveClient->tel_client }} </p>
                                <p> <small>{{ $lastFiveClient->email_client }}</small>
                                </p>
                              </div>
                            </li>
                        @endforeach
                    </ul>
              </div>
            </div>

          </div>


@stop
