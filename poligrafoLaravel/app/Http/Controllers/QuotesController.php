<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Client;
use App\Company;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Service;
use App\User;
use App\Payment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function trans;
use function view;
use Log;

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
        
        $models = Payment::where('company_id', '=',$request->empresa)->orderBy('id_payment', 'desc')->take(1)->get();
        if($models->full_payment){
            $models
        }else{
            
        }
        Payment::insert([
          'company_id' => intval($request->empresa),
        ]);
        
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
        
//        Payment::insert([
//          'id_patient' => '',
//          'name_patient' => $request->candidateName,
//          'last_name_patient' => $request->candidateLastname,
//          'ci_patient' => $request->ciCandidate,
//          'job_patient' => $request->jobCandidate,
//          'phone' => $request->telCandidate,
//        ]);
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
