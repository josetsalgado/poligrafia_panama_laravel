<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Client;
use App\Company;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $companys = Company::all();
        return view('client.create', compact("companys"));
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
          'city' => $request->city,
          'company_id' => $request->empresa,
          'position' => $request->position,
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
                'tel' => 'numeric',
                'email' => 'email|unique:itcp_clients,email_client',
            ], 
            [
                'email.email' => trans("validations.input_format", ['input' => 'correo']),
                'tel.numeric' => trans("validations.input_format", ['input' => 'telefono']),    
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
        $client = Client::whereIn('id_client', [$id])->get();
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request) {
        Client::where('id_client', $request->id)
                ->update([
                    'name_client' => $request->name,
                    'tel_client' => $request->tel,
                    'email_client' => $request->email,
                    'company_id' => intval($request->rol),
                    'city' => $request->city,
                    'position' => $request->position,
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
        $this->deleteClientQuote($id);
        Client::where('id_client', '=', $id)->delete();
        
    }
    
    public function deleteClientQuote($id){

       $quotesClient = DB::table('itcp_appoiments')
                ->where('itcp_appoiments.client_id', '=', $id)
                ->select('*')
                ->get();

        if($quotesClient){
            Appoiment::where('client_id', '=', $id)->delete();
        }
    }
}
