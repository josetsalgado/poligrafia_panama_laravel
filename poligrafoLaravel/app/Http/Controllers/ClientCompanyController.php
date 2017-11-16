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
        $this->ValidateCreate($request);
        Company::insert([
            'id_company' => '',
            'name_company' => $request->name_company,
            'ruc_company' => $request->ruc_company,
            'tel_company' => $request->tel_company,
            'email_compamy' => $request->email_compamy,
            'address_company' => $request->address_company,
        ]);

        return view('company.create');
    }

    public function ValidateCreate($request)
    {
        $this->validate($request,[

            'tel_company' => 'numeric',
            'email_compamy' => 'email|unique:itcp_companys,email_compamy',
            'cost_test_pre_employment' => 'numeric',
        ],
            [
                'tel_company.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'email_compamy.email' => trans("validations.input_format", ['input' => 'correo']),
                'email_compamy.unique' => trans("validations.input_unique", ['input' => 'correo', 'other' => 'correo']),

            ]
        );
    }


    public function update($id)
    {
        $company = Company::where('id_company', '=',$id)->get();
        return view('company.editCompany', compact("company"));
    }
    public function show($id)
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
