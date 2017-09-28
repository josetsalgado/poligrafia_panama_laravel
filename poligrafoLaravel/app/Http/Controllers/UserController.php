<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
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
        $token = str_random(60);
        User::insert([
          'id' => '',
          'name' => $request->name,
          'last_name' => $request->lastname,
          'password' => bcrypt($request->password),
          'rol_id' => intval($request->rol),
          'tel' => $request->tel,
          'email' => $request->email,
          'remember_token' => $token,
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
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users,email',
                'tel' => 'required|numeric',
                'rol' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ], 
            [
                'name.required' => trans("validations.input_required", ['input' => 'nombre']),
                'lastname.required' => trans("validations.input_required", ['input' => 'apellido']),
                'email.required' => trans("validations.input_required", ['input' => 'correo']),
                'email.email' => trans("validations.input_format", ['input' => 'correo']),
                'email.unique' => trans("validations.input_unique", ['input' => 'usuario', 'other' => 'correo']),
                'tel.required' => trans("validations.input_required", ['input' => 'telefono']),
                'tel.numeric' => trans("validations.input_format", ['input' => 'telefono']),
                'rol.required' => trans("validations.input_required", ['input' => 'tipo de usuario']),
                'password.required' => trans("validations.input_required", ['input' => 'clave']),
                'password.confirmed' => trans("validations.input_equal", ['input' => 'clave', 'other' => 'confirmar clave']),
                'password_confirmation.required' => trans("validations.input_required", ['input' => 'confirmar clave']),
                
            ]
        );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
         $users = DB::table('itcp_users')
                ->join('itcl_rols', 'itcp_users.rol_id', '=', 'itcl_rols.id_rol')
                ->select('*')
                ->get();
        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = DB::table('itcp_users')
                ->join('itcl_rols', 'itcp_users.rol_id', '=', 'itcl_rols.id_rol')
                ->where('itcp_users.id_user', '=', $id)
                ->select('*')
                ->get();

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $this->ValidateCreate($request);
        DB::table('itcp_users')->where('id_user', $request->id)->update([
            'name_user' => $request->name,
            'last_name_user' => $request->lastname,
            'password_user' => $request->password,
            'rol_id' => intval($request->rol),
            'tel_user' => $request->tel,
            'email_user' => $request->email,
        ]);
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
