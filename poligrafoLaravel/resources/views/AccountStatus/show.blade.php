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
                <h2><i class="fa fa-money"></i> Cuenta por Cobrar</h2>
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
                            <th>Factura Fiscal</th>
                            <th>Empresa</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>ITBMS</th>
                            <th>Retención</th>
                            <th>Monto Neto <br> a Pagar</th>
                            <th>#Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accountStatus as $accountStatu)
                        <tr>
                            <td>
                                <div>
                                    {{ $accountStatu->tax_invoice_number or '' }}
                                </div>
                                <div>
                                    @if(!$accountStatu->amount_payable)
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" onclick="modalPayment('{{ $accountStatu->id_payment }}');"><i class="fa fa-plus-circle"></i> Facturar</button>
                                    @elseif(($accountStatu->amount_payable ) && ($accountStatu->amount_payable < $accountStatu->full_payment))
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Pagar</button>
                                    @elseif(($accountStatu->amount_payable ) && ($accountStatu->amount_payable >= $accountStatu->full_payment))
                                    <a href="sendhtmlemail_retencion"><button type="button" class="btn-click btn btn-success btn-xs"><i class="fa fa-envelope"></i> Solicitar Comprobante</button></a>
                                    @endif

                                     <button onclick="sendRetention('{{$accountStatu->company_id[0]->id_company }}')" type="button" class="btn-click btn btn-success btn-xs"><i class="fa fa-envelope"></i> Solicitar Comprobante</button>

                                </div>
                            </td>
                            <td>{{ $accountStatu->company_id[0]->name_company or ''}}</td>
                            <td>29/11/2017</td>
                            <td>{{ $accountStatu->full_payment or ''}}</td>
                            <td>
                                <?php
                                if ($accountStatu->company_id[0]->retention_type == "ninguno") {
                                    echo "7";
                                }
                                if ($accountStatu->company_id[0]->retention_type == "excento") {
                                    echo "7";
                                }
                                if ($accountStatu->company_id[0]->retention_type == "3.4") {
                                    echo "3.4";
                                } else {
                                    echo "";
                                }
                                ?>
                            </td>
                            <td>{{ $accountStatu->company_id[0]->retention_type or ''}}</td>
                            <td>
                                <?php
                                if ($accountStatu->company_id[0]->retention_type == "ninguno") {
                                    echo $accountStatu->full_payment + ($accountStatu->full_payment * 0.7);
                                }
                                if ($accountStatu->company_id[0]->retention_type == "excento") {
                                    echo "7";
                                }
                                if ($accountStatu->company_id[0]->retention_type == "3.4") {
                                    echo $accountStatu->full_payment + ($accountStatu->full_payment * 0.07) - (($accountStatu->full_payment * 0.07) * 0.34);
                                } else {
                                    echo "";
                                }
                                ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn btn-warning btn-xs" data-toggle="modal" data-target="#observaciones" onclick="modalObservations('{{ $accountStatu->id_payment }}')"><i class="fa fa-comments"></i> Observaciones</button> <br>
                                <div  class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i>  Pendiente por Facturar </div><br>
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


<!-- Modal Observaciones -->
<div class="modal fade" id="observaciones" role="dialog"></div>
<!-- /. Modal Observaciones -->


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog"></div>
<!-- /. modal -->

<script src="js/validate/fn-modalShowPayment.js"></script>
<!-- Custom Theme Scripts -->
<script src="js/build/js/custom.min.js"></script>
<script>
    function sendRetention(id) {

        $.ajax({
            type: "GET",
            url: "sendhtmlemail_retencion/"+id,
            success: function(data) {
                $(".close").click();
                alertify.success('Correo solicitando retencion enviado exitosamente');
                $("#datatable-responsive").load("payment_record #datatable-responsive");
            },error: function (err) {
                alert('correo no existe');
                console.log();
            }
        });


    }


                                                        $('#datatable-responsive').DataTable({
                                                language: {
                                                search: "Buscar",
                                                        paginate: {
                                                        first: "Primero",
                                                                previous: "<",
                                                                next: ">",
                                                                last: "Último"
                                                        },
                                                        info: "",
                                                        "lengthMenu": "_MENU_"
                                                }
                                                });
                                                        $(function () {
                                                        $('input[name="birthdate"]').daterangepicker({
                                                        singleDatePicker: true,
                                                                showDropdowns: true,
                                                                "locale": {
                                                                "direction": "ltr",
                                                                        "format": "MM/DD/YYYY",
                                                                        "separator": " - ",
                                                                        "applyLabel": "Aplicar",
                                                                        "cancelLabel": "Cancelar",
                                                                        "fromLabel": "From",
                                                                        "toLabel": "To",
                                                                        "customRangeLabel": "Personalizado",
                                                                        "daysOfWeek": [
                                                                                "Do",
                                                                                "Lu",
                                                                                "Ma",
                                                                                "Mi",
                                                                                "Ju",
                                                                                "Vi",
                                                                                "Sa"
                                                                        ],
                                                                        "monthNames": [
                                                                                "Enero",
                                                                                "Febrero",
                                                                                "Marzo",
                                                                                "Abril",
                                                                                "Mayo",
                                                                                "Junio",
                                                                                "Julio",
                                                                                "Agosto",
                                                                                "Septiembre",
                                                                                "Octubre",
                                                                                "Noviembre",
                                                                                "Diciembre"
                                                                        ],
                                                                        "firstDay": 1
                                                                },
                                                                "alwaysShowCalendars": true,
                                                                "startDate": "11/01/2017",
                                                        },
                                                                function (start, end, label) {
                                                                var years = moment().diff(start, 'years');
                                                                });
                                                                });
</script>
@stop
