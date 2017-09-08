@extends('layouts.default')
@section('content')

@if(count($errors))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.
		<br/>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
    <div id="form-errors"></div>
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ trans("poligrafo.new_module", ["module" => "producto"]) }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="create_product" method="POST" class="form-horizontal form-label-left input_mask">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="images/verificacion.png" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="{{ trans("poligrafo.name") }}">
                                    <span class="fa fa-hospital-o form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="number" class="form-control has-feedback-left" id="price" name="price" placeholder="{{ trans("poligrafo.price") }}">
                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class=" col-md-8 col-sm-6 col-xs-12 form-group">
                                    <textarea id="description" name="description" class="resizable_textarea form-control" placeholder="{{ trans("poligrafo.description") }}"></textarea>
                                    <span class="fa fa-sort-alpha-desc form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="ln_solid"></div>

                                </div>

                                <div class="form-group">

                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop