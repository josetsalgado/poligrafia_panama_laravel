@extends('layouts.default')
@section('content')
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Citas</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">     
	<div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
        
        <div class="modal fade" id="myModal" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel2">Editar cita</h4>
            </div>
            <div class="modal-body">

                <div id="testmodal2" style="padding: 5px 20px;">
                    <form id="antoform2" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Poligrafista</label>
                            <div class="col-sm-9 col-xs-12">
                                <select id="heard" class="form-control" required="">
                                    <option value="">Seleccione</option>
                                    <option value="poligrafista">Poligrafista 1</option>
                                    <option value="poligrafista">Poligrafista 2</option>
                                    <option value="poligrafista">Poligrafista 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cliente</label>
                            <div class="col-sm-9 col-xs-12">
                                <select id="heard" class="form-control col-xs-12" required="">
                                    <option value="">Seleccione</option>
                                    <option value="cliente">Cliente 1</option>
                                    <option value="cliente">Cliente 2</option>
                                    <option value="cliente">Cliente 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Horario</label>
                            <div class="col-sm-9 col-xs-12">
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> 07:30
                                </label><br>
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> 10:00
                                </label><br>
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> 01:30
                                </label><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tipo de Prueba</label>
                            <div class="col-sm-9 col-xs-12">
                                <select id="prueba" class="form-control col-xs-12" required="">
                                    <option value="">Seleccione</option>
                                    <option value="prueba-pre-empleo">Prueba Pre Empleo</option>
                                    <option value="prueba-permanencia">Prueba Permanencia</option>
                                    <option value="prueba-especifica">Prueba Especifica</option>
                                    <option value="pruebas-psicologicas">Pruebas Psicologícas</option>
                                    <option value="pruebas-socioeconomicas">Pruebas Socioeconómicas</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Candidato</h4>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="candidato" name="candidato">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="cedula" name="cedula">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="puesto" name="puesto">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label col-xs-12">Celular</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="celular" name="celular">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                            <div class="col-sm-9 col-xs-12">
                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary antosubmit2">Guardar Cita</button>
            </div>
            </div>
        </div>
    </div>
    <script src="js/validate/fn-createAppoiment.js"></script>
@stop