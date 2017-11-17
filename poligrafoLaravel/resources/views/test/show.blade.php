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
                    <h2><i class="fa fa-clipboard"></i> Informe de Prueba</h2>
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
                                <select id="pais" class="form-control selc-empresa" required>
                                    <option value="">Empresa</option>
                                    <option value="empresa1">Coca cola</option>
                                    <option value="empresa2">B&G</option>
                                    <option value="empresa3">Pepsi</option>
                                </select>
                                <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="pais" class="form-control selc-empresa" required>
                                    <option value="">Evaluado</option>
                                    <option value="evaluado1">Evaluado 1</option>
                                    <option value="evaluado2">Evaluado 2</option>
                                    <option value="evaluado3">Evaluado 3</option>
                                    <option value="evaluado4">Evaluado 4</option>
                                    <option value="evaluado5">Evaluado 5</option>
                                </select>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="poligrafista" name="poligrafista" class="form-control selc-empresa" required>
                                    <option value="">Poligrafista</option>
                                    <option value="evaluado1">Poligrafista 1</option>
                                    <option value="evaluado2">Poligrafista 2</option>
                                    <option value="evaluado3">Poligrafista 3</option>
                                    <option value="evaluado4">Poligrafista 4</option>
                                    <option value="evaluado5">Poligrafista 5</option>
                                </select>
                                <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Empresa</th>
                                <th>Candidato</th>
                                <th>Evaluacion Poligrafica</th>
                                <th>Poligrafista</th>
                                <th>Controladores</th>
                                <th>#Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23/09/2017</td>
                                <td>Coca Cola</td>
                                <td> Nicole Pearson</td>
                                <td>Pruebas Especificas</td>
                                <td>Poligrafista</td>
                                <td>Controlador 1 <br>
                                    Controlador 2 <br>
                                    Controlador 3
                                </td>
                                <td>
                                    <a href="detail_informe_prueba" class="btn btn-dark btn-xs"><i class="fa fa-file-text"></i>  Ver Informe </a>
                                </td>
                            </tr>
                            <tr>
                                <td>23/09/2017</td>
                                <td>Coca Cola</td>
                                <td>Nicole Pearson</td>
                                <td>Pruebas Especificas</td>
                                <td>Poligrafista</td>
                                <td>Controlador 1 <br>
                                    Controlador 2 <br>
                                    Controlador 3
                                </td>
                                <td>
                                    <a href="detail_informe_prueba" class="btn btn-dark btn-xs"><i class="fa fa-file-text"></i>  Ver Informe </a>
                                </td>
                            </tr>
                            <tr>
                                <td>23/09/2017</td>
                                <td>Coca Cola</td>
                                <td>Nicole Pearson</td>
                                <td>Pruebas Especificas</td>
                                <td>Poligrafista</td>
                                <td>Controlador 1 <br>
                                    Controlador 2 <br>
                                    Controlador 3
                                </td>
                                <td>
                                    <a href="detail_informe_prueba" class="btn btn-dark btn-xs"><i class="fa fa-file-text"></i>  Ver Informe </a>
                                </td>
                            </tr>
                            <tr>
                                <td>23/09/2017</td>
                                <td>Coca Cola</td>
                                <td>Nicole Pearson</td>
                                <td>Pruebas Especificas</td>
                                <td>Poligrafista</td>
                                <td>Controlador 1 <br>
                                    Controlador 2 <br>
                                    Controlador 3
                                </td>
                                <td>
                                    <a href="detail_informe_prueba" class="btn btn-dark btn-xs"><i class="fa fa-file-text"></i>  Ver Informe </a>
                                </td>
                            </tr>
                            <tr>
                                <td>23/09/2017</td>
                                <td>Coca Cola</td>
                                <td>Nicole Pearson</td>
                                <td>Pruebas Especificas</td>
                                <td>Poligrafista</td>
                                <td>Controlador 1 <br>
                                    Controlador 2 <br>
                                    Controlador 3
                                </td>
                                <td>
                                    <a href="detail_informe_prueba" class="btn btn-dark btn-xs"><i class="fa fa-file-text"></i>  Ver Informe </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
