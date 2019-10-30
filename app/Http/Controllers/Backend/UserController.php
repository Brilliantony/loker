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
use App\ServiceParameters\ResponseMessageServiceParameter;


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
    public $id;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $id)
    {
        //$this->middleware('guest');
        //$this->token = $token;
        $this->id = $id;
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

    public function formPass($user_id)
    {
        //$this->id = $id;
       
        if(count($data_qrr) != 0){
            //$data = User::find($token);
            $data = new User;
            $params = [
                'data'=>$data_qrr[0],
            ];
            return view('emails.verify-pass',$params);
        }else{
            return view('errors.internal-server');
        }

    }

    public function createPW(Request $request)
    {
        try{
            $password = $request->input('password');
            if(is_null($password) || $password == "")
            {
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter password', null);
                return $response->getResponse();
            }
            else{
                DB::update("update t_user set `password` = '".sha1($request->input('password'))."', verified = '1' where user_id = '".$request->input('user_id')."' ");
                return redirect('login')->with('success','verifikasi berhasil');
            }
        }catch(\Exception $e){
            dd($e);
        }
        
    }

}

