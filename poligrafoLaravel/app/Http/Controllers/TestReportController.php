<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use function view;
use PDF;

class TestReportController extends Controller
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
        //return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */


    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */

    public function show()
    {

        return view("test.show");

    }

    public function detail()
    {

        return view("test.detalleinforme");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update()
    {

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

    function pdfresult(){

        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::Make();
        /*$pdf->SetProtection(['copy', 'print'], '1234', 'owner_pass');*/
        $pdf->loadView('test.pdfinforme', $data);
        return $pdf->Download('testdocument.pdf');
        //return $pdf->download('Poligrafo.pdf');
    }
}
