@extends('layouts.default')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
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
                        <h2>Cotizaciones por Clientes</h2>
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
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Razón Social</th>
                                <th>Fecha</th>
                                <th>Evaluacion Poligrafica</th>
                                <th>Candidatos</th>
                                <th>Precio Unitario</th>
                                <th>Sub total</th>
                                <th>#Pago</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Coca Cola</td>
                                <td>23/09/2017</td>
                                <td>
                                    <ul>
                                        <li>8 pruebas Especificas</li>
                                        <li>8 pruebas Pre empleo</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nicole Pearson</li>
                                        <li>Jhon Doe</li>
                                        <li>Jonas Brother</li>
                                        <li>Michael Jackson</li>
                                        <li>Shad friend</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>B/.150.00</li>
                                        <li>B/.125.00</li>
                                    </ul>
                                </td>
                                <td>1500.00</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Ver</button><br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-download"></i> PDF </a><br>

                                </td>
                            </tr>
                            <tr>
                                <td>B&G consultores</td>
                                <td>23/09/2017</td>
                                <td>
                                    <ul>
                                        <li>8 pruebas Especificas</li>
                                        <li>8 pruebas Pre empleo</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nicole Pearson</li>
                                        <li>Jhon Doe</li>
                                        <li>Jonas Brother</li>
                                        <li>Michael Jackson</li>
                                        <li>Shad friend</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>B/.150.00</li>
                                        <li>B/.125.00</li>
                                    </ul>
                                </td>
                                <td>B/.1500.00</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Ver</button><br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-download"></i> PDF </a><br>

                                </td>
                            </tr>
                            <tr>
                                <td>B&G</td>
                                <td>23/09/2017</td>
                                <td>
                                    <ul>
                                        <li>8 pruebas Especificas</li>
                                        <li>8 pruebas Pre empleo</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nicole Pearson</li>
                                        <li>Jhon Doe</li>
                                        <li>Jonas Brother</li>
                                        <li>Michael Jackson</li>
                                        <li>Shad friend</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>B/.150.00</li>
                                        <li>B/.125.00</li>
                                    </ul>
                                </td>
                                <td>1500.00</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Ver</button><br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-download"></i> PDF </a><br>

                                </td>
                            </tr>
                            <tr>
                                <td>iLernus</td>
                                <td>23/09/2017</td>
                                <td>
                                    <ul>
                                        <li>8 pruebas Especificas</li>
                                        <li>8 pruebas Pre empleo</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nicole Pearson</li>
                                        <li>Jhon Doe</li>
                                        <li>Jonas Brother</li>
                                        <li>Michael Jackson</li>
                                        <li>Shad friend</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>B/.150.00</li>
                                        <li>B/.125.00</li>
                                    </ul>
                                </td>
                                <td>1500.00</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Ver</button><br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-download"></i> PDF </a><br>

                                </td>
                            </tr>
                            <tr>
                                <td>Axionti</td>
                                <td>23/09/2017</td>
                                <td>
                                    <ul>
                                        <li>8 pruebas Especificas</li>
                                        <li>8 pruebas Pre empleo</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Nicole Pearson</li>
                                        <li>Jhon Doe</li>
                                        <li>Jonas Brother</li>
                                        <li>Michael Jackson</li>
                                        <li>Shad friend</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>B/.150.00</li>
                                        <li>B/.125.00</li>
                                    </ul>
                                </td>
                                <td>1500.00</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Ver</button><br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-download"></i> PDF </a><br>

                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
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
@stop
