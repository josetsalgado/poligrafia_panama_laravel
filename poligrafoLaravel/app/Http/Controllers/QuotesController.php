<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use App\User;
use App\Service;
use App\Patient;
use App\Appoiment;
use Carbon\Carbon;
use DB;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::All();
        $users = User::All();
        $services = Service::All();
        $appoiments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_patients.id_patient', '=', 'itcp_appoiments.patient_id')
                ->select('name_patient AS title', 'date_appoiment AS start')
                ->get();
        $appoiments = json_encode($appoiments);
        
        return view('quotes.index', compact("clients", "users", "services", "appoiments"));
    }
    /**
     * get quotes of mounth
     *
     */
   
    
    public function getQuotes()
    {
        $appoiments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_patients.id_patient', '=', 'itcp_appoiments.patient_id')
                ->select('name_patient AS title', 'date_appoiment AS start')
                ->get();
        return view("quotes.getQuotes", compact("appoiments"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
                'polygraphist' => 'required',
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
                'polygraphist.required' => trans("validations.input_required", ['input' => 'poligrafista']),
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $this->validateCreate($request);
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
          'user_id' => intval($request->polygraphist),
          'client_id' => intval($request->client),
          'patient_id' => intval(Patient::all()->last()->id_patient),
          'city_appoiment' => 'Ciudad de panama',
          'date_appoiment' => $request->dateEpoch,
          'time_appoiment' => $request->schedule,
          'comentary_appoiment' => $request->descriptionCandidate,
            
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
