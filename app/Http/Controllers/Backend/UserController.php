<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
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
    public $token;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $token)
    {
        //$this->middleware('guest');
        $this->token = $token;
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
        $this->token = $token;
        $verifyUser = User::where('token', $token)->first();
        if($verifyUser){
            //$data = User::find($token);
            $data = new User;
            $params = [
                'data'=>$data,
            ];
            return view('emails.verify-pass',$params);
        }else{
            return view('errors.internal-server');
        }

    }

    public function createPW(Request $request, $token)
    {
        try{
            $data = User::find($token);
            $this->validate(request(), [
                'password' => 'required',
            ]);
            User::find($token);
            $data->password = $request->input('password');
            $data->save();
            return view('company.uploadFile',$token)->with('success','verifikasi berhasil');  
        }catch(\Exception $e){
            dd($e);
        }
        
    }

    public function verifyUser($token)
    {
        $verifyUser = User::where('token', $token)->first();
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

