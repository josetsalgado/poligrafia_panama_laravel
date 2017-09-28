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