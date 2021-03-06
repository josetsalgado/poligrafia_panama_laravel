@extends('layouts.default')
@section('content')
    <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Editar Perfil {{Auth::user()->name}}</h2>
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
                            <form id="createUser" name="createUser" class="form-horizontal form-label-left input_mask">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-circle img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombres" value="{{Auth::user()->name}}">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="lastname" name="lastname" placeholder="Apellidos" value="{{Auth::user()->last_name}}">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo" value="{{Auth::user()->email}}">
                                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="tel" name="tel" placeholder="Número Telefonico" value="{{Auth::user()->tel}}">
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="password" class="form-control has-feedback-left" id="password" name="password" placeholder="Cambiar Clave" value="">
                                        <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="password" class="form-control has-feedback-left" id="password_confirmation" name="password_confirmation" placeholder="Repetir Clave" value="">
                                        <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                        <div class="ln_solid"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-default">Cancelar</button>
                                            <button type="h" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="js/validate/fn-updateProfile.js"></script>
@stop
