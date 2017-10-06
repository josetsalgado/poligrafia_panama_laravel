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
                    <h2>Calidad de Prueba</h2>
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
                    <!-- form input mask -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form class="form-horizontal form-label-left">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <h4>Calificación del Evaluado</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="controlador" name="controlador" placeholder="Controlador" disabled="disabled">
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
                            <div class="form-group">
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
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
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="primary" class="form-control selc-empresa" required>
                                        <option value="">Tipo de Examen</option>
                                        <option value="unico">Asunto Único</option>
                                        <option value="multiple">Faceta Multiple Ó Asunto Multiple</option>
                                        <option value="laborales">Asunto Multiple en Laborales</option>
                                    </select>
                                    <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="secondary" class="form-control selc-empresa" required>
                                    </select>
                                    <span class="fa fa-clipboard form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="ln_solid"></div>


                            <!--Asunto unico Técnica UTAH zona 3 (ZCT)  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
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
                            <!-- Calificacion R3 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R3:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R3:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <!-- /. Asunto unico Técnica UTAH zona 3 (ZCT)  -->

                            <!--Asunto unico Técnica ZCT FEDERAL  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
                            </div>
                            <!-- Calificacion R5 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                            <div class="ln_solid"></div>

                            <!-- /. Asunto unico Técnica ZCT FEDERAL  -->

                            <!--Asunto unico Técnica BIZONA  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
                            </div>
                            <!-- Calificacion R5 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                            <div class="ln_solid"></div>
                            <!-- /. Asunto unico Técnica BIZONA  -->

                            <!--FACETA MULTIPLE Ó ASUNTO MULTIPLE Técnica AF MGQT V.1  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
                            </div>
                            <!-- Calificacion R4 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R6:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R10:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                            <div class="ln_solid"></div>
                            <!-- /. FACETA MULTIPLE Ó ASUNTO MULTIPLE  Técnica AF MGQT V.1  -->

                            <!--FACETA MULTIPLE Ó ASUNTO MULTIPLE Técnica AF MGQT V.2  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
                            </div>
                            <!-- Calificacion R4 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R4:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R5:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R7:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R8:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                            <div class="ln_solid"></div>
                            <!-- /. FACETA MULTIPLE Ó ASUNTO MULTIPLE  Técnica AF MGQT V.2  -->

                            <!--FACETA MULTIPLE Ó ASUNTO MULTIPLE Técnica MGQT UTAH  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
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
                            <!-- Calificacion R3 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R3:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación R3:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <!-- /. FACETA MULTIPLE Ó ASUNTO MULTIPLE  Técnica MGQT UTAH  -->

                            <!--ASUNTO MULTIPLE  EN LABORALES Técnica DLST (screening) TES  -->
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
                            </div>
                            <!-- Calificacion 1R1 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 1R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 1R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificacion 1R2 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 1R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 1R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificacion 2R1 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 2R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 2R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificacion 2R2 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 2R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 2R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificacion 3R1 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 3R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 3R1:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificacion 3R2 -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 3R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-5 col-sm-3 col-xs-3">Calificación 3R2:</label>
                                    <div class="input-group spinner col-md-3">
                                        <input type="text" class="form-control" value="0">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <!-- /. ASUNTO MULTIPLE  EN LABORALES  Técnica DLST (screening) TES  -->

                            <!-- DLST - 1 -->
                            <div class="form-group">
                                <div class="col-md-12"><h4><b> DLST</b></h4></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
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
                            <div class="ln_solid"></div>
                            <!-- /. DLST -1 -->

                            <!-- DLST - 2 -->
                            <div class="form-group">
                                <div class="col-md-12"><h4><b> DLST 2 </b></h4></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
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
                            <div class="ln_solid"></div>
                            <!-- /. DLST -2 -->

                            <!-- DLST - Confirmatorio -->
                            <div class="form-group">
                                <div class="col-md-12"><h4><b> DLST Confirmatorio </b></h4></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6"><h4>Calificaciones con 3 Gráficas </h4></div>
                                <div class="col-md-6"><h4>Calificaciones con 4 Gráficas </h4></div>
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
                            <div class="ln_solid"></div>
                            <!-- /. DLST Confirmatorio -->

                            <!-- Observaciones -->
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Observaciones</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <!-- /. Observaciones -->
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-default">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /form input mask -->

                </div>
            </div>
        </div>
    </div>


@stop
