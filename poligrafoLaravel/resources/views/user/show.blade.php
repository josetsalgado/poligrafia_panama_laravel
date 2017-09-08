@extends('layouts.default')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Usuarios</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                            </div>

                            <div class="clearfix"></div>
                            
                            @foreach ($users as $user)
                                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <div class="left col-xs-7">
                                            <h2>{{ $user->name_user }}</h2>
                                            <h2>{{ $user->last_name_user }}</h2>
                                            <!--TODO: agregar cadena (JS)-->
                                            <p><strong>{{ trans("poligrafo.email") }}: </strong> {{ $user->email_user }} </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-phone"></i> {{ trans("poligrafo.tel") }} #: {{ $user->tel_user }} </li>
                                            </ul>
                                        </div>
                                        <div class="right col-xs-5 text-center">
                                            <img src="images/user.png" alt="" class="img-circle img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 bottom text-center">
                                        <div class="col-xs-12 col-sm-6 emphasis">
                                            <p class="ratings">
                                                <a>{{ $user->name_rol }}</a>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 emphasis">
                                            <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" href="show_user/{{ $user->id_user }}" ><i class="fa fa-edit"></i> Editar Usuario</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            
            </div>
        </div>
    </div>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
@stop