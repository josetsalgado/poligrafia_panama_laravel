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
                    <h2><i class="fa fa-building"></i> Empresas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
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
                            <th>Razón Social</th>
                            <th>R.U.C</th>
                            <th>Cliente</th>
                            <th>Número Telefonico</th>
                            <th>Correo</th>
                            <th>Precios <br>de Evaluaciones</th>
                            <th>#editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companys as $company)
                            <tr>

                                <td>{{ $company->name_company or '' }}</td>
                                <td>{{ $company->ruc_company or '' }}</td>

                                <td>
                                    <ul>
                                        @foreach($company->client_id as $client)
                                        <li>{{ $client->name_client }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{ $company->tel_company or '' }}</td>
                                <td>{{ $company->email_compamy or '' }}</td>
                                <td>
                                    <ul>

                                        <?php
                                        if($company->cost_test_pre_employment){
                                            echo "<li>Pre-empleo B/. ".$company->cost_test_pre_employment."</li>";
                                        }
                                        ?>


                                        <?php
                                        if($company->cost_specific_test){
                                            echo "<li>Especifica B/. ".$company->cost_specific_test."</li>";
                                        }
                                        ?>

                                        <?php
                                        if($company->cost_routine_test){
                                            echo "<li>Rutina B/. ".$company->cost_routine_test."</li>";
                                        }
                                        ?>

                                    </ul>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"  onclick="edit_company('{{ $company->id_company }}')"><i class="fa fa-pencil"></i> {{ trans("poligrafo.edit") }}</a>
                                    <button class="btn btn-danger btn-xs" id="delete" name="delete" value="{{ $company->id_company }}" onclick="fnDelete('{{ $company->id_company }}')" data-toggle="tooltip" data-placement="right">
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
    </div>

    <!-- /page content -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog"></div>

    <script src="js/validate/fn-updateCompany.js"></script>
    <script src="js/validate/fn-deleteCompany.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

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