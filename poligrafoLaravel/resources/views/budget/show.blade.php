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
                                <th>Razón Social</th>
                                <th>Fecha</th>
                                <th>Evaluacion Poligrafica</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>
                                <th>#Pago</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($budgets as $budget)
                                <tr>
                                    <td>
                                        {{ $budget->company_id[0]->name_company }}
                                    </td>
                                    <td>
                                        {{ $budget->date_init_budget }}
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach($budget->budgets_register_id as $budgetRegister)
                                                <li>{{ $budgetRegister->quantity_budget }} {{ $budgetRegister->service_id[0]->name_service }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach($budget->budgets_register_id as $budgetRegister)
                                                <li>$ {{ $budgetRegister->service_id[0]->price_service }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        $ {{ $budget->total_budget }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" onclick="modalBudget('{{ $budget->id_budget }}');"><i class="fa fa-money"></i> Ver</button><br>
                                        <a href="pdf_butget/{{ $budget->id_budget }}" target="_blank"type="button" class="btn btn-success btn-xs" style=""><i class="fa fa-download"></i>PDF</a>
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
    
    
    <script src="js/validate/fn-reportBudget.js"></script>
@stop
