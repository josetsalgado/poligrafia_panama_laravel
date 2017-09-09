<div id="form-error"></div>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><i class="fa fa-edit"></i>{{ trans("poligrafo.edit_user", ['modal' => 'cliente']) }}</h4>
</div>
<div class="modal-body">
    <form id="updateClient" name="updateClient" class="form-horizontal form-label-left input_mask">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $client[0]->id_client }}">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombre" value="{{ $client[0]->name_client }}">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="number" class="form-control" id="tel" name="tel" placeholder="Número Telefonico" value="{{ $client[0]->tel_client }}">
            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo" value="{{ $client[0]->email_client }}">
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <select id="city" name="city" class="form-control selc-empresa">
                <option value="{{ $client[0]->city_id }}">{{ $client[0]->city_id }}</option>
                <option value="1">ciudad de Panama</option>
                <option value="2">Santiago</option>
                <option value="3">Colon</option>
            </select> 
            <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <select id="country" name="country" class="form-control selc-empresa">
                <option value="{{ $client[0]->country_id }}">{{ $client[0]->name_city }}</option>
                <option value="1">Panamá</option>
                <option value="2">Venezuela</option>
            </select> 
            <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="modal-footer">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>

<script src="js/validate/fn-updateClient.js"></script>