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
                        <form class="form-horizontal form-label-left input_mask">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="input-group">
                                        <select id="pais" class="form-control selc-empresa" required>
                                            <option value="">Cliente</option>
                                            <option value="cliente1">cliente 1</option>
                                            <option value="cliente2">cliente 2</option>
                                            <option value="cliente3">cliente 3</option>
                                            <option value="cliente4">cliente 4</option>
                                            <option value="cliente5">cliente 5</option>
                                        </select> 
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                <div class="ln_solid"></div>

                            </div>

                        </form>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr> 
                                    <th># Cotización</th>
                                    <th>Cantidad</th>
                                    <th>Descripción</th>
                                    <th>Precio Unitario</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Pre Empleo</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Pre Empleo</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                                <tr>
                                    <td>#31567</td>
                                    <td>31</td>
                                    <td>Prueba Permanencia</td>
                                    <td>100000</td>
                                    <td>5342566</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
