<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Company;
use App\Models\School;
use App\Models\Applicant;
use App\Models\CompanyRegisterService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
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

    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function index()
    {
        $user = new User;
        $params = [
            'user'=>$user,
        ];
        return view('emails.verify-pass',$params);
    }
    public function createPW(Request $request, $email)
    {
        $data = User::find($email);
            $this->validate(request(), [
                'password' => 'required',
            ]);
            User::find($email);
            $data->password = $request->input('password');
            $data->save();
            return redirect('user-login')->with('success','updated successfully');  
    }
}

