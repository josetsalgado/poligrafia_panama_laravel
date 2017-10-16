<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use function view;

class ReportAccountController extends Controller
{

    

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store() {

        //
    }
    
    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function accountstatus()
    {

        return view('report.accountStatus');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function evaluations () {

        return view('report.evaluations');
    }

    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */

    
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
