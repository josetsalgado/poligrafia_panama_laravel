<div id="form-error"></div>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"> <i class="fa fa-edit"></i> <b>Editar usuario</b> {{ $user[0]->name }} </h4>
</div>
<div class="modal-body">

    <form id="createUser" name="createUser" class="form-horizontal form-label-left input_mask">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $user[0]->id }}">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombres" value="{{ $user[0]->name }}">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" value="{{ $user[0]->last_name }}">
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Correo" value="{{ $user[0]->email }}" Disabled>
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="number" class="form-control" id="tel" name="tel" placeholder="Número Telefonico" value="{{ $user[0]->tel }}">
            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <select id="rol" name="rol" class="form-control selc-empresa" >
                <option value="{{ $user[0]->rol_id }}">{{ $user[0]->name_rol }}</option>
                <option value="1">Admnistrador </option>
                <option value="2">Poligrafista</option>
            </select> 
            <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
        </div> 
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="password" class="form-control" id="password" name="password" placeholder="Clave" value="">
            <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="password" class="form-control has-feedback-left" id="password_confirmation" name="password_confirmation" placeholder="Repetir Clave">
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
        </div>
        <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
            <div class="ln_solid"></div>

        </div>
        <div class="modal-footer">

            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="h" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>

<script src="js/validate/fn-updateUser.js"></script>