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
                <div id="form-errors"></div>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2">Editar cita</h4>
                </div>
                <div class="modal-body">

                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="createQuote" name="createQuote" class="form-horizontal calender" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Poligrafista</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select class="form-control" id="polygraphist" name="polygraphist">
                                        <option value="">Seleccione</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id_user }}">{{ $user->name_user }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cliente</label>
                                <div class="col-sm-9 col-xs-12">
                                        <select class="form-control col-xs-12" id="client" name="client">
                                        <option value="">Seleccione</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id_client }}">{{ $client->name_client }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Horario</label>
                                <div class="col-sm-9 col-xs-12">
                                    <label>
                                        <input type="radio" name="schedule" id="schedule" class="js-switch" value="07:30" /> 07:30
                                    </label><br>
                                    <label>
                                        <input type="radio" name="schedule" id="schedule" class="js-switch" value="10:00" /> 10:00
                                    </label><br>
                                    <label>
                                        <input type="radio" name="schedule" id="schedule" class="js-switch" value="01:30" /> 01:30
                                    </label><br>
                                    <div id="validSchedule"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tipo de Prueba</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select class="form-control col-xs-12" id="service" name="service">
                                        <option value="">Seleccione</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id_service }}">{{ $service->name_service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Candidato</h4>
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
                                    <input type="number" class="form-control" id="ciCandidate" name="ciCandidate">
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
                                    <input type="number" class="form-control" id="telCandidate" name="telCandidate">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                                <div class="col-sm-9 col-xs-12">
                                    <textarea class="form-control" style="height:55px;" id="descriptionCandidate" name="descriptionCandidate"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default antoclose2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary antosubmit2">Guardar Cita</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="js/validate/fn-createAppoiment.js"></script>
@stop