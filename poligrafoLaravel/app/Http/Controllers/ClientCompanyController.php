<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function dd;
use function trans;
use function view;
use App\Company;
use DB;

class ClientCompanyController extends Controller
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


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        Company::insert([
            'id_company' => '',
            'name_company' => $request->name_company,
            'ruc_company' => $request->ruc_company,
            'tel_company' => $request->tel_company,
            'email_compamy' => $request->email_compamy,
            'address_company' => $request->address_company,
        ]);

        return redirect('butget_client');
    }
    public function storeclient(Request $request)
    {
        Client::insert([
            'id_client' => '',
            'name_client' => $request->name,
            'tel_client' => $request->tel,
            'email_client' => $request->email,
            'city' => $request->city,
            'company_id' => $request->empresa,
            'position' => $request->position,
        ]);


    }



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
    public function edit()
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
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
