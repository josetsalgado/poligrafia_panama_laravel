<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function view;

class UserController extends Controller
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
        return view('user.create');
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
        User::insert([
          'id_user' => '',
          'name_user' => $request->name,
          'last_name_user' => $request->lastname,
          'password_user' => $request->password,
          'rol_id' => intval($request->rol),
          'tel_user' => $request->tel,
          'email_user' => $request->email,
        ]);
        
        return view('user.create');
    }
    
    /**
     * .
     *
     * @param  Request  $request
     * @return Response
     */
    public function ValidateCreate($request)
    {
        $this->validate($request,[
            'name' => 'required|min:5|max:35',
            'lastname' => 'required|min:5|max:35',
            'email' => 'required|email',
            
                ], [
            'firstname.required' => ' The first name field is required.',
            'firstname.min' => ' The first name must be at least 5 characters.',
            'firstname.max' => ' The first name may not be greater than 35 characters.',
            'lastname.required' => ' The last name field is required.',
            'lastname.min' => ' The last name must be at least 5 characters.',
            'lastname.max' => ' The last name may not be greater than 35 characters.',
            'email.required' => ' Email obligatorio.',
            'email.email' => ' No es correo.',
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
}
