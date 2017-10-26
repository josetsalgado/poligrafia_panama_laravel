<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Budget;
use App\Company;
use App\Service;
use App\Http\Controllers\Controller;
use App\Payment;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use PDF;
use function trans;
use function view;

class AccountStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show()
    {
//        $appoiment = Appoiment::all();
//        $budgets = $this->getBudget();
//        
//        foreach ($budgets as $budget){
//            $budget->id_budget = Crypt::encrypt($budget->id_budget);
//            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
//            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
//            $budget->date_init_budget = $this->getDateAndStatus($budget->date_init_budget);
//            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);    
//        }
        $services = Service::all();
        $companys = Company::all();
        $appoiments = Appoiment::all();
        $accountStatus = array();
        foreach ($companys as $company){
            foreach ($appoiments as $appoiment){
                if(($company->id_company == $appoiment->company_id) && ($appoiment->status == "Asistió")){
                    //saber si la prueba pre empleo tiene un costo especial para la empresa
                    if($company->cost_test_pre_employment){
                        dump("tiene pre empleo");
                    }
                    //saber si la prueba especifica tiene un costo especial para la empresa
                    if($company->cost_specific_test){
                        dump("tiene espeficica");
                    }
                    //saber si la prueba de rutina tiene un costo especial para la empresa
                    if($company->cost_routine_test){
                        dump("tiene rutina");
                    }
                    //saber si la prueba reevaluacion tiene un costo especial para la empresa
                    if($company->reevaluation_test_cost){
                        dump("tiene reevaluacion");
                    }
                    dump($appoiment->company_id);
                }
            }
        }
        
        dd($accountStatus);
        return view('AccountStatus.show', compact('budgets'));
    }
    
    public function getDateAndStatus($date) {
        $array = array();
        $dateInit = Carbon::parse($date)->format('d/m/Y');
        $dateFinish = Carbon::parse($date)->addDays(30)->format('d/m/Y');
        $dateRange = Carbon::parse($date)->diffInDays(Carbon::now())-1;
        $dateStatus = $dateRange>30 ? "Vencido" : "En proceso";
        array_push($array, compact('dateInit','dateFinish', 'dateRange', 'dateStatus'));
        return $array;
    }
    public function getBudgetRegisterCompanies($id){
        $budgetsRegisters = DB::table('itcp_budgets_register')
            ->join('itcp_service', 'itcp_budgets_register.service_id', '=', 'itcp_service.id_service')
            ->select('*')
            ->where('itcp_budgets_register.id_register_budgets', '=', $id)
            ->get();
        
        foreach ($budgetsRegisters as $budgetsRegister){
          $budgetsRegister->service_id = $this->getRelationship($budgetsRegister->service_id, 'itcp_service', 'id_service');
        }
        return $budgetsRegisters;
    }

    public function getRelationship($id_client, $tb,$tbgRelationship){
        return DB::table($tb)
            ->select('*')
            ->where($tb.'.'.$tbgRelationship, '=', $id_client)
            ->get();
    }
    public function getBudget() {
        return DB::table('itcp_budgets')
            ->select('*')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createPayment($id, $totalPay)
    {
        $id = Crypt::decrypt($id);
        return view('AccountStatus.modalCreatePayment', compact('id', 'totalPay'));
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
        
        $totalBudget = Budget::whereIn('id_budget', [$request->id_budget])->select('total_budget')->get();
        
        Payment::insert([
          'budget_id' => $request->id_budget,
          'facture_number_payment' => intval($request->facture_number),
          'total_cost_payment' => $request->way_to_pay,
          'payment_payment' => $request->payment,
          'comentary_payment' => $request->observations,
        ]);
        if($request->discount){
            Budget::where('id_budget', $request->id_budget)
                    ->update([
                        'total_budget' => intval($totalBudget[0]->total_budget - $request->payment - $request->discount),
            ]);
        }else{
            Budget::where('id_budget', $request->id_budget)
                    ->update([
                        'total_budget' => intval($totalBudget[0]->total_budget - $request->payment),
            ]);
        }
        
    }
    
    public function ValidateCreate($request)
    {
        $this->validate($request,[
                'facture_number' => 'required',
                'way_to_pay' => 'required',
                'payment' => 'required|numeric',
                'observations' => 'required',
            ], 
            [
                'facture_number.required' => trans("validations.input_required", ['input' => 'numero de factura']),
                'way_to_pay.required' => trans("validations.input_required", ['input' => 'forma de pago']),
                'payment.required' => trans("validations.input_required", ['input' => 'monto a pagar']),
                'payment.numeric' => trans("validations.input_format", ['input' => 'monto a pagar']),
                'observations.required' => trans("validations.input_required", ['input' => 'observaciones']),
                
            ]
        );
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function accountStatus()
    {
        return view('AccountStatus.accountStatus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */


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

    function pdfE() {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::Make();
        /*$pdf->SetProtection(['copy', 'print'], '1234', 'owner_pass');*/
        $pdf->loadView('AccountStatus.document', $data);
        return $pdf->Stream('Accountstatus.pdf');
        //return $pdf->download('Poligrafo.pdf');
    }
}
