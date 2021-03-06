@extends('layouts.default')
@section('content')
    <div class="">
        <div id="form-errors"></div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ trans("poligrafo.new_client") }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form id="createClient" name="createClient" class="form-horizontal form-label-left input_mask">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="images/maletin.png" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="empresa" name="empresa" class="form-control selc-empresa" required>
                                        <option value="">Empresa </option>
                                        @foreach($companys as $company)
                                            <option value="{{ $company->id_company }}">{{ $company->name_company }}</option>
                                        @endforeach
                                    </select>
                                    <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="name_client" name="name" placeholder="{{ trans("poligrafo.name_client") }}">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="position" name="position" placeholder="Cargo">
                                    <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('tel') ? 'has-error' : '' }}">
                                    <input type="number" class="form-control has-feedback-left" id="tel" name="tel" placeholder="{{ trans("poligrafo.tel_client") }}">
                                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('tel') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="{{ trans("poligrafo.email") }}">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback {{ $errors->has('city') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control has-feedback-left" id="city" name="city" placeholder="Ciudad">
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="ln_solid"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-default">Cancelar</button>
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

    <script src="js/validate/fn-createClient.js"></script>
@stop