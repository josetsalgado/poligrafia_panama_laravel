@extends('layouts.default')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-money"></i> Estado de Cuenta</h2>
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
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-6 invoice-header">
                            <h1> <i class="fa fa-globe"></i> IPTC </h1>
                        </div>
                        <div class="col-xs-6 invoice-header">
                            <h4> <small class="pull-right"><strong>Fecha: 16/08/2017</strong></small></h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 col-xs-12 invoice-col">
                            <address>
                                <strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong>
                                <br>Edificio Edison Corporate Center
                                <br>Piso 8 oficina 8A de la Torre A.
                                <br>Tel. 279 08 06 y 279 08 04
                                <br>PANAMA, REP. DE PANAMA
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 col-xs-12 invoice-col">
                            <address>
                                <strong>ADOC DE PANAMA S.A.</strong>
                                <br>2236582-1-778933 D.V 92
                                <br>Multiplaza
                                <br>Panamá
                                <br>Telefono: 366-5100 / 366-5112/13
                                <br>Correo: jon@ironadmin.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 col-xs-12 invoice-col">
                            <b>Factura Fiscal: TBSR110000623-00003021</b>
                            <br>
                            <br>
                            <b>Monto Facturado: 5.000 $</b>
                            <br>
                            <b>Monto Pagado: 5.000 $</b>
                            <br>
                            <b>Forma de Pago:  Cheque 2674</b>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                            <td>Pruebas Pre empleo</td>
                            <td>B/.125.00</td>
                            <td>B/.375.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pruebas Especificas</td>
                            <td>B/.31.25</td>
                            <td>B/.62.50</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <span><i>Observaciones:</i></span>
                            <p class="text-muted well well-sm no-shadow">
                                Pagaron 50% el 28 julio 2017 con cheque 1182 <br>
                                Pagaron el otro 50% el 14 septimbre 2017
                            </p>
                        </div>

                        <div class="col-sm-5 col-xs-12 pull-right">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class=""><b>SUBTOTAL</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class="">B/.437.50</a></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class=""><b>ITBM</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class="">B/. 30.63</a></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class=""><b>RETENCIÓN</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class="">B/. 0,00</a></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class=""><b>TOTAL</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class="">B/.468.13</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <a href="pdf_account" target="_blank"type="button" class="btn btn-primary pull-right" style=""><i class="fa fa-download"></i>Generar PDF</a>
                            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i ></i> Ver</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">

                        <div class="col-md-8 col-sm-12 col-xs-12 text-center">
                            <br>
                            <h4><strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong></h4><br>
                            <h5><strong>ESTADO DE CUENTA</strong></h5>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="col-xs-12 invoice-header fact-border">
                                <p>
                                    Edificio Edison Corporate Center
                                    <br>Piso 8 oficina 8A de la Torre A
                                    <br>TEl. 279 08 06 / 279 08 04
                                    <br>PANAMA REP. DE PANAMA
                                </p>
                                <h5 class="text-danger"><strong>DOCUMENTO NO FISCAL</strong></h5>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- content modal -->
                    <div class="">

                        <section class="content invoice">
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-2 invoice-col table_estado_cuenta">
                                    <ul class="list-group">
                                        <li class="list-group-item">Nombre:</li>
                                        <li class="list-group-item">Dirección:</li>
                                        <li class="list-group-item">País:</li>
                                        <li class="list-group-item">Teléfono</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7 invoice-col table_estado_cuenta">
                                    <ul class="list-group">
                                        <li class="list-group-item">Gaming & Services de Panamá  </li>
                                        <li class="list-group-item">Calle 50 y 73 este San Francisco</li>
                                        <li class="list-group-item">Panamá</li>
                                        <li class="list-group-item">270-8766</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <ul class="list-group pull-right">
                                        <li class="list-group-item"> <strong>14 de Noviembre del 2017</strong></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- row -->
                            <div class="row">
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
                                                <td>Pruebas Pre empleo
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
                                                <td>Pruebas Especificas
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
                                        <strong>Recibido por:</strong>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6 col-xs-9 pull-right">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>SUBTOTAL </th>
                                                <td>B/.437.50</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>ITBM (7%)</th>
                                                <td>30.63</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL</th>
                                                <td>B/.468.13</td>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /. modal -->

    <script src="../build/js/custom.min.js"></script>

    <script type="text/javascript">
        $('#datatable-responsive').DataTable( {
            "searching": false,
            "paging": false,
            language: {
                paginate: {
                    first:      "Primero",
                    previous:   "<",
                    next:       ">",
                    last:       "Último"
                },
                info:           "",
                "lengthMenu":     "_MENU_",
            }
        } );
    </script>

@stop
