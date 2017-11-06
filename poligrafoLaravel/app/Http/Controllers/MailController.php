<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use PDF;
use Log;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use App\User;

class MailController extends Controller {

    public function html_email_budget() {



        $mensajeconf = 'Correo enviado exitosamente';
         $data = array('name'=>"Jose Velasquez") ;
         Mail::send('mail', $data, function($message) {
  //correo cliente
            $message->to('velasquezjrvo@gmail.com', 'Jose Velasquez') ->subject
            ('PROPUESTA DE POLIGRAFIA') ;
   //copia a info y angie comentad para que no envie ya se probo
           /* $message->cc('angie@poligrafia.com.pa');
            $message->cc('info@poligrafia.com.pa');*/
            $message->from('poligrafia@poligrafia.com.pa','IPTC') ;
            $message->attach('../../public/pdf/cotizacion.pdf') ;


        });
        echo ($mensajeconf);
    }

    public function getRelationship($id_client, $tb,$tbgRelationship){
        return DB::table($tb)
            ->select('*')
            ->where($tb.'.'.$tbgRelationship, '=', $id_client)
            ->get();
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





//Correo de solicitud de retencion.

    public function html_email_retencion($id) {

        $user = User::findOrFail(1);

        $company = Company::where('id_company', '=',$id)->get();
        $mensajeconf = 'Correo solicitando retencion enviado exitosamente';
        $data = array('name'=>"") ;

        Mail::send('mailretencion', ["nameCom" => $company[0]->name_company], function($message) use ($company) {
            //sustituir por correo empresa
            $message->to($company[0]->email_compamy, '')->subject('SOLICITUD DE RETENCION') ;
            //copia a info y angie comentad para que no envie ya se probo
            /* $message->cc('angie@poligrafia.com.pa');
             $message->cc('info@poligrafia.com.pa');*/
            $message->from('poligrafia@poligrafia.com.pa','IPTC') ;


        });
        echo ($mensajeconf);
    }




}