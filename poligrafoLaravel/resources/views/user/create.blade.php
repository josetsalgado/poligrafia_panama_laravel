@extends('layouts.default')
@section('content')
    <div id="form-errors"></div>
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ trans("poligrafo.new_module",["module" => "usuario"]) }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="createUser" name="createUser" class="form-horizontal form-label-left input_mask">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-circle img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombres">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="lastname" name="lastname" placeholder="Apellidos">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('tel') ? 'has-error' : '' }}">
                                    <input type="number" class="form-control has-feedback-left" id="tel" name="tel" placeholder="Número Telefonico">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('tel') }}</span>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('rol') ? 'has-error' : '' }}">
                                    <select id="rol" name="rol" class="form-control selc-empresa">
                                        <option value="">Tipo de Usuario </option>
                                        <option value="2">Poligrafista</option>
                                        <option value="1">Admnistrador</option>
                                    </select> 
                                    <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('rol') }}</span>
                                </div> 
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control has-feedback-left" id="password" name="password" placeholder="Clave">
                                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control has-feedback-left" id="password_confirmation" name="password_confirmation" placeholder="Repetir Clave">
                                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
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
    <script src="js/validate/fn-createUser.js"></script>
@stop