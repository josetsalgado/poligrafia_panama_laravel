<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\Company;
use App\Budget;
use App\RegisterBudget;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Crypt;

class AccountStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $budgets = $this->getBudget();
        
        foreach ($budgets as $budget){
            $budget->id_budget = Crypt::encrypt($budget->id_budget);
            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
            $budget->date_init_budget = $this->getDateAndStatus($budget->date_init_budget);
            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);    
        }
        
//        dump($budgets);
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accountStatus()
    {
        return view('AccountStatus.accountStatus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
