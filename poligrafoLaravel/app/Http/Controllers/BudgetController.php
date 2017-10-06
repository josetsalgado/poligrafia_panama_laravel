<?php

namespace App\Http\Controllers;

use App\Company;
use App\Budget;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;
use Log;

class BudgetController extends Controller
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
        $services = Service::all();

        return view('budget.create', compact('companys', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    function pdfA() {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::Make();
        /*$pdf->SetProtection(['copy', 'print'], '1234', 'owner_pass');*/
        $pdf->loadView('pdf.butget', $data);
        return $pdf->Stream('document.pdf');
        //return $pdf->download('Poligrafo.pdf');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /**public function show()
    {
        return view('budget.show');
    }
**/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('budget.show');
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
    
    public function storm(Request $request) {
        $this->ValidateCreate($request);
        $company = "";
        $client = "";
         Log::error("____________");
//        Log::error(print_r($request->all(), TRUE));
//        
        $arrayRequests = $request->all();
        foreach ($arrayRequests as $key => $arrayRequest){
            if($key == "empresa"){
                $company = $key;
            }
            
            if($key == "client"){
                $company = $key;
            }
            
            if($key != "empresa" || $key != "client"){
                Budget::insert([
                    'client_id' => $arrayRequest
                ]);
            }
            
        }
        
         
         
//        Company::insert([
//            'id_company' => '',
//            'name_company' => $request->name_company,
//            'ruc_company' => $request->ruc_company,
//            'tel_company' => $request->tel_company,
//            'email_compamy' => $request->email_compamy,
//            'address_company' => $request->address_company,
//        ]);

        return view('company.create');
    }
    
    public function ValidateCreate($request)
    {
        $this->validate($request,[
                'empresa' => 'required',
                'client' => 'required',
            ], 
            [
                'empresa.required' => trans("validations.input_required", ['input' => 'empresa']),
                'client.required' => trans("validations.input_required", ['input' => 'cliente']),
            ]
        );
    }
}
