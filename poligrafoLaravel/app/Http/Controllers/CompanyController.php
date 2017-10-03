<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function dd;
use function trans;
use function view;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        dd($request->session()->all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("company.create");
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

    /**
     * .
     *
     * @param  Request  $request
     * @return Response2
     */
    public function ValidateCreate($request)
    {
        $this->validate($request,[
                'name_company' => 'required',
                'ruc_company' => 'required',
                'tel_company' => 'required|numeric',
                'email_compamy' => 'required|email|unique:itcp_companys,email_compamy',
                'address_company' => 'required',
            ], 
            [
                'name_company.required' => trans("validations.input_required", ['input' => 'nombre']),
                'ruc_company.required' => trans("validations.input_required", ['input' => 'ruc']),
                'tel_company.required' => trans("validations.input_required", ['input' => 'telefono']),
                'tel_company.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'email_compamy.required' => trans("validations.input_required", ['input' => 'correo']),
                'email_compamy.email' => trans("validations.input_format", ['input' => 'correo']),
                'email_compamy.unique' => trans("validations.input_unique", ['input' => 'correo', 'other' => 'correo']),
                'address_company.required' => trans("validations.input_required", ['input' => 'direccion']),
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
        return view("company.show");
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
    public function update(Request $request, $id)
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
