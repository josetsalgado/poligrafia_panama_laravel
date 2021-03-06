@extends('layouts.default')
@section('content')
    <div id="form-errors"></div>

    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Nueva Empresa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="createCompany" name="createCompany" class="form-horizontal form-label-left input_mask">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="images/edificio-de-frente.png" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="name_company" name="name_company" placeholder="Razon Social">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="ruc_company" name="ruc_company" placeholder="R.U.C">
                                    <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="retention_type type" name="retention_type" class="form-control selc-empresa">
                                        <option value="">Tipo de Retención </option>
                                        <option value="ninguno">NINGUNO</option>
                                        <option value="excento">EXCENTO </option>
                                        <option value="3.4">3.4%</option>
                                    </select>
                                    <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="number" class="form-control has-feedback-left" id="tel_company" name="tel_company" placeholder="Número Telefonico">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="email_compamy" name="email_compamy" placeholder="Correo">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="address_company" name="address_company" placeholder="Direccón">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                        <div class="col-md-8 ln_solid"></div>
                                    </div>
                                    <div class="col-md-12"><h4><b> Costo de Evaluaciones</b></h4></div>
                                    <div class="row">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12"> Pre-empleo:</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="number" class="form-control has-feedback-left" id="cost_test_pre_employment" name="cost_test_pre_employment" placeholder="Precio">
                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12"> Especifica:</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="number" class="form-control has-feedback-left" id="cost_specific_test" name="cost_specific_test" placeholder="Precio">
                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12"> Rutina:</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="number" class="form-control has-feedback-left" id="cost_routine_test" name="cost_routine_test" placeholder="Precio">
                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12"> Reevaluación:</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="number" class="form-control has-feedback-left" id="reevaluation_test_cost" name="reevaluation_test_cost" placeholder="Precio">
                                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-12 form-group has-feedback">
                                        <div class="ln_solid"></div>
                                    </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="reset" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/validate/fn-createCompany.js"></script>
@stop