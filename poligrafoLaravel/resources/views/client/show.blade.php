@extends('layouts.default')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Clientes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
               
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>{{ trans("poligrafo.name") }}</th>
                                <th>{{ trans("poligrafo.tel") }}</th>
                                <th>{{ trans("poligrafo.email") }}</th>
                                <th>{{ trans("poligrafo.city") }}</th>
                                <th>{{ trans("poligrafo.edit") }}</th>
                                <th>{{ trans("poligrafo.position") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name_client }}</td>
                                    <td>{{ $client->tel_client }}</td>
                                    <td>{{ $client->email_client }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->position }}</td>
                                    <td>
                                        <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" href="show_client/{{ $client->id_client }}"><i class="fa fa-pencil"></i> {{ trans("poligrafo.edit") }}</a>
                                        <button class="btn btn-danger btn-xs" id="delete" name="delete" value="{{ $client->id_client }}" onclick="fnDelete('{{ $client->id_client }}')" data-toggle="tooltip" data-placement="right">
                                            <i class="fa fa-trash-o"></i> {{ trans('poligrafo.delete') }} </a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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

    <script src="js/validate/fn-deleteClient.js"></script>

    <script type="text/javascript">
        $('#datatable-responsive').DataTable( {
            language: {
                search: "Buscar",
                paginate: {
                    first:      "Primero",
                    previous:   "<",
                    next:       ">",
                    last:       "Último"
                },
                info:           "",
                "lengthMenu":     "_MENU_"
            }
        } );
    </script>
    

@stop