<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
use App\Company;
use App\Service;
use App\Patient;
use App\Appoiment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use function view;
use App\Client;
use Carbon\Carbon;

class DashboardController extends Controller
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
        
        //ultimas citas del dia
        $lastAppointments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->join('itcp_companys', 'itcp_appoiments.company_id', '=', 'itcp_companys.id_company')
                ->where("itcp_appoiments.date_appoiment", "=", Carbon::now()->format('Y-m-d'))
                ->get();
        
        //insert date in object estatus pendiente
        $this->insertDate($lastAppointments);
        
        
        //ultimas citas del dia siguiente
        $tomorrowAppointments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->join('itcp_companys', 'itcp_appoiments.company_id', '=', 'itcp_companys.id_company')
                ->where("itcp_appoiments.date_appoiment", "=", Carbon::tomorrow()->format('Y-m-d'))
                ->orderBy('id_appoiment', 'asc')
                ->paginate(5);
        
        //insert date in object estatus pendiente
        $this->insertDate($tomorrowAppointments);

        //numero total de clientes citados del dia
        $totalCitedToday = Appoiment::where("date_appoiment", "=", Carbon::now()->format('Y-m-d'))->count();
        
        //numero total de clientes que llegaron a la cita
        $totalCitedTodayArrived = Appoiment::where("date_appoiment", "=", Carbon::now()->format('Y-m-d'))->where("status", "=", "Asistió")->count();
        
        return view('dashboard.dashboard', compact("lastAppointments", "tomorrowAppointments", "totalCitedToday", "totalCitedTodayArrived", "companys", "clients", "users", "services"));
    }
    
    public function insertDate($lastFiveApprovedAppointments){
        foreach ($lastFiveApprovedAppointments as $lastFiveApprovedAppointment){
            $lastFiveApprovedAppointment->date_appoiment = $this->getDates($lastFiveApprovedAppointment->date_appoiment);
        }
        return $lastFiveApprovedAppointments;
    }

    public function getDates($date) {
        $array = array();
        setlocale(LC_ALL,"es_ES");
        $date = Carbon::parse(Carbon::parse($date));
        $dateMonth = strftime("%b", $date->getTimestamp());
        $getDate = $date->format("d/m/Y");
        $getDay = $date->day;
        array_push($array, compact('dateMonth', 'getDay', 'getDate'));
        return $array;
    }
    
    public function CreateAppoiment(Request  $request){
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
          'city_appoiment' => $request->city,
          'date_appoiment' => Carbon::tomorrow()->format('Y-m-d'),
          'time_appoiment' => $request->schedule,
          'comentary_appoiment' => $request->descriptionCandidate,
          'status' => 'Pendiente',
        ]);
        
    }

    public function EditAppoiment($id) {
        $companys = Company::All();
        $clients = Client::All();
        $users = User::All();
        $services = Service::All();
        $getQuote = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->join('itcp_companys', 'itcp_appoiments.company_id', '=', 'itcp_companys.id_company')
                ->join('itcp_service', 'itcp_appoiments.service_id', '=', 'itcp_service.id_service')
                ->join('itcp_clients', 'itcp_appoiments.client_id', '=', 'itcp_clients.id_client')
                ->where("itcp_appoiments.id_appoiment", "=", $id)
                ->get();
        $getUser = DB::table('itcp_appoiments')
                ->join('users', 'itcp_appoiments.user_id', '=', 'users.id')
                ->where('itcp_appoiments.id_appoiment', '=', $id)
                ->select('*')
                ->get();
        return view('dashboard.editAppoiment', compact("getQuote","getUser", "companys", "clients", "users", "services", "services"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
     //
    }
    
    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */
    public function ValidateCreate($request)
    {
        //
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
       //
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
        //
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
}
