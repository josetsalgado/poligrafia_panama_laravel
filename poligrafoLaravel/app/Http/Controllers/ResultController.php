<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use App\Company;
use App\ResultQualification;
use App\ResultData;
use DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
         $Company = Company::all();


      
       
        return view('result.create',compact("services","Company"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    

    public function store(Request $request)
    {
        //
        ResultData::insert([
          'name_poligrafista' => $request->name_poligrafista,
          'id_company' => $request->id_company,
          'id_candidate' => $request->id_candidate,
          'type_service' => $request->id_type_service,
          'tecnical' => $request->tecnical,
          'observation' => $request->observation
        ]);
       
            switch ($request->id_type_service) {
                case "Pre-empleo":                 
                        switch ($request->tecnical) {
                            case "AFMGQT-V2-2R":
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "3_graficas",
                                  'type_calification' => "r_4",
                                  'result' => $request->g3_r4,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "4_graficas",
                                  'type_calification' => "r_4",
                                  'result' => $request->g4_r4,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "5_graficas",
                                  'type_calification' => "r_4",
                                  'result' => $request->g5_r4,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "3_graficas",
                                  'type_calification' => "r_5",
                                  'result' => $request->g3_r5,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "4_graficas",
                                  'type_calification' => "r_5",
                                  'result' => $request->g4_r5,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                             ResultQualification::insert([
                                  'id_candidate' => $request->id_candidate,
                                  'type_verification' => "5_graficas",
                                  'type_calification' => "r_5",
                                  'result' => $request->g5_r5,
                                  'name_tecnical' => $request->tecnical                                  
                                ]);
                            
                                
                                break;
                            case "AFMGQT-V2-3R":
                                
                                break;
                            case "AFMGQT-V2-4R":
                                
                                break;
                            case "DLST":
                                
                                break;
                            default:
                                
                        }

                    break;
                case "Especifica":
                   
                    break;
                case "Rutina":

                    break;
                case "Reevaluación":

                    break;
                default:
                  
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $services = Service::all();
        $Company = Company::all();




        return view('result.show',compact("services","Company"));
    }

 public function getClientEvaluated($code)
    {
        $companys = DB::table('itcp_clients_evaluated')
                ->join('itcp_companys', 'itcp_clients_evaluated.id_company', '=', 'itcp_companys.id_company')
                ->where('itcp_companys.id_company', '=', $code)
                ->select('*')
                ->get();
        return view("quotes.getClient", compact("companys"));    
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
