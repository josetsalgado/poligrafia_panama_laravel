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
            'cost_test_pre_employment' => $request->cost_test_pre_employment,
            'cost_specific_test' => $request->cost_specific_test,
            'cost_routine_test' => $request->cost_routine_test,
            'reevaluation_test_cost' => $request->reevaluation_test_cost,
            'retention_type' => $request->retention_type
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
                
                'tel_company' => 'numeric',
                'email_compamy' => 'email|unique:itcp_companys,email_compamy',
                'cost_test_pre_employment' => 'numeric',
                'costo_prueba_especifica' => 'numeric',
                'cost_routine_test' => 'numeric',
                'reevaluation_test_cost' => 'numeric',
            ], 
            [
                'tel_company.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'email_compamy.email' => trans("validations.input_format", ['input' => 'correo']),
                'email_compamy.unique' => trans("validations.input_unique", ['input' => 'correo', 'other' => 'correo']),
                'cost_test_pre_employment.numeric' => trans("validations.input_format", ['input' => 'prueba pre empleo']),
                'costo_prueba_especifica.numeric' => trans("validations.input_format", ['input' => 'prueba  especifica']),
                'cost_routine_test.numeric' => trans("validations.input_format", ['input' => 'prueba  de rutina']),
                'reevaluation_test_cost.numeric' => trans("validations.input_format", ['input' => 'prueba de reevaluación']),
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
        $companys = Company::all();

        foreach ($companys as $company){
            $company->client_id = $this->getRelationship($company->id_company, 'itcp_clients', 'company_id');
        }
        return view("company.show", compact("companys"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function getRelationship($id_client, $tb,$tbgRelationship){
        return DB::table($tb)
            ->select('*')
            ->where($tb.'.'.$tbgRelationship, '=', $id_client)
            ->get();
    }


    public function edit(Request $request)
    {
        Company::where('id_company', $request->id)
            ->update([
                'name_company' => $request->name_company,
                'tel_company' => $request->tel_company,
                'email_compamy' => $request->email_compamy,
                'address_company' => $request->address_company,
                'ruc_company' => $request->ruc_company,
                'cost_test_pre_employment' => $request->cost_test_pre_employment,
                'cost_routine_test' => $request->cost_routine_test,
                'cost_specific_test' => $request->reevaluation_test_cost,
                'reevaluation_test_cost' => $request->reevaluation_test_cost,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $company = Company::where('id_company', '=',$id)->get();
       return view('company.editCompany', compact("company"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {

        Company::where('id_company', '=', $id)->delete();
    }
}
