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

    public function index(Request $request)
    {
        $params=User::all();
        //return view('company.register', $params);
    }

    public  function add(Request $request){
        try{

            $company_id=$request->input('company_id');
            $params=[
                'user_id'=>$company_id
            ];

            $result=$this->CompanyService->actionForm($params);
            if($result['code']==200){

                if ($id != 0 || !is_null($id)) {
                    
                    #Edit
                    $params=[
                        'data'=>$result['data'],
                    ];

                }else{
                    #add
                    $params=[
                        'data'=>$result['data'],
                    ];
                }


                return view('company.index',$params);
            }

        }catch (\Exception $e){
            return view('errors.internal-server');

        }
    }

        public  function save(Request $request){

            try{
               #Company
                $user_id = $request->input('user_id');
                $email = $request->input('email');
                $password = $request->input('password');
                $mode = $request->input('mode');
                $mode_id = $request->input('mode_id');
                $privilage = $request->input('privilage');
                
                #
                $params=[
                    'user_id'=>$user_id,
                    'email'=>$email,
                    'password'=>$password,
                    'mode'=>$mode,
                    'mode_id'=>$mode_id,
                    'privilage'=>$privilage,
                ];
    
                $result = $this->CompanyService->actionSave($params);


                if($result['code'] == 200){
                    return "
                    <div class='alert alert-success'>".$result['message']."</div>
                    <script> scrollToTop(); reload(1500); </script>";
                }else{
                    return "<div class='alert alert-danger'>".$result['message']."</div>";
                }
    
            }catch (\Exception $e){
                return view('errors.internal-server');
            }
        }
    
        public function  delete(Request $request){
    
            try{
    
                $id = $request->input('company_id');
                $params=[
                    'id'=>$id,
                ];
                $result = $this->userService->actionDelete($params);
                if($result['code'] == 200){
                    return "
                <div class='alert alert-success'>".$result['message']."</div>
                <script> scrollToTop(); reload(1500); </script>";
                }else{
                    return "<div class='alert alert-danger'>".$result['message']."</div>";
                }
    
            }catch (\Exception $e){
                return view('errors.internal-server');
            }
    
        }
      
    public function logoUpload(Request $request)
    {
        $validation = $request->validate([
            'company_logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $logo = $request->file('company_logo');
        $logo_name = $logo->getClientOriginalExtension();
        Company::make($logo)->resize(300,200)->save(storage_path('app/uploads'.$name));

        return $logo_name;
    }

    // public function create(Request $request)
    // {
    //     $company = new Company;
    //     $user = new User;

    //     $validation = $request->validate([
    //         'company_name' => 'required|string|max:255',
    //         'company_email' => 'required|string|email|max:255',
    //         'company_telp' => 'required|string|max:12',
    //     ]);
        
    //     #Company
    //     $company_id = $request->input('company_id');
    //     $company_name = $request->input('company_name');
    //     $company_logo = $this->logoUpload($request);
    //     $company_telp = $request->input('company_telp');
    //     $company_email = $request->input('company_email');
    //     $company_address = $request->input('company_address');
    //     $code_wilayah = $request->input('code_wilayah');

    //     #User
    //     $mode = 1;

    //     try
    //     {
    //         $company->create([
    //             'company_name' => $company_name,
    //             'company_logo' => $company_logo,
    //             'company_telp' => $company_telp,
    //             'company_email' => $company_email,
    //             'company_address' => $company_address,
    //             'code_wilayah' => $code_wilayah,
    //         ]);

    //         $user->create([
    //             'company_email' => $company_name,
    //             'mode' => $mode,
    //             'mode_id' => $company_id,
    //         ]);
            
    //         return "<div class='alert alert-success'>Company Sukses Ditambahkan!</div>
    //                 <script> scrollToTop(); reload(1000); </script>";
    //     }
    //     catch(\Exception $e)
    //     {
    //         return "<div class='alert alert-danger'>User Gagal Ditambahkan!</div>
    //                 <script> scrollToTop(); reload(1000); </script>";
    //     }
    // }
}

