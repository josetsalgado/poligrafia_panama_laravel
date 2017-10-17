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
                        <h2><i class="fa fa-money"></i> Registro de Pagos</h2>
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
                                    <th>Candidatos</th>
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
                                            {{ $budget->date_init_budget[0]['dateInit'] }}
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
                                                <li>Nicole Pearson</li>
                                                <li>Jhon Doe</li>
                                                <li>Jonas Brother</li>
                                                <li>Michael Jackson</li>
                                                <li>Shad friend</li>
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
                                            <div>
                                                <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" href="create_payment/{{ $budget->id_budget }}/{{ $budget->total_budget }}" ><i class="fa fa-credit-card"></i> Pagar</a>
                                            </div>
                                            @if ($budget->date_init_budget[0]['dateRange'] > 30)
                                                <div class="btn btn-danger btn-xs"><i class="fa fa-close"></i>  Vencido </div>
                                            @else
                                                <div class="btn btn-success btn-xs"><i class="fa fa-check"></i>  Pagado </div>
                                            @endif
                                            <div>
                                                <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
                                            </div>
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
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            
            </div>
        </div>
    </div>

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
