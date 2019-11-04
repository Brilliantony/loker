<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Mail\SendMail;
use App\Models\User;
use App\Models\Company;
use App\Models\Majors;
use App\Models\Applicant;
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
        if($request->session()->exists('activeUser')){

            $company = Company::all();
            $majors = Majors::all();
            $applicant = Applicant::all();
            $params=[
                'company'=> $company,
                'majors'=>$majors,
                'applicant'=>$applicant,
            ];
            return view('company.index');
        }
        else{
            return redirect('login');
        }
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

                $user_id = $request->session()->get('activeUser')->user_id;
                //dd($user_id);
                $data_qrr   = DB::select("select * from t_user where user_id = '".$user_id."' ");
                if(count($data_qrr) != 0){
                    $data = new User;
                    $params = [
                        'data'=>$data_qrr[0],
                    ];
                    return view('company.uploadFile',$params);
                }else{
                    return view('errors.internal-server');
                }
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
                
                // $validation = $request->validate([
                //     'company_name' => 'required|string|max:255',
                //     'company_email' => 'required|string|email|max:255',
                //     'company_telp' => 'required|string|max:12',
                // ]);

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
            $activeUser = User::find(session()->get('activeUser')->user_id);
            $activeCompany = Company::find($activeUser->mode_id);
     
            $attch_siup = $request->file('attch_siup');
            $attch_tdp = $request->file('attch_tdp');
            $attch_npwp = $request->file('attch_npwp');
            $attch_photo = $request->file('attch_photo');
           
            $activeCompany->attch_siup = $attch_siup->getClientOriginalName();
            $activeCompany->attch_tdp = $attch_tdp->getClientOriginalName();
            $activeCompany->attch_npwp = $attch_npwp->getClientOriginalName();
            $activeCompany->attch_photo = $attch_photo->getClientOriginalName();
           
            try{
                $attch_siup->storeAs('public/company_siup/',$activeUser->user_id.''.$attch_siup->getClientOriginalName());
                $attch_tdp->storeAs('public/company_tdp/',$activeUser->user_id.''.$attch_tdp->getClientOriginalName());
                $attch_npwp->storeAs('public/company_npwp/',$activeUser->user_id.''.$attch_npwp->getClientOriginalName());
                $attch_photo->storeAs('public/company_photo/',$activeUser->user_id.''.$attch_photo->getClientOriginalName());
                $activeCompany->save();

                return redirect('/company');
            }catch(\Exception $e)
            {
                dd($e->getMessage());
            }

        }
    
    public function delete(Request $request){
    
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
            'company_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $uploadedlogo = $request->file('company_logo');
        $logo_name = $uploadedlogo->getClientOriginalName();
        $random = str_random(5);
        if($uploadedlogo->storeAs('public/company_logo/'.$random,$logo_name)){
            return $logo_name;
        }else{
            return false;
        }

    }
}
