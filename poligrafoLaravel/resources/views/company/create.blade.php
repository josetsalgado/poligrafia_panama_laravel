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
                                    <input type="text" class="form-control has-feedback-left" id="name_company" name="name_company" placeholder="Razón Social">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="ruc_company" name="ruc_company" placeholder="R.U.C">
                                    <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
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