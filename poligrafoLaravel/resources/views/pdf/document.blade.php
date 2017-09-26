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

<body>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Estado de Cuenta</h2>

                </div>
                <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12 invoice-header">
                            <h1>
                                <i class="fa fa-globe"></i> IPTC
                                <small class="pull-right">Fecha: 16/08/2017</small>
                            </h1>
                        </div>
                        <!-- /.col -->
                    </div>

                {{--   <div style="text-align: center; line-height: 24px; ">
                     Panamá a 14 de Septiembre del 2017
                      ATENCION: Licdo. Luis Perez
                      COCA COLA

                      ¿Quiénes Somos?

                      Somos una empresa con más de  20 años de experiencia en todo el ámbito de la poligrafía, tenemos oficinas en la Ciudad de Panamá, Provincias Centrales y Chiriquí.
                      Realizamos evaluaciones poligráficas con la más alta calidad y profesionalismo, todos nuestros poligrafista son Psicólogos.
                      Somos la única empresa privada en Panamá,  que realiza proceso de control de calidad en todos sus procesos.
                      Contamos con una escuela de poligrafistas la cual está acreditada internacionalmente por la APA (AMERICAN POLYGRAPH ASSOCIATION), nuestro director es ex presidente de la APA y nuestra escuela a entrenado a la unidad de poligrafía de diversas instituciones gubernamentales en diferentes pises de Latinoamérica, desde México, hasta Argentina y en nuestro país, participó en el entrenamiento de las unidades de poligrafía de: La Policía Nacional, el Senan, Senafrond, Dirección de Migración entre otros.
                      Somos distribuidores exclusivos de equipos poligráficos computarizados Lafayette en Panamá.

                      ¿Por qué utilizar el polígrafo?
                      El Polígrafo es utilizado mundialmente por gobiernos federales y sus diversas instituciones, servicios de inteligencia, instituciones militares, policía, agencias de investigación, así como seguimiento para procesos de libertad condicional. Los gobiernos ponen su confianza en esta herramienta científica, por su gran utilidad en la toma de decisiones.
                    </div><br><br>--}}
                    <!-- info row -->
                    <div class="row invoice-info" style="font-size: 8px">
                        <div class="col-xs-4 invoice-col">
                            <address>
                                <strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong>
                                <br>Edificio Edison Corporate Center
                                <br>Piso 8 oficina 8A de la Torre A.
                                <br>Tel. 279 08 06 y 279 08 04
                                <br>PANAMA, REP. DE PANAMA
                                <br>www.poligrafia.com.pa
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4 invoice-col">
                            <address>
                                <strong>John Doe</strong>
                                <br>795 Freedom Ave, Suite 600
                                <br>New York, CA 94107
                                <br>Phone: 1 (804) 123-9876
                                <br>Email: jon@ironadmin.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4 invoice-col">
                            <b>Factura Fiscal #007612</b>
                            <br>
                            <b>Monto Facturado: 5.000 $</b>
                            <br>
                            <b>Monto Pagado: 5.000 $</b>
                            <br>
                            <b>Forma de Pago:  Cheque 2674</b>
                            <br> <br> <br>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th># </th>
                                    <th>Fecha </th>
                                    <th>Cantidad</th>
                                    <th>Producto</th>

                                    <th>Precio Unitario</th>
                                    <th>Sub Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#31567</td>
                                    <td>20/08/2017</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>$53.05</td>
                                    <td>$534.25</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>23/08/2017</td>
                                    <td>31</td>
                                    <td>Prueba Pre Empleo</td>
                                    <td>$42.56</td>
                                    <td>$425.66</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>25/08/2017</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>$53.05</td>
                                    <td>$534.25</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>27/08/2017</td>
                                    <td>31</td>
                                    <td>Prueba Pre Empleo</td>
                                    <td>$42.56</td>
                                    <td>$425.66</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>30/08/2017</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>$53.05</td>
                                    <td>$534.25</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <!-- <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Cantidad a Pagar 16/09/2017</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$2450.30</td>
                                    </tr>
                                    <tr>
                                        <th>IVA (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                </section>
            </div>
        </div>
    </div>


</body>





</html>
