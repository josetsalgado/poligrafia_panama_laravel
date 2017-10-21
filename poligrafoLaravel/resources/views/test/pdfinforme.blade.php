<!DOCTYPE html>
<html>

<head>

    <title>PDF IPTC</title>

    <link href="css/style.css" rel="stylesheet">
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
</head>

<style type="text/css">

    .color_body{color: #73879C !important;}
    @page {header: page-header;footer: page-footer;}
    #padding_logo_top{padding-top: 10%;}
    #title_principal{font-size: 35px;}
    h3{ color: #73879C !important; font-weight: bold;  }
    .border_info{  border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px 5px; margin-bottom: 10px;border-top:2px solid #E6E9ED;padding-top: 15px; }
    .border_left{  position: absolute;  height: 65px;  border-right: 2px solid #ADB2B5;  margin-top: 5px; }
    .border_left_2{  position: absolute;  height: 50px;  border-right: 2px solid #ADB2B5;  margin-top: 4px;}

</style>

<body id="body_test">
{{--header--}}
<htmlpageheader name="page-header" class="thumbnail thumbnail_logo">
    <img src="images/header_poligrafo.png">
</htmlpageheader>
<div class="color_body" >
    <div class="">
        <div id="padding_logo_top" class="title_right">
            <h2 id="title_principal" class="color_body"><img src="images/title_ico.png"> Informe de Pueba</h2>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel x_title">
            <div class="x_content">
                <div class="row tile_count border_info">
                    <div class="col-xs-3 invoice-col tile_stats_count border_left">
                        <span class="count_top"><img src="images/user_ico.png"> Nombre del Evaluado</span>
                        <h3><b>Josthyn Smith</b></h3>
                    </div>
                    <div class="col-xs-2 tile_stats_count border_left">
                        <span class="count_top"><img src="images/user_ico.png"> Cédula</span>
                        <h3><b>8-920-631</b></h3>
                    </div>
                    <div class="col-xs-2  tile_stats_count border_left_2">
                        <span class="count_top"><img src="images/maletin_ico.png"> Cliente</span>
                        <h3><b>Felipe Mota</b></h3>
                    </div>
                    <div class="col-sm-3 tile_stats_count ">
                        <span class="count_top"><img src="images/calendario_ico.png"> Fecha</span>
                        <h3><b>27-07-2017</b></h3>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div>
                        <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_wrapper">
                                <h4 class="heading">Carol Jaramillo</h4>
                                <span aria-hidden="true"><b> Poligrafista</b></span>
                                <div class="ln_solid"></div>
                                <blockquote class="message">
                                    <div class="row">
                                        <div class="col-md-6"><b>Calificaciones con 3 Gráficas</b></div>
                                        <div class="col-md-6"><b>Calificaciones con 4 Gráficas</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">2</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                    </div>
                                </blockquote>
                                <br>
                                <div>
                                    <p> Observaciones:</b><br>
                                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay mv de dedos del eda
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_wrapper">
                                <h4 class="heading">Raul Abrego</h4>
                                <span aria-hidden="true"><b><i> Controlador</i></b></span>
                                <div class="ln_solid"></div>
                                <blockquote class="message">
                                    <div class="row">
                                        <div class="col-md-6"><b>Calificaciones con 3 Gráficas</b></div>
                                        <div class="col-md-6"><b>Calificaciones con 4 Gráficas</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">2</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                    </div>
                                </blockquote>
                                <br>
                                <div>
                                    <p> Observaciones:</b><br>
                                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay mv de dedos del eda
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_wrapper">
                                <h4 class="heading">John Doe</h4>
                                <span {{--class="fa fa-user-md"--}} aria-hidden="true"><b><i> Controlador</i></b></span>
                                <div class="ln_solid"></div>
                                <blockquote class="message">
                                    <div class="row">
                                        <div class="col-md-6"><b>Calificaciones con 3 Gráficas</b></div>
                                        <div class="col-md-6"><b>Calificaciones con 4 Gráficas</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">R4</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R7</a></div>
                                            <div class="col-md-2 bordertab"><a class="">R8</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">D2</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">2</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-5</a></div>
                                            <div class="col-md-2 bordertab"><a class="">-1</a></div>
                                            <div class="col-md-2 bordertab"><a class="">3</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                            <div class="col-md-2 bordertab"><a class="">0</a></div>
                                        </div>
                                    </div>
                                </blockquote>
                                <br>
                                <div>
                                    <p> Observaciones:</b><br>
                                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay mv de dedos del eda
                                    </p>
                                </div>
                            </div>
                        </li>


                </div>

            </div>
        </div>
    </div>
</div>
<htmlpagefooter name="page-footer" id="padding_space_footer" >
    <img src="images/footerpdf_poligrafo.png" style="padding-bottom: 10px">
</htmlpagefooter>

</body>
</html>