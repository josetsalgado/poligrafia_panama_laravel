<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("service.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->ValidateCreate($request);
        Service::insert([
          'name_service' => $request->name,
          'price_service' => $request->price,
          'description_service' => $request->description,
        ]);
        
        return view('service.create');
    }
    
    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */
    
    public function ValidateCreate($request)
    {
        $this->validate($request,[
                
                'price' => 'numeric',
            ], 
            [
                'price.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                
            ]
        );
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $services = Service::All();
        
        return view("service.show", compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $models = Service::whereIn('id_service', [$id])->get();
        return view("service.edit", compact("models"));
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
        
        $this->ValidateCreate($request);
        Service::where('id_service', $request->id)
                ->update([
                    'price_service' => $request->price,
                    'description_service' => $request->description
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->deleteServiceQuote($id);
        Service::where('id_service', '=', $id)->delete();
    }
    
    public function deleteServiceQuote($id){

        $quotesService = DB::table('itcp_appoiments')
                ->where('itcp_appoiments.service_id', '=', $id)
                ->select('*')
                ->get();

        if($quotesService){
            Appoiment::where('service_id', '=', $id)->delete();
        }
    }
}
