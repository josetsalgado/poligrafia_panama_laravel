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
                        <form class="form-horizontal form-label-left" action="result_create" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                            <input type="text" class="form-control has-feedback-left" id="poligra" name="poligraf" placeholder="{{ Auth::user()->name }}" disabled="disabled">
                                            <input type="hidden" name="name_poligrafista" value="{{ Auth::user()->name }}">
                                            <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                            <select id="empresa" name="id_company" class="form-control selc-empresa" required>
                                                <option value="">Empresa</option>
                                                @foreach ($Company as $key => $value)
                                                <option value="{{$value['id_company']}}">{{strtoupper($value['name_company'])}}</option>
                                                @endforeach
                                            </select>
                                            <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                            <select id="client" name="id_candidate" class="form-control selc-empresa" required>
                                               <option value="">Seleccione</option>
                                                
                                            </select>
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <!-- /. Info evaluado -->

                                    <!-- 1 Prueba -->
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select id="services" name="id_type_service" class="form-control selc-empresa" required>
                                                    <option value="">Tipo de Prueba</option>
                                                    @foreach($services as $service)
                                                        <option value="{{ $service->name_service }}">{{ $service->name_service }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <select id="tecnicals" name="tecnical" class="form-control selc-empresa">
                                                    <option value="">Seleccione</option>
                                                </select>
                                                <span class="fa fa-clipboard form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>

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
                                                     <div class="quantity ">
                                                      <input id="1" class="form-control" type="number" min="1" max="9" step="1" value="1">
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                   <div class="quantity ">
                                                      <input  id="2" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                   <div class="quantity ">
                                                      <input  id="3" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="quantity ">
                                                      <input  id="4" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="quantity ">
                                                      <input  id="5" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="quantity ">
                                                      <input  id="6" class="form-control" type="number" min="-20" max="20" step="1" value="0">
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
                                                    <div class="quantity ">
                                                      <input  id="7" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="quantity ">
                                                      <input  id="8" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                    <div class="quantity ">
                                                      <input  id="9" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                    <div class="quantity ">
                                                      <input  id="10" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="11" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="12" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="13" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="14" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="15" class="form-control" type="number" min="-20" max="20" step="1" value="0">
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
                                                    <div class="quantity ">
                                                      <input  id="16" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="17" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="18" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R5 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="19" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="20" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="21" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R7 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="22" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="23" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                                     <div class="quantity ">
                                                      <input  id="24" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="25" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="26" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="27" class="form-control" type="number" min="-20" max="20" step="1" value="0">
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
                                                     <div class="quantity ">
                                                      <input  id="28" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="29" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="30" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="31" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="32" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="33" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: </b><br></i></h5>
                                                <ul>
                                                    <li><h5><i><b>1ra Etapa: Corte +4/-4</b><br></i></h5></li>
                                                    <li><h5><i><b>2da Etapa: Subtotal -6</b><br></i></h5></li>
                                                </ul>
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
                                                     <div class="quantity ">
                                                      <input  id="34" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="35" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="36" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="37" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="38" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="39" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="40" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="41" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="42" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Corte: </b><br></i></h5>
                                                <ul>
                                                    <li><h5><i><b>1ra Etapa: Corte +5/-4</b><br></i></h5></li>
                                                    <li><h5><i><b>2da Etapa: Subtotal -7</b><br></i></h5></li>
                                                </ul>
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
                                                     <div class="quantity ">
                                                      <input  id="43" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="44" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                                     <div class="quantity ">
                                                      <input  id="45" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="46" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="47" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="48" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R11 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                     <div class="quantity ">
                                                      <input  id="49" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                     <div class="quantity ">
                                                      <input  id="50" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R11:</label>
                                                     <div class="quantity ">
                                                      <input  id="51" class="form-control" type="number" min="-20" max="20" step="1" value="0">
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

                                        <!--Especifico Técnica RASKIN  -->
                                        <div class="hidden-div" id="RASKIN">
                                            <div class="col-md-12 col-sm-12 col-xs-12"><h4><b>Técnica RASKIN</b></h4></div>
                                            <div class="form-group">
                                                <div class="col-md-4"><h4>Calificaciones con 3 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 4 Gráficas </h4></div>
                                                <div class="col-md-4"><h4>Calificaciones con 5 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R4 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="52" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="53" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                                     <div class="quantity ">
                                                      <input  id="54" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R6 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="55" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="56" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                                     <div class="quantity ">
                                                      <input  id="57" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R8 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="58" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="59" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                                     <div class="quantity ">
                                                      <input  id="60" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R10 -->
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                     <div class="quantity ">
                                                      <input  id="61" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                     <div class="quantity ">
                                                      <input  id="62" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                                     <div class="quantity ">
                                                      <input  id="63" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: </b><br></i></h5>
                                                <ul>
                                                    <li><h5><i><b>1ra Etapa: Corte +5/-4</b><br></i></h5></li>
                                                    <li><h5><i><b>2da Etapa: Subtotal -9</b><br></i></h5></li>
                                                </ul>
                                            </div>
                                            <div class="ln_solid"></div>
                                        </div>
                                        <!-- /.Especifico  Técnica RASKIN  -->

                                        <!-- DLST - 1 -->
                                        <div class="hidden-div" id="DLST">
                                            <div class="form-group">
                                                <div class="col-md-12"><h4><b>DLST</b></h4></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6"><h4>Verificación con 3 Gráficas </h4></div>
                                                <div class="col-md-6"><h4>Verificación con 4 Gráficas </h4></div>
                                            </div>
                                            <!-- Calificacion R1 -->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label>
                                                     <div class="quantity ">
                                                      <input  id="64" class="form-control" type="number" min="-20" max="20" step="1" value="0" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R1:</label>
                                                     <div class="quantity ">
                                                      <input  id="65" class="form-control" type="number" min="-20" max="20" step="1" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Calificacion R2 -->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label>
                                                     <div class="quantity ">
                                                      <input  id="66" class="form-control" type="number" min="-20" max="20" step="1" value="0" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R2:</label>
                                                     <div class="quantity ">
                                                      <input  id="67" class="form-control" type="number" min="-20" max="20" step="1" value="0" >
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gran Total-->
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" id="gt1" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">GT:</label>
                                                    <div class="input-group spinner col-md-3">
                                                        <input type="text" id="gt2" class="form-control" value="0" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-dismissible fade in" role="alert">
                                                <h5><i><b><i class="fa fa-list-alt"></i> Cortes: +2/-3
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
                                                    <textarea id="message" rows="6" class="form-control" name="observation" id="observaciones"></textarea>
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
    </form>
    <!-- /. Modal DLST -->
    <script src="js/validate/fn-createResult.js"></script>
    <script src="js/tab/tab_system.js"></script>




    <script type="text/javascript">
        //suma gran total 1
        $('#64').change(function(){
            console.log('sss');
            var x=$('#64').val();
            var y=$('#66').val();
            var suma= (parseInt(x)+ parseInt(y));

            $('#gt1').val(suma);
        });

        $('#66').change(function(){
            console.log('sss');
            var x=$('#64').val();
            var y=$('#66').val();
            var suma= (parseInt(x)+ parseInt(y));

            $('#gt1').val(suma);
        });
        //suma gran total 2
        $('#65').change(function(){
            console.log('sss');
            var x=$('#65').val();
            var y=$('#67').val();
            var suma= (parseInt(x)+ parseInt(y));

            $('#gt2').val(suma);
        });

        $('#67').change(function(){
            console.log('sss');
            var x=$('#65').val();
            var y=$('#67').val();
            var suma= (parseInt(x)+ parseInt(y));

            $('#gt2').val(suma);
        });


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


    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fa fa-plus-square"></i></div><div class="quantity-button quantity-down"><i class="fa fa-minus-square"></i></div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });

    </script>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>

    <script src="js/validate/fn-createAppoiment.js"></script>


@stop