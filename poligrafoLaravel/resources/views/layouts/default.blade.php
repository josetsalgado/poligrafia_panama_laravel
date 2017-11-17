<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IPTC</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


    <!-- Datatables -->
    <link href="css/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="css/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="css/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/build/css/custom.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="css/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="css/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- Switchery -->
    <link href="css/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- custom poligrafo css -->
    <link href="css/poligrafo/custom.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery/dist/jquery.min.js"></script>
    <!--validate jquery-->
    <script src="js/validate/jquery.validate.js"></script>
    <!--alertify-->
    <link rel="stylesheet" href="js/alertify/themes/alertify.core.css" />
    <link rel="stylesheet" href="js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />

    <!-- Datatables -->
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="js/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="js/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="js/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="js/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="js/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="js/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="js/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="js/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="js/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="js/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/min/moment.min.js"></script>
    <script src="js/bootstrap-daterangepicker/daterangepicker.js"></script>


</head>
<body class="nav-md">
    
<?php $rol = DB::table('users')->where('email','=',session()->all()['email'])->select('rol_id')->get()[0]; ?>

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="dashboard_home" class="site_title"><i class="fa fa-globe"></i> <span>IPTC</span></a>
                </div>

                <div class="clearfix"></div>
                <br>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Bienvenido</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="dashboard_home"><i class="fa fa-home"></i> Inicio</a>

                            </li>
                            @if($rol->rol_id == 1)
                                <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="create_user">Nuevo Usuario</a></li>
                                        <li><a href="show_user">Ver Usuarios</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-building"></i> Empresas <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="create_company">Nueva Empresa</a></li>
                                        <li><a href="show_company">Ver Empresas</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-suitcase"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="create_client">Nuevo Cliente</a></li>
                                        <li><a href="show_client">Ver Clientes</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-hospital-o"></i> Productos <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="create_product">Nuevo Producto</a></li>
                                        <li><a href="show_product">Ver Productos</a></li>
                                    </ul>
                                </li>
                                <li><a href="quotes_client"><i class="fa fa-calendar"></i> Citas</a></li>
                            @endif
                            @if($rol->rol_id == 1)
                                <li><a><i class="fa fa-money"></i> Cotizaciones <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="butget_client">Cotizar</a></li>
                                        <li><a href="butget_show">Ver Cotizaciones</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Estados de Cuenta<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="payment_record">Registrar Pago</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-line-chart"></i>Reportes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="account_report">Estados de cuenta</a></li>
                                        <li><a href="evaluations_report">Evaluaciones poligraficas</a></li>
                                    </ul>
                                </li>
                            @endif
                            <li><a><i class="fa fa-fax"></i> Prueba de Poligrafo <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="record_result">Registro de Resultados</a></li>
                                    <li><a href="quality_test">Control de Calidad</a></li>
                                    <li><a href="test_report">Verificacion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Editar perfil" href="edit_user">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Pantalla Completa">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Bloquear">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Salir" href="logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->

        <div class="top_nav">
            <div class="nav_menu">
                <nav id="top_nav">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                                <span class=" fa fa-caret-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="edit_user"><i class="fa fa-edit pull-right"></i> Editar Perfil</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">{{ Session::get('city') }} <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a class="cityO" value="panama" role="menuitem" tabindex="-1" ><b> PANAMA </b></a></li>
                                <li role="presentation"><a class="cityO" value="chiriqi" role="menuitem" tabindex="-1" ><b> CHIRIQUI </b></a></li>
                                <li role="presentation"><a class="cityO" value="david" role="menuitem" tabindex="-1" ><b> DAVID </b></a></li>
                                <li role="presentation"><a class="cityO" value="otros" role="menuitem" tabindex="-1" ><b> OTROS </b></a></li>
                            </ul>
                        </li>
                        @if($rol->rol_id == 1)
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-folder-open-o"></i>
                                <span id="totalhomework" class="badge bg-green">{{$totalHomework}}</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    @foreach($homeworks as $key => $homework)
                                    <li>
                                        <a href="homework">
                                            <span href="homework">
                                                <span>Tarea {{$key + 1}}</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">{{$homework->name_homework}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>


                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- content page -->
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right" style="text-align: center">
                    <img class="center-block" src="images/logofooter.png">
                    <p>Tecnología y Profesionalismo que trabajan por la verdad </p>
                    <p><b> Desarrollado por B&G Consulting and Technologies</b><p>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<script src="js/jszip/dist/jszip.min.js"></script>
<script src="js/pdfmake/build/pdfmake.min.js"></script>
<script src="js/pdfmake/build/vfs_fonts.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="js/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="js/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="js/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="js/skycons/skycons.js"></script>
<!-- Flot -->
<script src="js/Flot/jquery.flot.js"></script>
<script src="js/Flot/jquery.flot.pie.js"></script>
<script src="js/Flot/jquery.flot.time.js"></script>
<script src="js/Flot/jquery.flot.stack.js"></script>
<script src="js/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="js/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="js/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="js/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="js/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="js/jqvmap/dist/jquery.vmap.js"></script>
<script src="js/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="js/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="js/moment/min/moment.min.js"></script>
<script src="js/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/build/js/custom.min.js"></script>

<script src="js/fullcalendar/dist/fullcalendar.js"></script>
<script src='js/fullcalendar/lib/moment.min.js'></script>

<script src='js/fullcalendar/fullcalendar.min.js'></script>
<script src='js/fullcalendar/locale-all.js'></script>

<!-- Switchery -->
<script src="js/switchery/dist/switchery.min.js"></script>
<!--alertify-->
<script src="js/alertify/lib/alertify.min.js"></script>

<script>
    $(".cityO").click(function(data){
        $.ajax({
	        type: "GET",
	        url: "city/"+data.target.innerText,
                success: function (data) {
                    location.reload();
                }, error: function (err) {
                    console.log("error");
                }
        });
    });
</script>
</body>
</html>