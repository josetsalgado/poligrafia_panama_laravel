<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
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
        //ultimas 5 citas con estatus pendiente
        $lastFivePendingAppointments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->where("itcp_appoiments.status", "=", "Pendiente")
                ->orderBy('id_appoiment', 'desc')
                ->take(5)
                ->get();
        //insert date in object estatus pendiente
        $this->insertDate($lastFivePendingAppointments);
        
        //ultimas 5 citas con estatus aprobado
        $lastFiveApprovedAppointments = DB::table('itcp_appoiments')
                ->join('itcp_patients', 'itcp_appoiments.patient_id', '=', 'itcp_patients.id_patient')
                ->where("status", "=", "Aprobado")
                ->orderBy('id_appoiment', 'desc')
                ->take(5)
                ->get();
        //insert date in object estatus aprobado
        $this->insertDate($lastFiveApprovedAppointments);
        
        //ultimas 5 clientes
        $lastFiveClients = DB::table('itcp_clients')
                ->orderBy('id_client', 'desc')
                ->take(5)
                ->get();
        
        //numero total de usuario
        $totalUsers = DB::table('itcp_users')->count();
        
        //numero total de clientes
        $totalClients = DB::table('itcp_clients')->count();
        
        //numero total de clientes
        $totalServices = DB::table('itcp_service')->count();
        
        //numero total de clientes
        $totalAppoimentPending = DB::table('itcp_appoiments')
                ->where("itcp_appoiments.status", "=", "Pendiente")
                ->count();
                                                    
        return view('dashboard.dashboard', compact("lastFiveApprovedAppointments", "lastFivePendingAppointments", "lastFiveClients", "totalUsers", "totalClients", "totalServices", "totalAppoimentPending"));
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
