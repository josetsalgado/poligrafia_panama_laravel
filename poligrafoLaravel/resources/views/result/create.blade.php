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
                    <h2><i class="fa fa-clipboard"></i> Verificación</h2>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form class="form-horizontal form-label-left">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li id="li1" class="active"><a href="#tab_content1" role="tab" data-toggle="tab">Prueba 1</a></li>
                                    <li id="last"><a href="#addTab"  onclick="removetab()"><span class="glyphicon glyphicon-plus"></span></a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <!-- Info Evaluado -->
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <h4>Calificación del Evaluado</h4>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="poligrafista" name="poligrafista" placeholder="Poligrafista" disabled="disabled">
                                            <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                            <select id="pais" class="form-control selc-empresa" required>
                                                <option value="">Empresa</option>
                                                <option value="empresa1">Coca cola</option>
                                                <option value="empresa2">B&G</option>
                                                <option value="empresa3">Pepsi</option>
                                            </select>
                                            <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                            <select id="pais" class="form-control selc-empresa" required>
                                                <option value="">Evaluado</option>
                                                <option value="evaluado1">Evaluado 1</option>
                                                <option value="evaluado2">Evaluado 2</option>
                                                <option value="evaluado3">Evaluado 3</option>
                                                <option value="evaluado4">Evaluado 4</option>
                                                <option value="evaluado5">Evaluado 5</option>
                                            </select>
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <!-- /. Info evaluado -->

                                    <!-- 1 Prueba -->
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select id="services" class="form-control selc-empresa" required>
                                                    <option value="">Tipo de Prueba</option>
                                                    @foreach($services as $service)
                                                        <option value="{{ $service->name_service }}">{{ $service->name_service }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select id="tecnicals" class="form-control selc-empresa">
                                                    <option value="">Seleccione</option>
                                                </select>
                                                <span class="fa fa-clipboard form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>

                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V1-2R  -->
                                        <div class="hidden-div" id="AFMGQT_V1_2R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V1-2R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V1-2R  -->


                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V1-3R  -->
                                        <div class="hidden-div" id="AFMGQT_V1_3R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V1-3R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V1-3R  -->


                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V1-4R  -->
                                        <div class="hidden-div" id="AFMGQT_V1_4R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V1-4R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R10 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V1-4R  -->

                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V2-2R  -->
                                        <div class="hidden-div" id="AFMGQT_V2_2R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V2-2R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V2-2R -->

                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V2-3R  -->
                                        <div class="hidden-div" id="AFMGQT_V2_3R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V2-3R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V2-3R -->

                                        <!--PRE EMPLEO / RUTINA Técnica AFMGQT-V2-4R  -->
                                        <div class="hidden-div" id="AFMGQT_V2_4R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V2-4R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: +2 / -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. PRE EMPLEO / RUTINA  Técnica AFMGQT-V2-4R -->

                                        <!--ESPECIFICO Técnica AFMGQT-V1-2R  -->
                                        <div class="hidden-div" id="AFMGQT_V1_2R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V1-2R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: NDI igual o mayor a +4 y que todos los sub totales tengan signos positivos. DI igual o menor a -4  o cualquier sub total -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. ESPECIFICO Técnica AFMGQT-V1-2R -->

                                        <!--ESPECIFICO Técnica AFMGQT-V1-3R  -->
                                        <div class="hidden-div" id="AFMGQT_V1_3R">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica AFMGQT-V1-3R</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: NDI igual o mayor a +6 y que todos los sub totales tengan signos positivos. DI igual o menor a -6  o cualquier sub total -3</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. ESPECIFICO Técnica AFMGQT-V1-3R -->

                                        <!--Especifica Técnica UTAH  -->
                                        <div class="hidden-div" id="UTAH">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica UTAH</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R11 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: <br>
                                                            <ul>
                                                                <li>No importan signos</li>
                                                                <li>1 Etapa + 5 / - 4</li>
                                                                <li>2 Etapa Subtotal < = -7</li>
                                                            </ul>
                                                    </i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. Especifica Técnica UTAH   -->

                                        <!--Especifico Técnica ZCT FEDERAL  -->
                                        <div class="hidden-div" id="ZCT_FEDERAL">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica ZCT FEDERAL</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R10 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gran Total-->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: <br>
                                                            <ul>
                                                                <li>+6/ -6 o cualquier subtotal con -3.</li>
                                                                <li>Segunda fase +5 / -4</li>
                                                                <li>Gran Total todos positivos para un veraz</li>
                                                                <li>Gran Total no importan los signos No Veraz</li>
                                                                <li>En cual quiera de las posiciones No veraz(-3)</li>
                                                                <li>Todo lo demas INC</li>
                                                            </ul>
                                                        </b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /.Especifico  Técnica ZCT FEDERAL  -->

                                        <!--Especifico Técnica RASKIN  -->
                                        <div class="hidden-div" id="RASKIN">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica RASKIN</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R9 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R9:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R9:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gran Total-->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: GT: NDI: Mayor o ssddme cambies las respuestas deda que el culpable a con tabla de probabilidad de inocienciay tu no me cambies las respuestas de­igual +6 // DI: Menor o igual -6.</b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /.Especifico  Técnica RASKIN  -->

                                        <!--Especifico Técnica BIZONA  -->
                                        <div class="hidden-div" id="BIZONA">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica BIZONA</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gran Total-->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: <br>
                                                            <ul>
                                                                <li>1 Etapa + 4  / - 4 </li>
                                                                <li>2 Etapa  Subtotal < = - 6</li>
                                                                <li>Gran Total todos positivos para un veraz</li>
                                                                <li>Gran Total no importan los signos No Veraz</li>
                                                                <li>En cual quiera de las posiciones No veraz(-3)</li>
                                                                <li>Todo lo demas INC</li>
                                                            </ul>
                                                        </b><br></i></h5>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /.Especifico  Técnica BIZONA  -->

                                        <!-- DLST - 1 -->
                                        <div class="hidden-div" id="DLST">
                                            <div class="form-group">
                                                <div class="col-md-12"><h4><b> DLST</b></h4></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6"><h4>Verificación con 3 Gráficas </h4></div>
                                                <div class="col-md-6"><h4>Verificación con 4 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R1 -->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R2 -->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gran Total-->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: GT +4/ -4 o subtotal -6
                                                        </b><br></i></h5>
                                            </div>
                                            <div id="masdlst"></div>
                                            <div class="btn-group pull-right">
                                                <button class="btn btn-default" type="button"  data-toggle="modal" data-target="#newdlst"><i class="fa fa-plus"></i></button>
                                            </div>
                                            <br>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /. DLST -1 -->
                                        <!-- Objetivos -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-md-2 col-sm-2 col-xs-2">Observaciones:</label>
                                                <div class="col-md-10">
                                                    <textarea id="message" rows="6" class="form-control" name="observaciones" id="observaciones"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /. Objetivos -->

                                    </div>
                                    <!-- /. 1 Prueba -->

                                    <!-- 2 Prueba -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <p>Prueba 2</p>
                                    </div>
                                    <!-- /.2 Prueba -->

                                    <!-- 3 Prueba -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <p>Prueba 3</p>
                                    </div>
                                    <!-- /.3 Prueba -->

                                    <div class="form-group">
                                        <div class="col-md-7 col-md-offset-5">
                                            <button type="submit" class="btn btn-default">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /page content -->
    <!-- Modal DLST -->
    <div class="modal fade" id="newdlst" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Nuevo DLST</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="dlst" name="dlst" placeholder="Titulo" value="DLST">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                            <a href="#" id="agregar_dlst" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal DLST -->
    <script src="js/validate/fn-createResult.js"></script>
    <script src="js/tab/tab_system.js"></script>


    <script type="text/javascript">
        (function ($) {
            $('.spinner .btn:first-of-type').on('click', function() {
                $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
            });
            $('.spinner .btn:last-of-type').on('click', function() {
                $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
            });
        })(jQuery);
    </script>


    <script type="text/javascript">
        function myFunction(iddlst) {
            document.getElementById(iddlst.id).innerHTML = '';

        }
        $( "#agregar_dlst" ).click(function() {
            var dlst = $('#dlst').val();
            var iddlst = dlst;
            iddlst= iddlst.replace(/\s/g,"_");
            $('#masdlst').append('<div id="'+iddlst+'"><div class="form-group"><div class="col-md-12"><h4><b>'+ dlst +'</b></h4></div><div class="form-group"><div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div><div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div> </div><!-- Calificacion R1 --><div class="form-group"><div class="col-md-6"><label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label><div class="input-group spinner col-md-3"><input type="text" class="form-control" value="0"><div class="input-group-btn-vertical"><button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button><button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button></div> </div></div><div class="col-md-6"><label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label> <div class="input-group spinner col-md-3"><input type="text" class="form-control" value="0"> <div class="input-group-btn-vertical"><button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button><button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button></div></div></div></div><!-- Calificacion R2 --><div class="form-group"><div class="col-md-6"><label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label> <div class="input-group spinner col-md-3"><input type="text" class="form-control" value="0"><div class="input-group-btn-vertical"><button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button><button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button></div></div></div><div class="col-md-6">  <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label> <div class="input-group spinner col-md-3"> <input type="text" class="form-control" value="0"> <div class="input-group-btn-vertical"><button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>  <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button></div></div></div> </div><!-- Gran Total--><div class="form-group"><div class="col-md-6"><label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label><div class="input-group spinner col-md-3"><input type="text" class="form-control" value="0" disabled="disabled"></div></div><div class="col-md-6"><label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label><div class="input-group spinner col-md-3"><input type="text" class="form-control" value="0" disabled="disabled"></div></div></div><div class="alert alert-dismissible fade in" role="alert"><h5><i><b><i class="fa fa-list-alt"></i> Cortes: GT +4/ -4 o subtotal -6</b><br></i></h5></div><a href="#." id="agregar_dlst"  onclick="myFunction('+iddlst+')" class="btn btn-default"><i class="fa fa-trash-o"></i></a> <div class="ln_solid"></div></div></div>');
            $('#dlst').val('DLST');

            $(".close").click();


        });

        function removetab(){
            $("#tab_content1").removeClass( "active in" );
        }




    </script>

@stop