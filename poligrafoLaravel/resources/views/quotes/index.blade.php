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

                        <div id='calendar'></div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- calendar modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="form-errors"></div>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Nueva Citas</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal" style="padding: 5px 20px;">
                        <form id="createQuote" name="createQuote" class="form-horizontal calender" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="dateEpoch" id="dateEpoch">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cliente</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select id="client" name="client" class="form-control col-xs-12">
                                        <option value="">Seleccione</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id_client }}">{{ $client->name_client }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Horaio</label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select name="schedule" id="schedule" class="form-control col-xs-12">
                                        <option value="7:00">7:00</option>
                                        <option value="7:30">7:30</option>
                                        <option value="8:00">8:00</option>
                                        <option value="8:30">8:30</option>
                                        <option value="9:00">9:00</option>
                                        <option value="9:30">9:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="1:00">1:00</option>
                                        <option value="1:30">1:30</option>
                                        <option value="2:00">2:00</option>
                                        <option value="2:30">2:30</option>
                                        <option value="3:00">3:00</option>
                                        <option value="3:30">3:30</option>
                                        <option value="4:00">4:00</option>
                                        <option value="4:30">4:30</option>
                                        <option value="5:00">5:00</option>
                                        <option value="5:30">5:30</option>
                                        <option value="6:00">6:00</option>
                                        <option value="6:30">6:30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tipo de Prueba</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select id="service" name="service" class="form-control col-xs-12">
                                        <option value="">Seleccione</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id_service }}">{{ $service->name_service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estatus</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Pendiente"  disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4><i class="fa fa-user"></i> Candidato</h4>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="candidateName" name="candidateName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="candidateLastname" name="candidateLastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="ciCandidate" name="ciCandidate">
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="jobCandidate" name="jobCandidate">
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label col-xs-12">Celular</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="telCandidate" name="telCandidate">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                                <div class="col-sm-9 col-xs-12">
                                    <textarea class="form-control" style="height:55px;" id="descriptionCandidate" name="descriptionCandidate"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default antoclose" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary antosubmit">Guardar Cita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal editar -->
    
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-edit"></i> Editar cita</h4>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Horaio</label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select id="heard" class="form-control col-xs-12" required="">
                                        <option>7:00</option>
                                        <option>7:30</option>
                                        <option>8:00</option>
                                        <option>8:30</option>
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>1:00</option>
                                        <option>1:30</option>
                                        <option>2:00</option>
                                        <option>2:30</option>
                                        <option>3:00</option>
                                        <option>3:30</option>
                                        <option>4:00</option>
                                        <option>4:30</option>
                                        <option>5:00</option>
                                        <option>5:30</option>
                                        <option>6:00</option>
                                        <option>6:30</option>
                                    </select>
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
                                <label class="col-sm-3 control-label">Estatus</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select id="prueba" class="form-control col-xs-12" required="">
                                        <option value="">Seleccione</option>
                                        <option value="no-asistio">No asistio</option>
                                        <option value="re-agendada">Re-agendada</option>
                                        <option value="procesada">Procesada</option>
                                        <option value="aprobada">Aprobada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4><i class="fa fa-user"></i> Candidato</h4>
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

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

    
    <script src="js/validate/fn-createAppoiment.js"></script>
@stop