<div class="modal-dialog modal-lg">

    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="thumbnail thumbnail_logo">
                        <img src="images/logo.png">
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span>Tecnología y Profesionalismo que trabajan por la verdad <br> <b> R.U.C. 1631480-1-671929 D.V. 62</b></span>
                </div>
            </div>
        </div>
        <div class="modal-body">
            <!-- content modal -->
            <div class="">

                <section class="content invoice">
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                            <address>
                                @foreach($budgets as $budget)
                                        <p style="font-weight: bold;">Atencion: {{ $budget->client_id[0]->name_client  or '' }}</p>
                                        <p style="font-weight: bold; margin-left: 70px">{{ $budget->company_id[0]->name_company or '' }}</p>
                                @endforeach
                                <br>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col pull-right">
                            <address class="pull-right">
                                <strong >Panamá a {{ $budgets[0]->date_init_budget[0]["getDate"] }}</strong>
                                <br>
                                <br>
                            </address>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h5><b>¿Quiénes Somos?</b></h5>
                            <ul>
                                <li>
                                    Somos una empresa con más de  20 años de experiencia en todo el ámbito de la poligrafía, tenemos oficinas en la <b>Ciudad de Panamá, Provincias Centrales y Chiriquí.</b>
                                </li>
                                <li>
                                    Realizamos evaluaciones poligráficas con la más alta calidad y profesionalismo, <b>todos nuestros poligrafista son Psicólogos. </b>
                                </li>
                                <li>
                                    Somos la única empresa privada en Panamá,  que realiza proceso de control de calidad en todos sus procesos.
                                </li>
                            </ul>
                            <p>Contamos con una escuela de poligrafistas la cual está acreditada internacionalmente por la APA (AMERICAN POLYGRAPH ASSOCIATION), nuestro director es ex presidente de la APA y nuestra escuela a entrenado a la unidad de poligrafía de diversas instituciones gubernamentales en diferentes pises de Latinoamérica, desde México, hasta Argentina y en nuestro país, participó en el entrenamiento de las unidades de poligrafía de: La Policía Nacional, el Senan, Senafrond, Dirección de Migración entre otros. <br>
                                Somos distribuidores exclusivos de equipos poligráficos computarizados Lafayette en Panamá.</p> <br>
                            <h5><b>¿Por qué utilizar el polígrafo?</b></h5>
                            <p>El Polígrafo es utilizado mundialmente por gobiernos federales y sus diversas instituciones, servicios de inteligencia, instituciones militares, policía, agencias de investigación, así como seguimiento para procesos de libertad condicional. Los gobiernos ponen su confianza en esta herramienta científica, por su gran utilidad en la toma de decisiones. </p>
                            <p>En el sector privado, es una herramienta que permite conocer elementos de lealtad, honestidad y confiabilidad, en  áreas de investigación criminal, selección y reclutamiento de personal, así como también en las evaluaciones periódicas al personal activo, sobretodo en áreas sensibles.  </p>
                            <p>Estamos convencidos de que la correcta y puntual evaluación de estos factores tiene un impacto directo en la obtención de las metas de su organización y en el consecuente desarrollo exitoso.</p>
                            <p>A continuación le presentamos un resumen de nuestros servicios, y nos reiteramos nuevamente a sus órdenes en materia de evaluaciones poligráficas.</p> <br>
                            <h5><b>Tipos de Evaluaciones</b></h5>
                            <ul>
                                <li>
                                    <h5><b>Pre-empleo</b></h5>
                                    <p>En este tipo de evaluaciones se busca prevenir situaciones delicadas al conocer con anticipación elementos de honestidad y confiabilidad del candidato. El objetivo es  prevenir la entrada a su empresa de un delincuente ocupacional potencial. Se revisa y entrega en el reporte:
                                    <ul>
                                        <li>Honestidad:
                                            <ul>
                                                <li>En su vida diaria</li>
                                                <li>En su solicitud</li>
                                            </ul>
                                        </li>
                                        <li>Perfil básico de personalidad</li>
                                        <li>Antecedentes Personales</li>
                                        <li>Antecedentes laborales</li>
                                        <li>Actividades Delictivas</li>
                                        <li>Hábitos Personales (Consumo de alcohol y/o drogas)</li>
                                        <li>Antecedentes Penales, asociacion delictiva</li>
                                        <li>Motivos reales de salida de cada empleo y motivos reales por lo que desea ingresar a la empresa solicitante.</li>
                                    </ul>
                                    </p>
                                </li>
                                <li>
                                    <h5><b>Evaluaciones Periódicas</b></h5>
                                    <p>Es la llamada evaluación especial o específica, en donde se evalúa al individuo de quien se sospecha participación en cualquier actividad ilícita y consta de los siguientes puntos:
                                    <ul>
                                        <li>Autorización escrita del evaluado</li>
                                        <li>Análisis médico-psicológico del individuo para determinar la conveniencia de aplicar la evaluación</li>
                                        <li>Revisión del caso</li>
                                        <li>Aplicación y análisis de gráficas</li>
                                        <li>Emisión de un diagnóstico</li>
                                    </ul>
                                    </p>
                                </li>
                            </ul><br>
                            <h5><b>Casos susceptibles de evaluación</b></h5>
                            <p>Todos aquellos donde la veracidad en la declaración de una persona sea el factor determinante.</p><br>
                            <h5><b>Confiabilidad y Validez del uso del polígrafo</b></h5>
                            <p>Para probar la confiabilidad y validez del uso del polígrafo se han realizado más de 250  investigaciones a nivel mundial, en los cuales se han encontrado los siguientes porcentajes de validez:
                            <ul>
                                <li>90%  al 95%</li>
                            </ul>
                            </p><br>
                            <h5><b>Calidad y Profesionalismo</b></h5>
                            <ul>
                                <li>Una evaluación poligráfica tiene una duración aproximada de hora y media a 2 horas </li>
                                <li>Se lleva a cabo en apego estricto a las garantías individuales y a los derechos humanos. </li>
                                <li>Se garantiza el manejo de la confidencialidad de la información y respeto a la intimidad de los evaluados. </li>
                                <li>Nuestros poligrafistas cuentan con doble acreditación; nacional e internacional</li>
                                <li>Seguimiento estricto de los  estándares internacionales en el procedimiento</li>
                                <li>Nos acoplamos siempre a las necesidades del cliente, en cuanto al tipo de preguntas que ustedes quieran hacer.</li>
                            </ul><br>
                            <h5><b>Requisitos para el Evaluado</b></h5>
                            <ul>
                                <li>Que tenga conocimiento que viene a una prueba de polígrafo</li>
                                <li>Que sepa que va a estar al menos dos horas con nosotros en esta prueba</li>
                                <li>Que no esté visiblemente enfermo (con un resfriado y tos que no pueda ni hablar)</li>
                            </ul><br>
                            <h5><b>Forma de Pago</b></h5>
                            <p>Cheque, ACH, Tarjeta de crédito  o transferencia electrónica. Otorgamos crédito a 15 o 30 días.</p> <br>
                            <h5 class="text-center"><b>PRUEBAS POLIGRAFICAS EN PANAMA, PROVINCIAS CENTRALES DAVID</b></h5>
                            <div class="col-md-12">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive2" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>EVALUACIONES POLIGRÁFICAS <br>Pre empleo/Rutina</th>
                                                <th>COSTO UNITARIO <br>(No incluye ITBM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 a 4 prueba al mes</td>
                                                <td>B/.125.00</td>
                                            </tr>
                                            <tr>
                                                <td>5 ó más pruebas al mes</td>
                                                <td>B/.100.00</td>
                                            </tr>
                                            <tr>
                                                <td>10 o más pruebas al mes</td>
                                                <td>B/.80.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><hr>
                            <h5 class="text-center"><b>PRUEBAS POLIGRAFICAS EN PANAMA, PROVINCIAS CENTRALES DAVID</b></h5>
                            <div class="col-md-12">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive3" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>EVALUACIONES POLIGRÁFICAS <br>Especificas</th>
                                                <th>COSTO UNITARIO <br>(No incluye ITBM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 a 5 pruebas</td>
                                                <td>B/.150.00</td>
                                            </tr>
                                            <tr>
                                                <td>5 ó más pruebas al mes</td>
                                                <td>B/.135.00</td>
                                            </tr>
                                            <tr>
                                                <td>10 ó más pruebas al mes</td>
                                                <td>B/.115.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h5 class="text-center"><b>COTIZACIÓN</b></h5>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table">
                            <table id="datatable-responsive4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>EVALUACION POLIGRÁFICA </th>
                                        <th>COSTO UNITARIO</th>
                                        <th>VALOR TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($budgets[0]->budgets_register_id as $budget)
                                    <tr>
                                        <td>{{ $budget->quantity_budget }} {{ $budget->service_id[0]->name_service }}</td>
                                        <td>B/. {{ $budget->price_service }}</td>
                                        <td>B/. {{ $budget->total_budget }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-9 pull-right">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>SUBTOTAL </th>
                                        <td>B/.760.00</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>ITBM</th>
                                        <td>EXCENTO</td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL</th>
                                        <td>B/.760.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /content modal -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>