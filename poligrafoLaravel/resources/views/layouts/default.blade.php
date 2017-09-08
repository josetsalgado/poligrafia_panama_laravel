<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPTC</title>

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
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>IPTC</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Bienvenido</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a><i class="fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="crear_usuario.html">Nuevo Usuario</a></li>
                                            <li><a href="show_user">Ver Usuarios</a></li>
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
                                    <li><a href="quotes_client"><i class="fa fa-calendar"></i> Citas</span></a>
                                    </li>
                                    </li>
                                    <li><a><i class="fa fa-money"></i> Cotizaciones <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="butget_client">Cotizar</a></li>
                                            <li><a href="show_budget">Ver Cotizaciones</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="show_accountstatus"><i class="fa fa-bar-chart-o"></i> Estados de Cuenta</span></a>
                                    </li>
                                    <li><a><i class="fa fa-fax"></i> Prueba de Poligrafo <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/create_result">Registro de Resultados</a></li>
                                            <li><a href="calidad_prueba.html">Registro de Calidad de Prueba</a></li>
                                            <li><a href="informe_prueba.html">Informe de Prueba</a></li>
                                    </li>
                                </ul>
                                </li>
                                <li><a><i class="fa fa-line-chart"></i>Reportes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                        <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/img.jpg" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
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
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>


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
        <script src='js/fullcalendar/dist/lang-all.js'></script>
        <script src='js/fullcalendar/lib/moment.min.js'></script>

        <!--
        el que explota
        <script src='../vendors/fullcalendar/lib/jquery.min.js'></script> -->
        <script src='js/fullcalendar/fullcalendar.min.js'></script>
        <script src='js/fullcalendar/locale-all.js'></script>

        <!-- Switchery -->
        <script src="js/switchery/dist/switchery.min.js"></script>
    </body>
</html>