@extends('layouts.default')
@section('content')

    <!-- page content -->

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
                    <h2>Cotizaciones por Clientes</h2>
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
                            <th>Fecha</th>
                            <th>Empresa</th>
                            <th>Cliente</th>
                            <th>N° Telefonico</th>
                            <th>Correo</th>
                            <th>Cargo</th>
                            <th>Observaciones</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($budgets as $budget)
                            <tr>
                                <td>{{ $budget->date_init_budget or '' }}</td>
                                <td>{{ $budget->company_id[0]->name_company or '' }}</td>
                                <td>{{ $budget->client_id[0]->name_client  or '' }}</td>
                                <td>{{ $budget->company_id[0]->tel_company  or '' }}</td>
                                <td>{{ $budget->client_id[0]->email_client  or '' }}</td>
                                <td>{{ $budget->client_id[0]->position  or '' }}</td>
                                <td>{{ $budget->observations  or '' }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" onclick="modalBudget('{{ $budget->id_budget }}');"><i class="fa fa-money"></i> Ver</button>
                                    <a href="pdf_butget/{{ $budget->id_budget }}" target="_blank"type="button" class="btn btn-success btn-xs" style=""><i class="fa fa-download"></i>PDF</a>
                                    <button type="button" class="btn btn-dark btn-xs"><i class="fa fa-envelope"></i> Enviar </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>


    <!-- /page content -->
    


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog"></div>
    <!-- /. modal -->

    <script src="js/validate/fn-modalShowBudget.js"></script>

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
