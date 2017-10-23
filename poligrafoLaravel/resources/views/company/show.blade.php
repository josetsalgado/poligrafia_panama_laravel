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
                    <h2><i class="fa fa-building"></i> Empresas</h2>
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
                            <th>R.U.C</th>
                            <th>Cliente</th>
                            <th>Número Telefonico</th>
                            <th>Correo</th>
                            <th>Precios <br>de Evaluaciones</th>
                            <th>#editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Coca Cola</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Chevrolet</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Pepsi</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Lael</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jonas</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Shad</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Michael</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Donna</td>
                            <td>1631480-1-671929 D.V. 62</td>
                            <td>
                                <ul>
                                    <li>Michael Jonas</li>
                                    <li>jackson salga</li>
                                </ul>
                            </td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>
                                <ul>
                                    <li>Pre-empleo B/.125.00</li>
                                    <li>Especifica B/.150.00</li>
                                    <li>Rutina B/.125.00</li>
                                </ul>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i>Editar Empresa</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask">

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="razon-social" name="razon-social" placeholder="Razón Social">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="ruc" name="ruc" placeholder="R.U.C">
                            <span class="fa fa-barcode form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="correo" name="correo" placeholder="Correo">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="numero-telefonico" name="numero-telefonico" placeholder="Número Telefonico">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                            <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12"><h4><b> Costo de Evaluaciones</b></h4></div>
                        <div class="row">
                            <label class="control-label col-md-4 col-sm-3 col-xs-12"> Pre-empleo:</label>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Precio">
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label col-md-4 col-sm-3 col-xs-12"> Especifica:</label>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Precio">
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label col-md-4 col-sm-3 col-xs-12"> Rutina:</label>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Precio">
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label col-md-4 col-sm-3 col-xs-12"> Reevaluación:</label>
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Precio">
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">

                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
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
@stop