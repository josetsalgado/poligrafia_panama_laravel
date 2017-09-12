<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Client;
use DB;

class ClientController extends Controller
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
        return view('client.create');
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
        Client::insert([
          'id_client' => '',
          'name_client' => $request->name,
          'tel_client' => $request->tel,
          'email_client' => $request->email,
          'rif_client' => '',
          'city_id' => $request->country, 
          'country_id' => $request->city,
        ]);
        
        return view('user.create');
    }
    /**
     * .
     *
     * @param  Request  $request
     * @return Response2
     */
    public function ValidateCreate($request)
    {
        $this->validate($request,[
                'name' => 'required',
                'tel' => 'required|numeric',
                'email' => 'required|email|unique:itcp_clients,email_client',
                'country' => 'required',
                'city' => 'required',
            ], 
            [
                'name.required' => trans("validations.input_required", ['input' => 'nombre']),
                'lastname.required' => trans("validations.input_required", ['input' => 'apellido']),
                'email.required' => trans("validations.input_required", ['input' => 'correo']),
                'email.email' => trans("validations.input_format", ['input' => 'correo']),
                'email.unique' => trans("validations.input_unique", ['input' => 'usuario', 'other' => 'correo']),
                'tel.required' => trans("validations.input_required", ['input' => 'telefono']),
                'tel.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'country.required' => trans("validations.input_required", ['input' => 'pais']),
                'city.required' => trans("validations.input_required", ['input' => 'ciudad']),
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
        $clients = Client::all();
        return view('client.show', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = DB::table('itcp_clients')
                ->join('itcp_citys', 'itcp_clients.city_id', '=', 'itcp_citys.id_city')
                ->where('itcp_clients.id_client', '=', $id)
                ->select('*')
                ->get();
        return view('client.edit', compact('client'));
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
//        $this->ValidateCreate($request);
        DB::table('itcp_clients')->where('id_client', $request->id)->update([
            'name_client' => $request->name,
            'tel_client' => $request->tel,
            'email_client' => $request->email,
            'rif_client' => '',
            'city_id' => $request->city,
            'country_id' => $request->country,
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
    }
}
