<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Company;
use App\Models\School;
use App\Models\Applicant;
use App\Models\VerifyUser;
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

    public function index($token)
    {
        
    }

    public function formPass($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if($token){
            $verifyUser = new VerifyUser;
            $user = new User;
            $params = [
                'user'=>$user,
                'verifyUser'=>$verifyUser,
            ];
            return view('emails.verify-pass',$params);
        }else{
            return view('errors.internal-server');
        }

    }

    public function createPW(Request $request, $email)
    {
        try{
            $data = User::find($email);
            $this->validate(request(), [
                'password' => 'required',
            ]);
            User::find($email);
            $data->password = $request->input('password');
            $data->save();
            return redirect('form/company/uploadFile')->with('success','verifikasi berhasil');  
        }catch(\Exception $e){
            dd($e);
        }
        
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('form/company/uploadFile')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('form/company/uploadFile')->with('status', $status);
    }
}

