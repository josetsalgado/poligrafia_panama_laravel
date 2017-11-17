<div class="modal-dialog">
    <div class="modal-content">
        <div id="form-errors"></div>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-edit"></i> Editar cita</h4>
        </div>
        
        <div class="modal-body">
            <div id="testmodal2" style="padding: 5px 20px;">
                <form id="editQuotePatien" name="editQuotePatien" class="form-horizontal calender" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="dateEpoch" id="dateEpochEdit" value="{{ $getQuote[0]->time_appoiment }}">
                    <input type="hidden" name="id" id="id" value="{{ $getQuote[0]->id_appoiment }}">
                    <input type="hidden" name="id_patient" id="id_patient" value="{{ $getQuote[0]->id_patient }}">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-xs-12">Poligrafista</label>
                        <div class="col-sm-9 col-xs-12">
                            <select id="polygraphist" name="polygraphist" class="form-control">
                                @if($getUser)
                                <option value="{{ $getUser[0]->id }} ">{{ $getUser[0]->name }}</option>
                                @else
                                <option value="">Seleccionar</option>
                                @endif

                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} {{ $user->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Empresa</label>
                        <div class="col-sm-9 col-xs-12">
                            <select id="empresaEdit" name="empresaEdit" class="form-control col-xs-12">
                                <option value="{{ $getQuote[0]->id_company }}">{{ $getQuote[0]->name_company }}</option>
                                @foreach($companys as $company)
                                <option value="{{ $company->id_company }}">{{ $company->name_company }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Cliente</label>
                        <div class="col-sm-9 col-xs-12">
                            <select id="clientEdit" name="clientEdit" class="form-control col-xs-12">
                                <option value="{{ $getQuote[0]->id_client }}">{{ $getQuote[0]->name_client }}</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Horario</label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <select name="scheduleEdit" id="scheduleEdit" class="form-control col-xs-12" required="">
                                <option value="{{ $getQuote[0]->time_appoiment }}">{{ $getQuote[0]->time_appoiment }}</option>
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
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Llegada</label>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <select id="time_arrival" name="time_arrival" class="form-control col-xs-12">
                                <option value="{{ $getQuote[0]->time_arrival or '' }}">{{ $getQuote[0]->time_arrival or '' }}</option>
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
                            <select id="serviceEdit" name="serviceEdit" class="form-control col-xs-12" required="">
                                <option value="{{ $getQuote[0]->service_id }}">{{ $getQuote[0]->name_service }}</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id_service }}">{{ $service->name_service }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Estatus</label>
                        <div class="col-sm-9 col-xs-12">
                            <select id="statusEdit" name="statusEdit" class="form-control col-xs-12" required="">
                                <option value="{{ $getQuote[0]->status }}">{{ $getQuote[0]->status }}</option>
                                <option value="No asistió">No asistió</option>
                                <option value="Asistió">Asistió</option>
                                <option value="Re-agendada">Re-agendada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4><i class="fa fa-user"></i> Candidato</h4>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-xs-12">Nombre</label>
                        <div class="col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="candidateNameEdit" name="candidateNameEdit" value="{{ $getQuote[0]->name_patient }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-xs-12">Apellido</label>
                        <div class="col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="candidateLastnameEdit" name="candidateLastnameEdit" value="{{ $getQuote[0]->last_name_patient }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-xs-12">Cedula</label>
                        <div class="col-sm-9 col-xs-12">
                            <input type="number" class="form-control" id="ciCandidateEdit" name="ciCandidateEdit" value="{{ $getQuote[0]->ci_patient }}">
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-sm-3 control-label col-xs-12">Puesto</label>
                        <div class="col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="jobCandidateEdit" name="jobCandidateEdit" value="{{ $getQuote[0]->job_patient }}">
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-sm-3 control-label col-xs-12">Celular</label>
                        <div class="col-sm-9 col-xs-12">
                            <input type="number" class="form-control" id="telCandidateEdit" name="telCandidateEdit" value="{{ $getQuote[0]->phone }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-xs-12">Comentarios</label>
                        <div class="col-sm-9 col-xs-12">
                            <textarea class="form-control" style="height:55px;" id="descriptionCandidateEdit" name="descriptionCandidateEdit" >{{ $getQuote[0]->comentary_appoiment }}</textarea>
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
<script src="js/validate/fn-UpdateAppoiment.js"></script>