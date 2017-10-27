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
                    <h2><i class="fa fa-line-chart"></i> Reporte por Estado de Cuenta</h2>
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
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="estatus" name="estatus" class="form-control selc-empresa" required>
                                    <option value="">Estatus</option>
                                    <option value="pendiente_por_pago">Pendiente por Pago</option>
                                    <option value="Pagado">Pagado</option>
                                </select>
                                <span class="fa fa-spinner form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="reportes_estados_de_cuenta" name="reportes_estados_de_cuenta" class="form-control selc-empresa" required>
                                    <option value="">Estado de Cuenta</option>
                                    <option value="prueba-pre-empleo">SIN Facturar</option>
                                    <option value="prueba-permanencia">Facturados</option>
                                </select>
                                <span class="fa fa-bar-chart-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="time" name="time" class="form-control selc-empresa" required>
                                    <option>Tiempo</option>
                                    <option>Mayor a 30 días</option>
                                    <option>Menor a 30 días</option>
                                </select>
                                <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Factura Fiscal</th>
                                <th>Empresa</th>
                                <th>Fecha</th>
                                <th>Factura</th>
                                <th>ITBMS</th>
                                <th>Retención</th>
                                <th>Monto Neto <br> a Pagar</th>
                                <th>#Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>TBSR110000623-00003231 <br>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Pagar</button>
                                </td>
                                <td>Coca Cola</td>
                                <td>23/09/2017</td>
                                <td>1,125.00</td>
                                <td>78.75</td>
                                <td>39.38</td>
                                <td>1.164.37</td>
                                <td>
                                    <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Factura Vencida </a><br>
                                    <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TBSR110000623-00002683<br>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Pagar</button>
                                </td>
                                <td>AC DEPOT</td>
                                <td>02/02/2017</td>
                                <td>B/.256,80</td>
                                <td>B/.0,00</td>
                                <td>B/.0,00</td>
                                <td>B/.256,80</td>
                                <td>
                                    <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Factura Vencida </a><br>
                                    <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TBSR110000623-00000001
                                    <br>
                                    <button type="button" class="btn-click btn btn-success btn-xs"><i class="fa fa-envelope"></i> Solicitar Comprobante</button>
                                </td>
                                <td>Amarilo</td>
                                <td>25/11/2011</td>
                                <td>B/.117,70</td>
                                <td>B/.0,00</td>
                                <td>B/.0,00</td>
                                <td>B/.117,70</td>
                                <td>
                                    <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i>  Pagada </a><br>
                                    <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Facturar</button>
                                </td>
                                <td>AutoStar</td>
                                <td>29/11/2017</td>
                                <td>B/.85,6</td>
                                <td>B/.0,00</td>
                                <td>B/.0,00</td>
                                <td>B/.85,6</td>
                                <td>
                                    <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i>  Pendiente por Facturar </a><br>
                                    <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TBSR110000623-00000017 <br>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Pagar</button>
                                </td>
                                <td>AutoStar</td>
                                <td>29/11/2017</td>
                                <td>B/.85,6</td>
                                <td>B/.0,00</td>
                                <td>B/.0,00</td>
                                <td>B/.85,6</td>
                                <td>
                                    <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i>  Pendiente por Pago </a><br>
                                    <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#pdf"><i class="fa fa-download"></i> Generar PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /page content -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-money"></i> Agregar Pago </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">N° Factura Fiscal:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="factura" name="factura" placeholder="TBSR110000623-00003021">
                            <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Forma de Pago:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <select id="foma-pago" name="forma-pago" class="form-control selc-empresa" required>
                                <option value="">Seleccione</option>
                                <option value="cheque">Cheque</option>
                                <option value="ach">ACH</option>
                                <option value="tarjeta-de-credito">Tarjeta de crédito</option>
                                <option value="transferencia-electronica">transferencia electrónica</option>
                            </select>
                            <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Monto a Pagar:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="monto-pagar" name="monto-pagar" placeholder="1500.00">
                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descuento:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="descuento" name="descuento" placeholder="1500.00">
                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                            <span class="fa fa-comment form-control-feedback left" aria-hidden="true"></span>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-eye-slash "></i> Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Pagar</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Modal PDF -->
    <div class="modal fade" id="pdf" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <br>
                            <h4><strong>INTERNATIONAL POLYGRAPH TRAINING CENTER, S.A.</strong></h4><br>
                            <h5><strong>INFORME POR ESTADO DE CUENTA</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- content modal -->
                    <div class="">
                        <section class="content invoice">
                            <!-- row -->
                            <div class="row">
                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-xs-12 table">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Factura Fiscal</th>
                                                <th>Empresa</th>
                                                <th>Fecha</th>
                                                <th>Factura</th>
                                                <th>ITBMS</th>
                                                <th>Retención</th>
                                                <th>Monto Neto <br> a Pagar</th>
                                                <th>Estatus</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>TBSR110000623-00003231 </td>
                                                <td>Coca Cola</td>
                                                <td>23/09/2017</td>
                                                <td>1,125.00</td>
                                                <td>78.75</td>
                                                <td>39.38</td>
                                                <td>1.164.37</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Factura Vencida </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TBSR110000623-00002683</td>
                                                <td>AC DEPOT</td>
                                                <td>02/02/2017</td>
                                                <td>B/.256,80</td>
                                                <td>B/.0,00</td>
                                                <td>B/.0,00</td>
                                                <td>B/.256,80</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Factura Vencida </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TBSR110000623-00000001 </td>
                                                <td>Amarilo</td>
                                                <td>25/11/2011</td>
                                                <td>B/.117,70</td>
                                                <td>B/.0,00</td>
                                                <td>B/.0,00</td>
                                                <td>B/.117,70</td>
                                                <td>
                                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i>  Pagada </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sin facturar</td>
                                                <td>AutoStar</td>
                                                <td>29/11/2017</td>
                                                <td>B/.85,6</td>
                                                <td>B/.0,00</td>
                                                <td>B/.0,00</td>
                                                <td>B/.85,6</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i>  Pendiente por Facturar </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TBSR110000623-00000017 </td>
                                                <td>AutoStar</td>
                                                <td>29/11/2017</td>
                                                <td>B/.85,6</td>
                                                <td>B/.0,00</td>
                                                <td>B/.0,00</td>
                                                <td>B/.85,6</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i>  Pendiente por Pago </a>
                                                </td>
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

<script type="text/javascript">
    $('#datatable-responsive').DataTable( {
        language: {
            search: "Buscar",
            paginate: {
                first:      "Primero",
                previous:   "<",
                next:       ">",
                last:       "Último"
            },
            info:           "",
            "lengthMenu":     "_MENU_"
        }
    } );
</script>

@stop