<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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
        return view("service.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ValidateCreate($request);
        Service::insert([
          'id_service' => '',
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
                'name' => 'required',
                'price' => 'required|numeric',
                'description' => 'required',
            ], 
            [
                'name.required' => trans("validations.input_required", ['input' => 'nombre']),
                'price.required' => trans("validations.input_required", ['input' => 'precio']),
                'price.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'description.required' => trans("validations.input_required", ['input' => 'descripción']),
                
            ]
        );
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return "bien";
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
