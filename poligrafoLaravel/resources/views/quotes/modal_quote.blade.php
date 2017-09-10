<!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Citas</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal" style="padding: 5px 20px;">
                        <form id="createAppoiment" name="createAppoiment" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-xs-12">Poligrafista</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select id="namePolygraphist" name="namePolygraphist" class="form-control">
                                        <option>Seleccione</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id_user }}">{{ $user->name_user }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cliente</label>
                                <div class="col-sm-9 col-xs-12">
                                    <select id="heard" class="form-control col-xs-12" required="">
                                        <option value="">Seleccione</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id_client }}">{{ $client->name_client }}</option>
                                        @endforeach
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
                                        @foreach ($services as $service)
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
                                    <textarea class="form-control" style="height:55px;" id="description" name="description"></textarea>
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