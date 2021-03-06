<!DOCTYPE html>
<html>

<head>

    <title>PDF IPTC</title>


    <!-- Datatables -->
    <link href="css/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="css/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
    <!-- bootstrap-progressbar -->
    <link href="css/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="css/switchery/dist/switchery.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery/dist/jquery.min.js"></script>
    <!--validate jquery-->
    <script src="js/validate/jquery.validate.js"></script>
    <!--alertify-->
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">

</head>

<style type="text/css">

    #subtitle{
        font-weight: bold; text-align: center;
    }
    .color_body{color: #73879C !important;}
    @page {header: page-header;footer: page-footer;}
    #padding_logo_top{padding-top: 10%;}
    #title_principal{font-size: 35px;}
    h3{ color: #73879C !important; font-weight: bold;  }
    .border_info{  border-bottom: 2px solid #E6E9ED;padding: 1px 5px 6px 5px; margin-bottom: 10px;border-top:2px solid #E6E9ED;padding-top: 15px; }
    .border_left{position: absolute;  height: 65px;  border-right: 2px solid #ADB2B5;  margin-top: 5px; }
    .border_left_2{position: absolute;  height: 50px;  border-right: 2px solid #ADB2B5;  margin-top: 4px;}

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
                    <div class="col-xs-3 invoice-col tile_stats_count ">
                        <span class="count_top"><img src="images/user_ico.png"> Nombre del Evaluado</span>
                        <h3><b>Josthyn Smith</b></h3>
                    </div>
                    <div class="col-xs-2 tile_stats_count ">
                        <span class="count_top"><img src="images/user_ico.png"> Cédula</span>
                        <h3><b>8-920-631</b></h3>
                    </div>
                    <div class="col-xs-2  tile_stats_count ">
                        <span class="count_top"><img src="images/maletin_ico.png"> Cliente</span>
                        <h3><b>Felipe Mota</b></h3>
                    </div>
                    <div class="col-sm-4 tile_stats_count ">
                        <span class="count_top"><img src="images/calendario_ico.png"> Fecha</span>
                        <h3><b style="padding-left: 5px">27-07-2017</b></h3>
                    </div>
                </div>
                <div class="ln_solid"></div>

                <div>
                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <img src="images/img.jpg" alt="" style="width: 55px; height: 45px">
                        </div>
                        <div class="col-xs-3">
                            <div>
                                <h4 class="" style="color:#73879C;font-weight: bold;">Carol Jaramillo</h4>
                            </div>
                            <div>
                                <span><b class="">Poligrafista</b></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="ln_solid"></div>

                <div class="col-xs-12">
                    <div class="">
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 3 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 4 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 5 Gráficas</b></div>
                    </div>
                    <br>
                    <!--Desde R4 A R8-->
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde R4 A R8-->

                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="15%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Desde D1 A D2-->
                <div class="col-xs-12">
                    <div class="col-xs-1">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                </div>
                <br>
                <div class="" role="alert">
                    <i><b><i class=""></i> Observaciones:</b><br>
                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay
                        mv de dedos del eda
                    </i>
                </div><br>
                <div>
                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <img src="images/img.jpg" alt="" style="width: 55px; height: 45px">
                        </div>
                        <div class="col-xs-3">
                            <div>
                                <h4 class="" style="color:#73879C;font-weight: bold;">Carol Jaramillo</h4>
                            </div>
                            <div>
                                <span><b class="">Controlador</b></span>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col-xs-12">
                    <div class="">
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 3 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 4 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 5 Gráficas</b></div>
                    </div>
                    <br>

                    <!--Desde R4 A R8-->
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde R4 A R8-->

                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="15%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Desde D1 A D2-->
                <div class="col-xs-12">
                    <div class="col-xs-1">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                </div>
                <br>
                <div class="" role="alert">
                    <i><b><i class=""></i> Observaciones:</b><br>
                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay
                        mv de dedos del eda
                    </i>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>><br><br>><br><br>
                <div>
                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <img src="images/img.jpg" alt="" style="width: 55px; height: 45px">
                        </div>
                        <div class="col-xs-3">
                            <div>
                                <h4 class="" style="color:#73879C;font-weight: bold;">Carol Jaramillo</h4>
                            </div>
                            <div>
                                <span><b class="">Controlador</b></span>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col-xs-12">
                    <div class="">
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 3 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 4 Gráficas</b></div>
                        <div class="col-xs-3" id="subtitle"><b>Calificaciones con 5 Gráficas</b></div>
                    </div>
                    <br>

                    <!--Desde R4 A R8-->
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde R4 A R8-->

                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="15%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-3">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>R4</th>
                                <th>R5</th>
                                <th>R7</th>
                                <th>R8</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>-0</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Desde D1 A D2-->
                <div class="col-xs-12">
                    <div class="col-xs-1">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                    <!--Desde D1 A D2-->
                    <div class="col-xs-1 col-xs-offset-2">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="33%">
                            <thead>
                            <tr>
                                <th>D1</th>
                                <th>D2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--FIN Desde D1 A D2-->
                </div>
                <br>
                <div class="" role="alert">
                    <i><b><i class=""></i> Observaciones:</b><br>
                        El eda marginal, cuando le daba instrucciones se reia, contramedida mental y tambíen hay
                        mv de dedos del eda
                    </i>
                </div>

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