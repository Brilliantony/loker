<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Company;
use App\Models\School;
use App\Models\Applicant;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function companyCreate(Request $request)
    {
        dd($request->all());
        $validation = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|string|email|max:255',
            'company_telp' => 'required|string|max:12',
        ]);

        $company_name = $request->input('company_name');
        $company_logo = $this->logoUpload($request);
        $company_telp = $request->input('company_telp');
        $company_email = $request->input('company_email');
        $company_address = $request->input('company_address');
        $code_wilayah = $request->input('code_wilayah');

        $company = new Company;

        try
        {
            $company->companyCreate([
                'company_name' => $company_name,
                'company_logo' => $company_logo,
                'company_telp' => $company_telp,
                'company_email' => $company_email,
                'company_address' => $company_address,
                'code_wilayah' => $code_wilayah,
            ]);
            
            return "<div class='alert alert-success'>Company Sukses Ditambahkan!</div>
                    <script> scrollToTop(); reload(1000); </script>";
        }
        catch(\Exception $e)
        {
            return "<div class='alert alert-danger'>User Gagal Ditambahkan!</div>
                    <script> scrollToTop(); reload(1000); </script>";
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
}
