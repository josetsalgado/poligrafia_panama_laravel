<div id="form-error"></div>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><i class="fa fa-edit"></i>{{ trans("poligrafo.edit_user", ["modal" => "producto"]) }}</h4>
</div>
<div class="modal-body">
    <form id="updateService" name="updateService" class="form-horizontal form-label-left input_mask">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" id="id" name="id" value="{{ $models[0]->id_service }}">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombre del producto" value="{{ $models[0]->name_service }}" disabled>
            <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control" id="price" name="price" placeholder="Precio" value="{{ $models[0]->price_service }}">
            <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
        </div>


        <div class=" col-md-12 col-sm-6 col-xs-12 form-group">
            <textarea class="resizable_textarea form-control" id="description" name="description" placeholder="Descripción">{{ $models[0]->description_service }}</textarea>
            <span class="fa fa-sort-alpha-desc form-control-feedback right" aria-hidden="true"></span>
        </div>


        <div class="modal-footer">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

</div>


<script src="js/validate/fn-updateService.js"></script>