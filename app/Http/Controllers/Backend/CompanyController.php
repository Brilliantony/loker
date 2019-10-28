<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Mail\SendMail;
use App\Models\User;
use App\Models\Company;
use App\Models\CompanyService;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


class CompanyController extends Controller
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


    public function index(Request $request)
    {
        
    }

    public function formRegis(){
        $company = new Company;
        $user = new User;
        $params = [
            'company'=>$company,
            'user'=>$user,
        ];
        return view('company.register',$params);
    }

    public function formUpload(Request $request){
        
        try{
            if($request->session()->exists('activeUser')){
                $user_id = $request->input('user_id');
                $data_qrr = DB::select("select * from t_user where user_id = '".$user_id."' ");
                //dd($data_qrr);
               
                    $data = new User;
                    $params = [
                        'data'=>$data,
                    ];
                    
                    return view('company.uploadFile',$params);
                
                
            }
            else{
                echo "<div class='alert alert-danger'>Login dulu!</div>";
                return view('auth.login');
            }
        }
        catch(\Exception $e)
        {
            dd($e);
        }
    }
    
    public function register(Request $request){
        //dd($request->all());
            try{
                
                $validation = $request->validate([
                    'company_name' => 'required|string|max:255',
                    'company_email' => 'required|string|email|max:255',
                    'company_telp' => 'required|string|max:12',
                ]);

                $file=$this->logoUpload($request);
                if($file==false){
                    return "<div class='alert alert-success'Gagal Upload</div>
                    <script> scrollToTop(); reload(1500); </script>";
                }

               #Company       
                $company_name = $request->input('company_name');
                $company_logo = $file;
                $company_telp = $request->input('company_telp');
                $company_email = $request->input('company_email');
                $company_address = $request->input('company_address');
                $code_wilayah = $request->input('code_wilayah');
              

                $company = new Company;
                $company->create([
                    'company_name'=>$company_name,
                    'company_logo'=>$company_logo,
                    'company_telp'=>$company_telp,
                    'company_email'=>$company_email,
                    'company_address'=>$company_address,
                    'code_wilayah'=>$code_wilayah,
                ]);
                
                $company_id = DB::table('t_company')->select('company_id')->orderBy('company_id','desc')->first();
                
                $user = new User;
                $user->create([
                    'email'=>$company_email,
                    'mode'=>1,
                    'mode_id'=>$company_id->company_id,
                    'token'=> str_random(40),
                ]);

                $checkEmail = DB::table('t_user')->where('email',$company_email)->first();
                Mail::to($checkEmail->email)->send(new SendMail($checkEmail->email, $checkEmail->token));

                // $response = new ResponseMessageServiceParameter(200, 'Register Sukses, Cek Email Anda Untuk Verifikasi', null);
                // return $response->getResponse();
                return view('success.email-sended');
                

            }catch (\Exception $e){
                dd($e);
            }
        }

    public function updateUpload(Request $request)
        {
            try{
                if($request->session()->exists('activeUser'))
                {
                    $id = $request->input('user_id');
                    $attch_siup = $this->uploadSiup($request);
                    $attch_tdp = $this->uploadTdp($request);
                    $attch_npwp = $this->uploadNpwp($request);
                    $attch_photo = $this->uploadPhoto($request);

                    $mode_id = DB::select("select mode_id from t_user where user_id = '".$id."' ");

                    $data = Company::where('mode_id',$mode_id);
                    $data->attch_siup = $request->uploadSiup($attch_siup,$data->company_id);
                    $data->attch_tdp = $request->input('attch_tdp');
                    $data->attch_npwp = $request->input('attch_npwp');
                    $data->attch_photo = $request->input('attch_photo');
                    $data->save();
                    return redirect('user-login')->with('success','updated successfully');  
                }
            }catch(\Exception $e){
                dd($e);
            }

        }
    
    public function  delete(Request $request){
    
        $id =$request->id;
        try{
            Company::find($id)->delete();
            return view('success.email-sended');
            
        }catch(\Exception $e){
            return "<div class='alert alert-danger'>Data gagal dihapus!</div>";
        }
    
    }
      
    public function logoUpload(Request $request)
    {
        $validation = $request->validate([
            'company_logo' => 'required|file|image|mimes:jpeg,png|max:2048'
        ]);
        $uploadedlogo = $request->file('company_logo');
        $logo_name = $uploadedlogo->getClientOriginalName();
        //$logo_extension = $uploadedlogo->getClientOriginalExtension();
        if($uploadedlogo->storeAs('public/company_logo',$logo_name)){
            return $logo_name;
        }else{
            return false;
        }

    }

    public function uploadSiup(Request $request, $id)
    {
        $user_id = User::where(['user_id'=>$id])->first();
        $validation = $request->validate([
            'attch_siup' => 'required|file|image|mimes:jpeg,png,pdf|max:2048'
        ]);
        $error = $validation->errors()->first();
        $file = $request->file('attch_siup');
        $name = $file->getClientOriginalName();
        //$logo_extension = $uploadedlogo->getClientOriginalExtension();
        if($file->storeAs('public/company_siup/'.$user_id.'',$name)){
            return $name;
        }else{
            $response = new ResponseMessageServiceParameter(404, $error, $name);
            return $response->getResponse();
        }

    }

    public function uploadTdp(Request $request, $id)
    {
        $user_id = User::where(['user_id'=>$id])->first();
        $validation = $request->validate([
            'attch_tdp' => 'required|file|image|mimes:jpeg,png,pdf|max:2048'
        ]);
        $error = $validation->errors()->first();
        $file = $request->file('attch_tdp');
        $name = $file->getClientOriginalName();
        //$logo_extension = $uploadedlogo->getClientOriginalExtension();
        if($file->storeAs('public/company_tdp/'.$user_id.'',$name)){
            return $name;
        }else{
            $response = new ResponseMessageServiceParameter(404, $error, $name);
            return $response->getResponse();
        }

    }

    public function uploadNpwp(Request $request, $id)
    {
        $user_id = User::where(['user_id'=>$id])->first();
        $validation = $request->validate([
            'attch_npwp' => 'required|file|image|mimes:jpeg,png,pdf|max:2048'
        ]);
        $error = $validation->errors()->first();
        $file = $request->file('attch_npwp');
        $name = $file->getClientOriginalName();
        if($file->storeAs('public/company_npwp/'.$user_id.'',$name)){
            return $name;
        }else{
            $response = new ResponseMessageServiceParameter(404, $error, $name);
            return $response->getResponse();
        }

    }

    public function uploadPhoto(Request $request, $id)
    {
        $user_id = User::where(['user_id'=>$id])->first();
        $validation = $request->validate([
            'attch_npwp' => 'required|file|image|mimes:jpeg,png,pdf|max:2048'
        ]);
        $error = $validation->errors()->first();
        $file = $request->file('attch_npwp');
        $name = $file->getClientOriginalName();
        if($file->storeAs('public/company_npwp/'.$user_id.'',$name)){
            response()->json($name, 200);
        }else{
            $response = new ResponseMessageServiceParameter(404, $error, $name);
            return $response->getResponse();
        }
    }
}
