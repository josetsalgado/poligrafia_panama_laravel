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
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-credit-card"></i> Pagar</button><br>
                                            {{-- status --}}
                                            @if ($budget->date_init_budget[0]['dateRange'] > 30)
                                                <div class="btn btn-danger btn-xs"><i class="fa fa-close"></i>  Vencido </div><br>
                                            @else
                                                <div class="btn btn-success btn-xs"><i class="fa fa-check"></i>  Pagado </div><br>
                                            @endif
                                            <a href="show_accountstatus" class="btn btn-dark btn-xs"><i class="fa fa-bar-chart-o"></i>  Estado de Cuenta </a>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-money"></i> Agregar Pago </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">N° Factura Fiscal:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="factura" name="factura" placeholder="TBSR110000623-00003021">
                        <span class="fa fa-file-text-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Forma de Pago:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <select id="foma-pago" name="forma-pago" class="form-control selc-empresa" required>
                            <option value="">Seleccione</option>
                            <option value="cheque">Cheque</option>
                            <option value="ach">ACH</option>
                            <option value="tarjeta-de-credito">Tarjeta de crédito</option>
                            <option value="transferencia-electronica">transferencia electrónica</option>
                        </select> 
                        <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Monto a Pagar:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="monto-pagar" name="monto-pagar" placeholder="1500.00">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Descuento:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="descuento" name="descuento" placeholder="1500.00">
                        <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                    </div> 
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group has-feedback">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                        <span class="fa fa-comment form-control-feedback left" aria-hidden="true"></span>
                    </div>      
                </div>
                <div class="modal-footer">

                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-eye-slash "></i> Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Pagar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- footer content -->
@stop
