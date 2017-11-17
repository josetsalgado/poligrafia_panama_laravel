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
                    <h2>Registrar Pago</h2>
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
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="images/pago.png" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- form input mask -->

                                <form class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Numero de Factura Fiscal</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control has-feedback-left" data-inputmask="'mask' : '*************-**********'" placeholder="TBSR110000623-00003021">
                                            <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cliente</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select id="cliente" class="form-control selc-empresa" required>
                                                <option value="">Seleccione</option>
                                                <option value="cliente1">cliente 1</option>
                                                <option value="cliente2">cliente 2</option>
                                                <option value="cliente3">cliente 3</option>
                                                <option value="cliente4">cliente 4</option>
                                                <option value="cliente5">cliente 5</option>
                                            </select>
                                            <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Fecha</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control has-feedback-left" placeholder="12/09/2017" disabled="disabled">
                                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Producto</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select id="tipo_prueba" class="form-control selc-empresa" required>
                                                <option value="">Seleccione</option>
                                                <option value="prueba-pre-empleo">Prueba Pre Empleo</option>
                                                <option value="prueba-permanencia">Prueba Permanencia</option>
                                                <option value="prueba-especifica">Prueba Especifica</option>
                                                <option value="pruebas-psicologicas">Pruebas Psicologícas</option>
                                                <option value="pruebas-socioeconomicas">Pruebas Socioeconómicas</option>
                                            </select>
                                            <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cantidad</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select id="cantidad" class="form-control selc-empresa" required>
                                                <option value="">Seleccione</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <span class="fa fa-calculator form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Forma de Pago</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select id="cantidad" class="form-control selc-empresa" required>
                                                <option value="">Seleccione</option>
                                                <option value="cheque">Cheque</option>
                                                <option value="transferencia">Transferencia</option>
                                                <option value="efectivo">Efectivo</option>
                                                <option value="tarjeta">Tarjeta</option>
                                            </select>
                                            <span class="fa fa-calculator form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cantidad a Pagar</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control has-feedback-left" data-inputmask="'mask' : ''" placeholder="379,00">
                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>

                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="button" class="btn btn-default">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar Pago</button>
                                        </div>
                                    </div>

                                </form>
                                <!-- /form input mask -->

                            </div>
                        </div>
                </div>
            </div>
        </div>
@stop