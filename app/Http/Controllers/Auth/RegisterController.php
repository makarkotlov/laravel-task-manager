<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/tasks';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
<<<<<<< HEAD
            'last_name' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'department_id' => ['required'],
=======
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
<<<<<<< HEAD
            'last_name' => $data['last_name'],
            'patronymic' => $data['patronymic'],
            'phone_number' => $data['phone_number'],
            'department_id' => $data['department_id'],
            'email' => $data['email'],
            'created_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make($data['password']),
            /////////////////
            'is_admin' => 0// need to refactor
            ////////////////
=======
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
        ]);
    }
}
