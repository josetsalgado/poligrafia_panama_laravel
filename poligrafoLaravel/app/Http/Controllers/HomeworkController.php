<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use function view;
use App\Client;
use App\Homework;
use Carbon\Carbon;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getDates($date) {
        $array = array();
        setlocale(LC_ALL,"es_ES");
        $date = Carbon::parse(Carbon::parse($date));
        $dateMonth = strftime("%b", $date->getTimestamp());
        $getDate = $date->format("d/m/Y");
        $getDay = $date->day;
        array_push($array, compact('dateMonth', 'getDay', 'getDate'));
        return $array;
    }
    
    public function CreateHomework(Request $request){
        //insertar data de la tarea
        Homework::insert([
          'name_homework' => $request->add,
          'status_homework' =>'',
          'date_homework' => Carbon::now()->format('Y-m-d'),
          'userCreate_homework' => $request->userCreate,
          ]);
          return view('homework.homeworkCreate');
      }

    public function index()
    {
        //
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
    public function show()
    {
        return view('homework.homework');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
}
