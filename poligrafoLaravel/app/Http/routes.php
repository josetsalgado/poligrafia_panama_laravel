<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//index del loguin
Route::get('/', 'HomeController@index');

//post login
Route::post('auth/login', 'Auth\AuthController@postLogin');

//logout
Route::get('logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => 'auth'], function () {

    //index del dashboard
    Route::get('/dashboard_home', 'DashboardController@index');

    //create appoiment dashboard
    Route::post('/create_quote_dasboard', 'DashboardController@CreateAppoiment');
    
    //create appoiment dashboard
    Route::get('/edit_quote_dasboard/{id}', 'DashboardController@EditAppoiment');

    //no se sabe para que es
    Route::get('/quotes', 'QuotesController@index');

    //crear usuario
    Route::get('/create_user', 'UserController@create');

    //insert user db usuario
    Route::post('/create_user', 'UserController@store');

    //mostrar todos los usuarios
    Route::get('/show_user', 'UserController@show');

    //informacion de un usuario por id
    Route::post('/update_user', 'UserController@update');

    //actualizar perfil
    Route::post('/update_profile', 'UserController@updateProfile');

    //actualizar datos del usuario por id
    Route::get('/show_user/{id}', 'UserController@edit');

    //solicitudes de citas
    Route::get('/quotes_client', 'QuotesController@index');

    //crear citas
    Route::post('/create_quote', 'QuotesController@store');

    //lista de citas que se cargaran en el calendario
    Route::get('/getQuotes', 'QuotesController@getQuotes');

    //solicitudes de citas
    Route::get('/appoiment_company/{code}', 'QuotesController@getClient');

    //iditar una cita
    Route::get('/editQuote/{id}', 'QuotesController@edit');

    //actualizar datos de la cita
    Route::post('/update_quote', 'QuotesController@update');

    //solicitudes de cotizaciones
    Route::get('/butget_client', 'BudgetController@create');

    //post crear cotizacion
    Route::post('/create_butget', 'BudgetController@storm');

    //ver cotizaciones
    Route::get('/butget_show', 'BudgetController@show');

    //modal de ver cotizacion
    Route::get('/modalBudget/{id}', 'BudgetController@modalShowBudget');

    //modal de crear cotizaciones
    Route::post('/modalCrateBudget', 'BudgetController@modalCrateBudget');
    
    //pdf de crear cotizaciones
    Route::get('/pdfCrateBudget', 'BudgetController@pdfCrateBudget');
    
    //pdf cotizaciones
    Route::get('/pdf_butget/{id}', 'BudgetController@pdfBudget');

    //Crear registro de resultados
    Route::get('/create_result', 'ResultController@create');

    //vista crear nuevo producto
    Route::get('/create_product', 'ServiceController@create');

    //crear nuevo producto en la bd
    Route::post('/create_product', 'ServiceController@store');

    //ver lista de productos
    Route::get('/show_product', 'ServiceController@show');

    //editar un producto
    Route::get('/show_product/{id}', 'ServiceController@edit');

    //actualizar informacion de un cliente 
    Route::post('/update_service', 'ServiceController@update');

    //borrar servicios
    Route::get('/delete_service/{id}', 'ServiceController@destroy');

    //registrar resultados
    Route::get('/record_result', 'ResultController@create');

    //registro de calidad de pruebas
    Route::get('/quality_test', 'ResultController@show');

    //editar perfil de usuario
    Route::get('/edit_user', 'EditUserController@edit');

    //informe de Prueba de resultados
    Route::get('/test_report', 'TestReportController@show');

    //pdf estado de cuenta
    Route::get('/pdf_account', 'AccountStatusController@pdfE');

    //crear empresa
    Route::get('/create_company', 'CompanyController@create');

    //crear empresas post form
    Route::post('/create_company', 'CompanyController@store');

    //editar empresa vista
    Route::get('/edit_company/{id}', 'CompanyController@update');

    //editar empresa form
    Route::post('/edit_company', 'CompanyController@edit');

    //ver empresas
    Route::get('/show_company', 'CompanyController@show');

    //eliminar compañias
    Route::get('/delete_company/{id}', 'CompanyController@delete');

    //crear cliente
    Route::get('/create_client', 'ClientController@create');

    //insertar registros del cliente en la bd y validar los mismos
    Route::post('/create_client', 'ClientController@store');

    //mostrar clientes
    Route::get('/show_client', 'ClientController@show');

    //editar un clientes por id
    Route::get('/show_client/{id}', 'ClientController@edit');

    //actualizar informacion de un cliente
    Route::post('/update_client', 'ClientController@update');

    //borrar clientes
    Route::get('/delete_client/{id}', 'ClientController@destroy');

    //crear cliente y empresa del modal +
    Route::post('/create_client_company', 'ClientCompanyController@store');

    //registro de pago
    Route::get('/payment_record', 'AccountStatusController@show');

    //Ver estados de cuenta
    Route::get('/show_accountstatus', 'AccountStatusController@accountStatus');

    //modal para crear pago de estado de cuentas
    Route::get('/create_payment/{id}', 'AccountStatusController@createPayment');

    //modal para crear pago de estado de cuentas
    Route::get('/payment_observations/{id}', 'AccountStatusController@paymentObservation');

    //modal para crear pago de estado de cuentas
    Route::post('/create_payment', 'AccountStatusController@update');

    //Pdf de informe de prueba
    Route::get('/pdf_test', 'TestReportController@pdfresult');

    //reporte estado de cuenta
    Route::get('/account_report', 'ReportAccountController@accountstatus');

    //reporte evaluaciones poligraficas
    Route::get('/evaluations_report', 'ReportAccountController@evaluations');
    
    //enviar ciuades por variables de session
    Route::get('/city/{name}', function($name){
    //$request->session()->put('city', $name);
        session(['city' => $name]);
        return "bien";
    });

    //cotizaciones envio de correo
    Route::get('sendhtmlemail_cotizacion','MailController@html_email_budget') ;

    //retenciones envio de correo
    Route::get('sendhtmlemail_retencion/{id}','MailController@html_email_retencion') ;

    //Vista interna de tareas
    Route::get('homework','HomeworkController@show') ;

     //Crear tareas
    Route::post('homework_create', 'HomeworkController@CreateHomework');

    //Actualizar estatus de tareas
    Route::post('homework_update/id', 'HomeworkController@edit');

    //Eliminar tareas
    Route::get('/delete_homework/{id}', 'HomeworkController@delete');

    //dashboard tareas
 //   Route::get('homework','HomeworkController@show') ;

    //pdf de reporte estado de cuenta
    Route::get('pdf_account_report','ReportAccountController@pdf') ;

    //detalle de informe de prueba
    Route::get('detail_informe_prueba','TestReportController@detail') ;

    //strore para registro de resultados de poligrafia
    Route::post('result_create', 'ResultController@store');




});