<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
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
</head>

<style type="text/css">

 td, th {height: 30px !important; padding-left: 5px;  }
 #space_top{padding-top: 8px;padding-bottom: 15px; }
 #bold{  font-weight: bold  }

</style>

<body style="background:#fff; ">
<div class="">
    <div class="modal-header">

        <div class="row">

            <div class="col-xs-6  text-center">
                <br>
                <h4 id="bold">INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</h4><br>
                <h5 id="bold">ESTADO DE CUENTA</h5>
            </div>
            <div class="col-md-6 col-md-3">
                <div class="col-xs-12 invoice-header fact-border">
                    <p>
                        Edificio Edison Corporate Center
                        <br>Piso 8 oficina 8A de la Torre A
                        <br>TEl. 279 08 06 / 279 08 04
                        <br>PANAMA REP. DE PANAMA
                    </p>
                    <h5 class="text-danger" id="bold">DOCUMENTO NO FISCAL</h5>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <div class="">
        <div class="">

            <section class="content invoice">
                <div class="row">
                    <div class="col-xs-12 table">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td>Nombre:</td>
                                <td ><p>Gaming & Services de Panamá  </p>
                                    <br>
                                </td>
                                <td id="bold" style="border-bottom: none; border-top: none !important;">14 de Noviembre del 2017</td>
                            </tr>
                            <tr>
                                <td>Dirección:</td>
                                <td ><p>Calle 50 y 73 este San Francisco</p></td>
                            </tr>
                            <tr>
                                <td>País:</td>
                                <td ><p>Panamá</p></td>
                            </tr>
                            <tr>
                                <td>Teléfono</td>
                                <td ><p>270-8766</p></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                {{--<!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-2 invoice-col table_estado_cuenta">
                        <ul>
                            <li>Nombre:</li>
                            <li>Dirección:</li>
                            <li>País:</li>
                            <li>Teléfono</li>
                        </ul>
                    </div>
                    <div class="col-sm-7 invoice-col table_estado_cuenta">
                        <ul>
                            <li>Gaming & Services de Panamá  </li>
                            <li>Calle 50 y 73 este San Francisco</li>
                            <li>Panamá</li>
                            <li>270-8766</li>
                        </ul>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 invoice-col">
                        <ul>
                            <li> <strong>14 de Noviembre del 2017</strong></li>
                        </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->--}}


                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table">
                        <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>EVALUACION POLIGRÁFICA </th>
                                <th>COSTO UNITARIO</th>
                                <th>VALOR TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3</td>
                                <td id="space_top"><p id="bold">Pruebas Pre empleo</p>
                                    <br>
                                    <ul>
                                        <li>Angel Mario Ruiz Saenz</li>
                                        <li>Alexis Antonio Cruz</li>
                                        <li>Alexander Gonzales Rodriguez</li>
                                    </ul>
                                </td>
                                <td>B/.125.00</td>
                                <td>B/.375.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td id="space_top"><p id="bold">Pruebas Especificas</p>
                                    <br>
                                    <ul>
                                        <li>Sara Peña</li>
                                        <li>Oscar Solano</li>
                                    </ul>
                                </td>
                                <td>B/.150.00</td>
                                <td>B/.62.50</td>
                            </tr>
                            <tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-sm-3 col-xs-12">
                        <p id="bold">Recibido por:</p>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6 pull-right">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th id="style_pdf_table">SUBTOTAL </th>
                                <td>B/.760.00</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>ITBM (7%)</th>
                                <td>EXCENTO</td>
                            </tr>
                            <tr>
                                <th>TOTAL</th>
                                <td>B/.760.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
        </div>
        <!-- /content modal -->
    </div>

</div>


</body>





</html>
