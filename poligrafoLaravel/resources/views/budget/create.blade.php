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
                    <h2><i class="fa fa-money"></i>Cotizar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="form-errors"></div>
                    <form class="form-horizontal" id="createBudget">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-offset-1 col-md-9 col-sm-9 col-xs-12">
                            <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="empresa" name="empresa" class="form-control selc-empresa" required>
                                    <option value="">Empresa</option>
                                    @foreach($companys as $company)
                                        <option value="{{ $company->id_company }}">{{ $company->name_company }}</option>
                                    @endforeach
                                </select>
                                <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                <select id="client" name="client" class="form-control selc-empresa" required>
                                    <option value="">Cliente</option>
                                </select>
                                <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-default" type="button"  data-toggle="modal" data-target="#newEmpresa"><i class="fa fa-plus"></i></button>
                            </div>
                            <div class="col-md-10 col-sm-6 col-xs-12 form-group has-feedback">
                                <div class="ln_solid"></div>
                            </div>
                            <div class="">
                                <label class="col-md-12 col-sm-3 col-xs-12 text-center">EVALUACION POLIGRÁFICA</label>
                            </div>
                            <div class="col-md-10 col-sm-6 col-xs-12 form-group has-feedback">
                                <div class="ln_solid"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-12">
                                    <label>N° Pruebas</label>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label>Valor Total</label>
                                </div>
                            </div>
                            @foreach($services as $service)
                                <div class="row">
                                    <input id="serviceName_{{ $service->id_service }}" name="serviceName_{{ $service->id_service }}" type="hidden" value="{{ $service->name_service }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{ $service->name_service }}:</label>
                                    <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="number"  class="form-control has-feedback-left quantity" id="quantity_{{ $service->id_service }}" name="quantity_{{ $service->id_service }}" placeholder="00" min="0" required>
                                        <input type="hidden"  class="form-control has-feedback-left quantity" id="service_id_{{ $service->id_service }}" name="service_id_{{ $service->id_service }}" value="{{ $service->id_service }}">
                                        <span class="fa fa-calculator form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="number" class="form-control has-feedback-left" id="price_{{ $service->id_service }}" name="price_{{ $service->id_service }}" placeholder="{{ $service->price_service }}" disabled="disabled" required>
                                        <input type="hidden" class="form-control has-feedback-left" id="price_origin_{{ $service->id_service }}" name="price_origin_{{ $service->id_service }}" placeholder="{{ $service->price_service }}"  value="{{ $service->price_service }}" disabled="disabled">
                                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="ln_solid"></div>
                                </div>
                            @endforeach
                            <div class="row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones:</label>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <textarea class="form-control" id="observations" name="observations" rows="3" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="createModal"> Ver </button>
                                    <button type="submit" class="btn btn-primary" target="_blank" style="color: white"><i class="fa fa-download"></i> PDF</button>
                                    <a href="sendhtmlemail_cotizacion"><button type="button" class="btn btn-dark"><i class="fa fa-envelope"></i> Enviar </button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar Nueva Empresa & cliente-->
    <div class="modal fade" id="myModal" role="dialog"></div>
    <!-- /. modal -->



    <script src="js/validate/fn-createBudget.js"></script>
@stop
