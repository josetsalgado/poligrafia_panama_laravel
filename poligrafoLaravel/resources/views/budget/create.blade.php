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
                        <h2>Cotizar</h2>
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
                                <div class="col-md-2 col-sm-6 col-xs-12 form-group">
                                    <div class="col-md-offset-3  input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <span class="fa fa-calculator form-control-feedback left" aria-hidden="true"></span>
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="pais" class="form-control selc-empresa" required>
                                        <option value="">Cliente</option>
                                        <option value="cliente1">cliente 1</option>
                                        <option value="cliente2">cliente 2</option>
                                        <option value="cliente3">cliente 3</option>
                                        <option value="cliente4">cliente 4</option>
                                        <option value="cliente5">cliente 5</option>
                                    </select> 
                                    <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
                                </div> 
                                <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="pais" class="form-control selc-empresa" required>
                                        <option value="">Tipo de Prueba</option>
                                        <option value="prueba-pre-empleo">Prueba Pre Empleo</option>
                                        <option value="prueba-permanencia">Prueba Permanencia</option>
                                        <option value="prueba-especifica">Prueba Especifica</option>
                                        <option value="pruebas-psicologicas">Pruebas Psicologícas</option>
                                        <option value="pruebas-socioeconomicas">Pruebas Socioeconómicas</option>
                                    </select> 
                                    <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Precio Unitario">
                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" disabled="disabled" id="inputSuccess4" placeholder="Total">
                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                <div class="ln_solid"></div>

                            </div>

                            <div class="form-group">

                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="button" class="btn btn-default">Borrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
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
@stop
