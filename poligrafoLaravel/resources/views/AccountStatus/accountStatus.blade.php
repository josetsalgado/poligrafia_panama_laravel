@extends('layouts.default')
@section('content')
    <style>
        .pagination{

            visibility: hidden;
        }

    </style>

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
                                <strong>COCA COLA</strong>
                                <br>1631480-1-671929 D.V. 62
                                <br>795 Freedom Ave, Suite 600
                                <br>New York, CA 94107
                                <br>Phone: 1 (804) 123-9876
                                <br>Email: jon@ironadmin.com
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
                            <td>8</td>
                            <td>Pruebas Pre empleo</td>
                            <td>B/.125.00</td>
                            <td>B/.1,000.00</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Pruebas Especificas</td>
                            <td>B/.150.00</td>
                            <td>B/.1,200.00</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <span><i>Observaciones:</i></span>
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div>

                        <div class="col-sm-5 col-xs-12 pull-right">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class=""><b>DESCUENTO</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class="">-B/.760.00</a></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class=""><b>SUBTOTAL</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class="">B/.760.00</a></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class=""><b>ITBM (7 %)</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class="">EXCENTO</a></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class=""><b>RETENCIÓN</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total back_table"><a class="">EXCENTO</a></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class=""><b>TOTAL</b></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 bordertab_total"><a class="">B/.760.00</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-download"></i> Generar PDF</button>
                        </div>
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
                        <div class="col-sm-6 col-md-3">
                            <div class="col-xs-12 invoice-header">
                                <h1>
                                    <i class="fa fa-globe"></i> IPTC
                                </h1>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <span><strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong>
                            <br> <b> R.U.C. 1631480-1-671929 D.V. 62</b></span>
                            <br>Edificio Edison Corporate Center, Piso 8 oficina 8A de la Torre A.
                            <br>Tel. 279 08 06 y 279 08 04
                            <br>PANAMA, REP. DE PANAMA
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- content modal -->
                    <div class="">

                        <section class="content invoice">
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-6 invoice-col">
                                    <address>
                                        <strong>COCA COLA</strong>
                                        <br>1631480-1-671929 D.V. 62
                                        <br>795 Freedom Ave, Suite 600, New York, CA 94107
                                        <br>Phone: 1 (804) 123-9876
                                        <br>Email: jon@ironadmin.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6 invoice-col pull-right">
                                    <address class="pull-right">
                                        <strong >Panamá a 14 de Septiembre del 2017</strong>
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
                                            <td><b>DESCUENTO</b></td>
                                            <td><b>-B/.55.00</b></td>
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
                                            <th>SUBTOTAL </th>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /. modal -->

    <!-- /page content -->

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
