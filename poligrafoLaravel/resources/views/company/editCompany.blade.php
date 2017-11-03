<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-edit"></i>Editar Empresa</h4>
        </div>
        <div class="modal-body">
            <form id="update_company" name="update_company"  class="form-horizontal form-label-left input_mask">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" id="id" value="{{ $company[0]->id_company or '' }}">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input id="name_company" type="text" class="form-control has-feedback-left"  name="name_company" placeholder="Razón Social" value="{{ $company[0]->name_company or '' }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input id="ruc_company" type="text" class="form-control"  name="ruc_company" placeholder="R.U.C" value="{{ $company[0]->ruc_company or '' }}">
                    <span class="fa fa-barcode form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input id="email_compamy" type="text" class="form-control has-feedback-left"  name="email_compamy" placeholder="Correo" value="{{ $company[0]->email_compamy or '' }}">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input id="tel_company" type="number" class="form-control"  name="tel_company" placeholder="Número Telefonico" value="{{ $company[0]->tel_company or '' }}">
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input id="address_company" type="text" class="form-control"  name="address_company" placeholder="Dirección" value="{{ $company[0]->address_company or '' }}">
                    <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="col-md-12"><h4><b> Costo de Evaluaciones</b></h4></div>
                <div class="row">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12"> Pre-empleo:</label>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input id="cost_test_pre_employment" type="number" class="form-control has-feedback-left" name="cost_test_pre_employment"  placeholder="Precio" value="{{ $company[0]->cost_test_pre_employment or '' }}">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="row">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12"> Especifica:</label>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input id="cost_specific_test" type="number" class="form-control has-feedback-left" name="cost_specific_test" placeholder="Precio" value="{{ $company[0]->cost_specific_test or '' }}">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="row">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12"> Rutina:</label>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input id="cost_routine_test" name="cost_routine_test" type="number" class="form-control has-feedback-left"  placeholder="Precio" value="{{ $company[0]->cost_routine_test or '' }}">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="row">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12"> Reevaluación:</label>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input id="	reevaluation_test_cost" name="reevaluation_test_cost" type="number" class="form-control has-feedback-left" placeholder="Precio" value="{{ $company[0]->reevaluation_test_cost or '' }}">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

<script src="js/validate/fn-updateCompany.js"></script>