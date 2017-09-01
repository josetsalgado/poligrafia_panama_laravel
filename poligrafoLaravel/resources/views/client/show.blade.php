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
                    <h2>Clientes</h2>
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
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Ciudad</th>
                            <th>#edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jennifer</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Cara</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>New York</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Hermione</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>London</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Lael</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>London</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jonas</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>San Francisco</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Shad</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Michael</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>Singapore</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Donna</td>
                            <td>+58 555 55 55</td>
                            <td>correo@correo.com</td>
                            <td>New York</td>
                            <td>
                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
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

@stop