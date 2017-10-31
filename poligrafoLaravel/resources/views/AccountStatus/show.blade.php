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
                    <h2><i class="fa fa-money"></i> Cuenta por Cobrar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                <a href="sendhtmlemail_retencion"><button type="button" class="btn-click btn btn-success btn-xs"><i class="fa fa-envelope"></i> Solicitar Comprobante</button></a>
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


                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->
    <!-- Modal Observaciones -->
    <div class="modal fade" id="observaciones" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-comments"></i> Observaciones </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <ul>
                            <li><strong>Pagaron 50% el 28 julio 2017 con cheque 1182</strong></li>
                            <li><strong>Pagaron el otro 50% el 14 septimbre 2017</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /. Modal Observaciones -->
    <!-- Modal Pago-->
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
                            <input type="text" class="form-control has-feedback-left" id="factura" name="factura" placeholder=" Ejemplo: TBSR110000623-00003021">
                            <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cliente:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <select id="cliente" name="cliente" class="form-control selc-empresa" required>
                                <option value="">Seleccione</option>
                                <option value="cliente1">Cliente 1</option>
                                <option value="cliente2">Cliente 2</option>
                                <option value="cliente3">Cliente 3</option>
                                <option value="cliente4">Cliente 4</option>
                                <option value="cliente5">Cliente 5</option>
                            </select>
                            <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Forma de Pago:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <select id="foma-pago" name="forma-pago" class="form-control selc-empresa" required>
                                <option value="">Seleccione</option>
                                <option value="ach">ACH</option>
                                <option value="cheque">Cheque</option>
                                <option value="efectivo">Efectivo</option>
                                <option value="tarjeta-de-credito">Tarjeta de Crédito</option>
                                <option value="transferencia-electronica">Transferencia Electrónica</option>
                            </select>
                            <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <!-- selecciona cheque -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cheque Nro:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="monto-pagar" name="monto-pagar" placeholder="21649">
                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <!-- /. selecciona cheque -->
                        <!-- selecciona ACH -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha ACH:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" name="birthdate" class="form-control has-feedback-left" value="10/24/1984" />
                            <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <!-- /.selecciona ACH -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total a Pagar:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="monto-pagar" name="monto-pagar" placeholder="1500.00" disabled="disabled">
                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Monto a Pagar:</label>
                        <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="monto-pagar" name="monto-pagar" placeholder="1500.00">
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
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close "></i> Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Guardar</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

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
    <script type="text/javascript">
        $(function() {
            $('input[name="birthdate"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    "locale": {
                        "direction": "ltr",
                        "format": "MM/DD/YYYY",
                        "separator": " - ",
                        "applyLabel": "Aplicar",
                        "cancelLabel": "Cancelar",
                        "fromLabel": "From",
                        "toLabel": "To",
                        "customRangeLabel": "Personalizado",
                        "daysOfWeek": [
                            "Do",
                            "Lu",
                            "Ma",
                            "Mi",
                            "Ju",
                            "Vi",
                            "Sa"
                        ],
                        "monthNames": [
                            "Enero",
                            "Febrero",
                            "Marzo",
                            "Abril",
                            "Mayo",
                            "Junio",
                            "Julio",
                            "Agosto",
                            "Septiembre",
                            "Octubre",
                            "Noviembre",
                            "Diciembre"
                        ],
                        "firstDay": 1
                    },
                    "alwaysShowCalendars": true,
                    "startDate": "11/01/2017",
                },
                function(start, end, label) {
                    var years = moment().diff(start, 'years');
                });
        });
    </script>


@stop
