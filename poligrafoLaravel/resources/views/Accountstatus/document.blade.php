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

 td, th {

     height: 30px !important; padding-left: 5px;
 }

</style>

<body style="background:#fff; ">
<div class="">
    <div class="">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="col-xs-12 invoice-header">
                    <h1>
                        <i class="fa fa-globe"></i> IPTC
                    </h1>
                </div>
                <!-- /.col -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="font-weight: bold;"><strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong>
                            <br> <b> R.U.C. 1631480-1-671929 D.V. 62</b></span>
                <br>Edificio Edison Corporate Center, Piso 8 oficina 8A de la Torre A.
                <br>Tel. 279 08 06 y 279 08 04
                <br>PANAMA, REP. DE PANAMA<br><br>
            </div>
        </div>
    </div>
    <div class="">

        <div class="">

            <section class="content invoice">
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-xs-6 invoice-col">
                        <address>
                            <strong style="font-weight: bold;">COCA COLA</strong>
                            <br>1631480-1-671929 D.V. 62
                            <br>795 Freedom Ave, Suite 600, New York, CA 94107
                            <br>Phone: 1 (804) 123-9876
                            <br>Email: jon@ironadmin.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6 invoice-col pull-right">
                        <address class="pull-right" style="margin-left: 80px;">
                            <strong style="font-weight: bold;">Panamá a 14 de Septiembre del 2017</strong>
                            <br>
                            <br>
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h5 class="text-center"><b>ESTADO DE CUENTA</b></h5>
                    </div>
                </div>
                <!-- /.row -->

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
                                <td>8</td>
                                <td>Pruebas Pre empleo</td>
                                <td>B/.125.00</td>
                                <td>B/.1,200.00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Pruebas Especificas</td>
                                <td>B/.150.00</td>
                                <td>B/.1,200.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td ><b>DESCUENTO</b></td>
                                <td ><b>-B/.55.00</b></td>
                                <td><b>-B/.440.00</b></td>
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
                        <strong>Recibido por:</strong>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 col-xs-9 pull-right">
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
