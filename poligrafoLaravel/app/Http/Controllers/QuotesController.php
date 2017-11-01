<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Client;
use App\Company;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Payment;
use App\Service;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use function trans;
use function view;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $companys = Company::All();
        $clients = Client::All();
        $users = User::All();
        $services = Service::All();
        $appoiments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_patients.id_patient', '=', 'itcp_appoiments.patient_id')
                ->select('name_patient AS title', 'date_appoiment AS start')
                ->get();
        $appoiments = json_encode($appoiments);
        
        return view('quotes.index', compact("clients", "users", "services", "appoiments", "companys"));
    }
    /**
     * get quotes of mounth
     *
     */
   
    
        public function getQuotes(Request $request)
    {
        $appoiments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_patients.id_patient', '=', 'itcp_appoiments.patient_id')
                ->select('id_appoiment AS id', 'name_patient AS title', 'date_appoiment AS start')
                ->where('itcp_appoiments.city_appoiment', '=', $request->session()->get('city'))
                ->get();
        return view("quotes.getQuotes", compact("appoiments"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    
    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */
    public function validateCreate($request)
    {
        
        $this->validate($request,[
                'client' => 'required',
                'schedule' => 'required',
                'service' => 'required',
                'candidateName' => 'required',
                'candidateLastname' => 'required',
                'ciCandidate' => 'required|numeric',
                'jobCandidate' => 'required',
                'telCandidate' => 'required|numeric',
                'descriptionCandidate' => 'required',
            ], 
            [
                'client.required' => trans("validations.input_required", ['input' => 'cliente']),
                'schedule.required' => trans("validations.input_required", ['input' => 'horario']),
                'service.required' => trans("validations.input_required", ['input' => 'tipo de prueba']),
                'candidateName.required' => trans("validations.input_required", ['input' => 'nombre']),
                'candidateLastname.required' => trans("validations.input_required", ['input' => 'apellido']),
                'ciCandidate.required' => trans("validations.input_required", ['input' => 'cedula']),
                'ciCandidate.numeric' => trans("validations.input_format", ['input' => 'cedula']),
                'jobCandidate.required' => trans("validations.input_required", ['input' => 'puesto']),
                'telCandidate.required' => trans("validations.input_required", ['input' => 'celular']),
                'telCandidate.numeric' => trans("validations.input_format", ['input' => 'celular']),
                'descriptionCandidate.required' => trans("validations.input_required", ['input' => 'comentario']),
                
            ]
        );
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request  $request)
    {
        //insertar data paciente
        Patient::insert([
          'id_patient' => '',
          'name_patient' => $request->candidateName,
          'last_name_patient' => $request->candidateLastname,
          'ci_patient' => $request->ciCandidate,
          'job_patient' => $request->jobCandidate,
          'phone' => $request->telCandidate,
        ]);
        //insertar data de la cita
        
        Appoiment::insert([
          'id_appoiment' => '',
          'service_id' => intval($request->service),
          'company_id' => intval($request->empresa),
          'client_id' => intval($request->client),
          'patient_id' => intval(Patient::all()->last()->id_patient),
          'city_appoiment' => $request->session()->get('city'),
          'date_appoiment' => $request->dateEpoch,
          'time_appoiment' => $request->schedule,
          'comentary_appoiment' => $request->descriptionCandidate,
          'status' => 'Pendiente',
        ]);
        
        
        //primero valido que la empresa exista si existe creo su primer cobro si no proceso la actualzacion del precio a cobrar
        $paymentCompanyCount = Appoiment::where('company_id', '=',$request->empresa)->count();
        //traer consulta tabla pagos relacionado con el ultimo de esa compañia
        $payForCompany = Payment::where('company_id', '=',$request->empresa)->orderBy('id_payment', 'desc')->take(1)->get();
        
        //crear 
        if($paymentCompanyCount == 1){
            Payment::insert([
                'company_id' => intval($request->empresa),
                'full_payment' => "0",
            ]); 
        } else{
            if ($payForCompany[0]->amount_payable >= $payForCompany[0]->full_payment) {
                Payment::insert([
                    'company_id' => intval($request->empresa),
                    'full_payment' => "0",
                ]);
            }
        }
        
    }

    public function getTotalPay($empresa){
        $total = 0;
        
        //traer informacion de la tabla citas con la asociados a la compañia seleccionada
        $appoimentPay = Appoiment::where('company_id', '=',$empresa)->orderBy('id_appoiment', 'desc')->take(1)->get();
        
        foreach ($appoimentPay as $appoimentP){
            $appoimentP->service_id = $this->getRelationship($appoimentP->service_id, 'itcp_service', 'id_service');
            $appoimentP->company_id = $this->getRelationship($appoimentP->company_id, 'itcp_companys', 'id_company');
        }
        
        if ($appoimentPay[0]->service_id[0]->name_service == "Pre-empleo") {
            ($appoimentPay[0]->company_id[0]->cost_test_pre_employment) ? $total = $total + $appoimentPay[0]->company_id[0]->cost_test_pre_employment : $total = $total + $appoimentPay[0]->service_id[0]->price_service;
        }
        if ($appoimentPay[0]->service_id[0]->name_service == "Especifica") {
            ($appoimentPay[0]->company_id[0]->cost_specific_test) ? $total = $total + $appoimentPay[0]->company_id[0]->cost_specific_test : $total = $total + $appoimentPay[0]->service_id[0]->price_service;
        }
        if ($appoimentPay[0]->service_id[0]->name_service == "Rutina") {
            ($appoimentPay[0]->company_id[0]->cost_routine_test) ? $total = $total + $appoimentPay[0]->company_id[0]->cost_routine_test : $total = $total + $appoimentPay[0]->service_id[0]->price_service;
        }
        if ($appoimentPay[0]->service_id[0]->name_service == "Reevaluación") {
            ($appoimentPay[0]->company_id[0]->reevaluation_test_cost) ? $total = $total + $appoimentPay[0]->company_id[0]->reevaluation_test_cost : $total = $total + $appoimentPay[0]->service_id[0]->price_service;
        }
        return $total;
    }


    public function getRelationship($id_client, $tb,$tbgRelationship){
        return DB::table($tb)
            ->select('*')
            ->where($tb.'.'.$tbgRelationship, '=', $id_client)
            ->get();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
        $companys = Company::All();
        $clients = Client::All();
        $users = User::All();
        $services = Service::All();
        
        $getQuote = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->join('itcp_companys', 'itcp_appoiments.company_id', '=', 'itcp_companys.id_company')
                ->join('itcp_service', 'itcp_appoiments.service_id', '=', 'itcp_service.id_service')
                ->join('itcp_clients', 'itcp_appoiments.client_id', '=', 'itcp_clients.id_client')
                ->where('itcp_appoiments.id_appoiment', '=', $id)
                ->select('*')
                ->get();
        
        $getUser = DB::table('itcp_appoiments')
                ->join('users', 'itcp_appoiments.user_id', '=', 'users.id')
                ->where('itcp_appoiments.id_appoiment', '=', $id)
                ->select('*')
                ->get();
        
        return view("quotes.editQuote", compact("getQuote", "companys", "clients", "users", "services", "getUser"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        
        $getStatusIni = Appoiment::where('id_appoiment', '=',$request->id)->get();
        
        Patient::where("id_patient", "=", $request->id_patient)
                ->update(array(
                    "name_patient" => $request->candidateNameEdit,
                    "last_name_patient" => $request->candidateLastnameEdit,
                    "ci_patient" => $request->ciCandidateEdit,
                    "job_patient" => $request->jobCandidateEdit,
                    "phone" => $request->telCandidateEdit,
        ));

        
        Appoiment::where("id_appoiment", "=", $request->id)
                ->update(array(
                    "user_id" => $request->polygraphist,
                    "service_id" => $request->serviceEdit,
                    "company_id" => $request->empresaEdit,
                    "client_id" => $request->clientEdit,
                    "patient_id" => Patient::where("id_patient", $request->id_patient)->get()[0]->id_patient,
                    "city_appoiment" => $request->session()->get('city'),
                    "time_appoiment" => $request->scheduleEdit,
                    "comentary_appoiment" => $request->descriptionCandidateEdit,
                    "status" => $request->statusEdit,
                    "time_arrival" => $request->time_arrival
        ));
        //traer consulta tabla pagos relacionado con el ultimo de esa compañia
        $payForCompany = Payment::where('company_id', '=',$request->empresaEdit)->orderBy('id_payment', 'desc')->take(1)->get();
        
        //traer consulta tabla pagos relacionado con el ultimo de esa compañia
        $getStatusFinish = Appoiment::where('id_appoiment', '=',$request->id)->get();
        
        
//        if ($getApoiment[0]->status == "Asistió") {
        if ((($getStatusIni[0]->status == "Pendiente") || ($getStatusIni[0]->status == "No Asistió") || ($getStatusIni[0]->status == "Re-agendada")) && ($getStatusFinish[0]->status == "Asistió")) {
            Payment::where('id_payment', $payForCompany[0]->id_payment)
                    ->update([
                        'full_payment' => $payForCompany[0]->full_payment + $this->getTotalPay($request->empresaEdit),
            ]);
        }if(($getStatusIni[0]->status == "Asistió") && (($getStatusFinish[0]->status == "No asistió") || ($getStatusFinish[0]->status == "Re-agendada") || ($getStatusFinish[0]->status == "Pendiente"))){
            Payment::where('id_payment', $payForCompany[0]->id_payment)
                    ->update([
                        'full_payment' => $payForCompany[0]->full_payment - $this->getTotalPay($request->empresaEdit),
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Get company form the specified resource from storage.
     *
     * @param  int  $code
     * @return Response
     */
    public function getClient($code)
    {
        $companys = DB::table('itcp_clients')
                ->join('itcp_companys', 'itcp_clients.company_id', '=', 'itcp_companys.id_company')
                ->where('itcp_companys.id_company', '=', $code)
                ->select('*')
                ->get();
        return view("quotes.getClient", compact("companys"));    
    }
}
