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
use Carbon\Carbon;

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
        $pdf->loadView('budget.butget', $data);
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
        $carbon = new Carbon();
        $this->ValidateCreate($request);
        $company = "";
        $client = "";
        $serviceId = "";
        $price = "";
        $quantity = "";

        $numberBudget = str_random(8);
        
        foreach ($request->all() as $key => $arrayRequest){
            if($key == "empresa"){
                $company = $arrayRequest;
            }
            
            if($key == "client"){
                $client = $arrayRequest;
            }
            if(strstr($key, 'service_id') ){
                $serviceId = $arrayRequest;
            }
            
            if(strstr($key, 'price_') ){
                $price = $arrayRequest;
            }
            if(strstr($key, 'quantity_') ){
                $quantity = $arrayRequest;
            }
            if ($price && $quantity) {
                Budget::insert([
                    'company_id' => $company,
                    'client_id' => $client,
                    'service_id' => $serviceId,
                    'date_init_budget' => Carbon::now(),
                    'number_budget' => $numberBudget,
                    'quantity_budget' => $quantity,
                    'total_budget' => $price
                ]);
                $price = '';
                $quantity = '';
            }
        }
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
