<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Services\LoginService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Auth;
class LoginController extends Controller
{
    private  $user_id;

    // public function __construct($user_id)
    // {
    //   $this->$user_id = $user_id;

    // }

    public function index()
    {

        return view('auth.login');
    }

    public function validateLogin(Request $request)
    {
        try{
            $email = $request->input('email');
            $password = $request->input('password');
            
            $activeUser=User::where(['email'=>$email])->first();
            //dd($activeUser);
            if(!is_null($email) && !is_null($email)){
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
            }
            else{
                echo "<div class='alert alert-danger'>Masukkan email dan password!</div>";
                return view('auth.login');
            }
            
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