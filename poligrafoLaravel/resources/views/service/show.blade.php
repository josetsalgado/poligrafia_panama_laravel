@extends('layouts.default')
@section('content')
    <div id="form-errors"></div>
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
                    <h2><i class="fa fa-file-text"></i> Productos</h2>
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
                                <th>Nombre del Producto</th>
                                <th>Precio</th>
                                <th>Descripción</th>
                                <th>#edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->name_service }}</td>
                                    <td>{{ $service->price_service }}</td>
                                    <td>{{ $service->description_service }}</td>
                                    <td>  
                                        <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" href="show_product/{{ $service->id_service }}"><i class="fa fa-pencil"></i> {{ trans("poligrafo.edit") }}</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
@stop