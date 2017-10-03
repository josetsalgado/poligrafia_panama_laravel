<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/create_user';
    protected $loginPath = '/';
    protected $redirectPath = '/create_user';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
          'name' => $data['name'],
          'last_name' => $data['lastname'],
          'password' => bcrypt($data['password']),
          'rol_id' => intval($data['rol']),
          'tel' => $data['tel'],
          'email' => $data['email'],
        ]);
    }

    public function getLogin()
    {
        return view('home.index');
    }

    public function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'email';
    }
}
