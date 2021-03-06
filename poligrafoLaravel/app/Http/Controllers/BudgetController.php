<?php

namespace App\Http\Controllers;

use App\Company;
use App\Budget;
use App\RegisterBudget;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;
use Log;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Crypt;

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

    public function modalCrateBudget(Request $request) {
        $getDate = Carbon::now()->format('Y-m-d');
        $date = $this->getDates($getDate);

        return view('budget.modalCreateBudget', compact("request", "date"));
    }

    public function modalShowBudget($id) {

        $budgets = DB::table('itcp_budgets')
            ->select('*')
            ->where('itcp_budgets.id_budget', '=', Crypt::decrypt($id))
            ->get();

        foreach ($budgets as $budget){
            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
            $budget->date_init_budget = $this->getDates($budget->date_init_budget);
            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);
        }
        return view('budget.modalShowBudget', compact('budgets'));
    }


    public function getDates($date) {
        $array = array();
        setlocale(LC_ALL,"es_ES");
        $date = Carbon::parse(Carbon::parse($date));
        $dateMonth = strftime("%B", $date->getTimestamp());
        $getDate = $date->day. " de ".$dateMonth." del ".$date->year;
        $getDay = $date->day;
        array_push($array, compact('dateMonth', 'getDay', 'getDate'));
        return $array;
    }
    
    function pdfCrateBudget() {

        $budgets = DB::table('itcp_budgets')
            ->select('*')
            ->where('itcp_budgets.id_budget', '=', Budget::all()->last()->id_budget)
            ->get();
        
        foreach ($budgets as $budget){
            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
            $budget->date_init_budget = Carbon::parse($budget->date_init_budget)->format('d/m/Y');
            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);
        }

        $pdf = PDF::Make();
        $pdf->loadView('budget.pdfButget', compact('budgets'));
        return $pdf->download('cotizacion.pdf');
        /*return $pdf->Stream('cotizacion.pdf');*/
    }
    
    
    function pdfBudget($id) {

        $budgets = DB::table('itcp_budgets')
            ->select('*')
            ->where('itcp_budgets.id_budget', '=', Crypt::decrypt($id))
            ->get();
        
        foreach ($budgets as $budget){
            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
            $budget->date_init_budget = Carbon::parse($budget->date_init_budget)->format('d/m/Y');
            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);
        }

        $pdf = PDF::Make();
        $pdf->loadView('budget.pdfButget', compact('budgets'));
        return $pdf->download('cotizacion.pdf');
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
        $budgets = Budget::all();

        foreach ($budgets as $budget){
            $budget->id_budget = Crypt::encrypt($budget->id_budget);
            $budget->company_id = $this->getRelationship($budget->company_id, 'itcp_companys', 'id_company');
            $budget->client_id = $this->getRelationship($budget->client_id, 'itcp_clients', 'id_client');
            $budget->date_init_budget = Carbon::parse($budget->date_init_budget)->format('d/m/Y');
            $budget->budgets_register_id = $this->getBudgetRegisterCompanies($budget->budgets_register_id);
        }
        return view('budget.show', compact('budgets'));
    }
    

    /**
     * get array of register comanies of budgets
     */
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
        $company = "";
        $client = "";
        $serviceId = "";
        $price = "";
        $quantity = "";
        $total = 0;

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
            if(strstr($key, 'observations') ){
                $observations = $arrayRequest;
            }
            if(strstr($key, 'quantity_') ){
                $quantity = $arrayRequest;
            }
            if ($price && $quantity) {
                RegisterBudget::insert([
                    'id_register_budgets' => $numberBudget,
                    'quantity_budget' => $quantity,
                    'total_budget' => $price,
                    'service_id' => $serviceId
                ]);
                $total = $total + $price;
                $price = '';
                $quantity = '';
            }
        }
        
        Budget::insert([
            'company_id' => $company,
            'client_id' => $client,
            'date_init_budget' => Carbon::now(),
            'budgets_register_id' => $numberBudget,
            'total_budget' => $total,
            'observations' => $observations
        ]);
        
        
    }
}
