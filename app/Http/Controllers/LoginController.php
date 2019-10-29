<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Services\LoginService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private  $loginService;

    public function __construct()
    {
        $this->loginService= new LoginService();
        //$this->loginService->initializeUser();

    }

    public function index(Request $request)
    {
        $params = [
            'title' => 'Login'
        ];
        return view('auth.login', $params);
    }

    public function validateLogin(Request $request)
    {
        try{
            $email = $request->input('email');
            $password = $request->input('password');

            $activeUser=User::where(['email'=>$email])->first();
            if($activeUser->email!=$email) {
                echo "<div class='alert alert-danger'>Anda bukan Admin!</div>";
                return view('auth.login');
            }
            if($activeUser->password!=sha1($password)){
                echo "<div class='alert alert-danger'>Password Salah!</div>";
                return view('auth.login');
            }


            $request->session()->put('activeUser', $activeUser);
            return redirect('form/company/uploadFile');
        }catch(\Exception $e){
            //return "<div class='alert alert-danger'>Terjadi kesalahan pada server</div>";
            dd($e);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

}