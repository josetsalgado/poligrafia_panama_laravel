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
    //crear nueva tarea
    public function CreateHomework(Request $request){
        //insertar data de la tarea
        Homework::insert([
          'name_homework' => $request->add_homework,
          'status_homework' =>'0',
          'date_homework' => Carbon::now()->format('Y-m-d'),
          'userCreate_homework' => $request->userCreate,
          ]);
        return view('homework.homeworkCreate');
    }


    public function index()
    {
        //
    }


    //lista de tareas
    public function show(){
        $homeworks = Homework::all();
        return view("homework.homework", compact("homeworks"));
    }

    //actualizar tareas
    public function edit($id, Request $request){
        Homework::where('id_homework', $id)
        ->update([
            'status_homework' =>'$request->$id',
            ]);
            return view('homework.homeworkUpdate');
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
