<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Company;
use App\Models\CompanyService;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    
    public function register(Request $request){
        //dd($request->all());
            try{
                
                $validation = $request->validate([
                    'company_name' => 'required|string|max:255',
                    'company_email' => 'required|string|email|max:255',
                    'company_telp' => 'required|string|max:12',
                ]);

               #Company
               $file=$this->logoUpload($request);
               if($file==false){

               }
                $company_id = $request->input('company_id');
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
                $company->save();
                
                $user = new User;
                $user->create([
                    'email'=>$company_email,
                    'mode'=>1,
                    'mode_id'=>$company_id,
                ]);
                $user->save();

                if($result['code'] == 200){
                    return  
                    // view('company.register');
                    "<div class='alert alert-success'>Register Sukses</div>
                    <script> scrollToTop(); reload(1500); </script>";
                }else{
                    return 
                    // "Register gagal";
                    "<div class='alert alert-danger'>Register Gagal</div>";
                }
    
            }catch (\Exception $e){
                dd($e);
            }
        }

    public function updateUpload(Request $request,$id)
        {
            $data = Company::find($id);
            $this->validate(request(), [
                'attch_siup' => 'required',
                'attch_tdp' => 'required',
                'attch_npwp' => 'required',
                'attch_photo' => 'required',
            ]);
            Company::find($id);
            $data->nama = $request->input('attch_siup');
            $data->telp = $request->input('attch_tdp');
            $data->email = $request->input('attch_npwp');
            $data->alamat = $request->input('attch_photo');
            $data->save();
            return redirect('user-login')->with('success','updated successfully');  
        }
    
    public function  delete(Request $request){
    
        $id =$request->id;
        try{
            Company::find($id)->delete();
            return "
                <div class'alert alert-success'>Data berhasil dihapus!</div>
                <script> scrollToTop(); reload(1000); </script>";
            
        }catch(\Exception $e){
            return "<div class='alert alert-danger'>Data gagal dihapus!</div>";
        }
    
    }
      
    public function logoUpload(Request $request)
    {
        $validation = $request->validate([
            'company_logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $uploadedlogo = $request->file('company_logo');
        $logo_name = $uploadedlogo->getClientOriginalName();
        //$logo_extension = $uploadedlogo->getClientOriginalExtension();
        $name = $logo_name;
        if($uploadedlogo->storeAs('public/company_logo',$name)){
            return $name;
        }else{
            return false;
        }

    }
}
