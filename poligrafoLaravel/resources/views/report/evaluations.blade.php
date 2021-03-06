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
                        <h2><i class="fa fa-clipboard"></i> Reporte por Evaluaciones Poligraficas</h2>
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
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="pais" class="form-control selc-empresa" required>
                                        <option value="">Empresa</option>
                                        <option value="empresa1">Coca cola</option>
                                        <option value="empresa2">B&G</option>
                                        <option value="empresa3">Pepsi</option>
                                    </select>
                                    <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="poligrafista" name="poligrafista" class="form-control selc-empresa" required>
                                        <option value="">Poligrafista</option>
                                        <option value="evaluado1">Poligrafista 1</option>
                                        <option value="evaluado2">Poligrafista 2</option>
                                        <option value="evaluado3">Poligrafista 3</option>
                                        <option value="evaluado4">Poligrafista 4</option>
                                        <option value="evaluado5">Poligrafista 5</option>
                                    </select>
                                    <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                    <div id="reportrange2" class="pull-right timeRange">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>Octubre 30, 2017 - Noviembre 28, 2017</span>       <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Empresa</th>
                                    <th>Candidato</th>
                                    <th>Evaluacion Poligrafica</th>
                                    <th>Poligrafista</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>23/09/2017</td>
                                    <td>Coca Cola</td>
                                    <td> Nicole Pearson</td>
                                    <td>Pruebas Especificas</td>
                                    <td>Poligrafista</td>
                                </tr>
                                <tr>
                                    <td>23/09/2017</td>
                                    <td>Coca Cola</td>
                                    <td>Nicole Pearson</td>
                                    <td>Pruebas Especificas</td>
                                    <td>Poligrafista</td>
                                </tr>
                                <tr>
                                    <td>23/09/2017</td>
                                    <td>Coca Cola</td>
                                    <td>Nicole Pearson</td>
                                    <td>Pruebas Especificas</td>
                                    <td>Poligrafista</td>
                                </tr>
                                <tr>
                                    <td>23/09/2017</td>
                                    <td>Coca Cola</td>
                                    <td>Nicole Pearson</td>
                                    <td>Pruebas Especificas</td>
                                    <td>Poligrafista</td>
                                </tr>
                                <tr>
                                    <td>23/09/2017</td>
                                    <td>Coca Cola</td>
                                    <td>Nicole Pearson</td>
                                    <td>Pruebas Especificas</td>
                                    <td>Poligrafista</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

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
    <script type="text/javascript">
        $('#reportrange2').daterangepicker({
            "showDropdowns": true,
            "locale": {
                "direction": "ltr",
                "format": "MM/DD/YYYY HH:mm",
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
            "startDate": "07/01/2015",
            "endDate": "07/15/2015",
            ranges: {
                'Hoy': [moment(), moment()],
                'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Los últimos 7 días': [moment().subtract(6, 'days'), moment()],
                'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
                'Este mes': [moment().startOf('month'), moment().endOf('month')],
                'El mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, function(start, end, label) {
            console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
    </script>

@stop