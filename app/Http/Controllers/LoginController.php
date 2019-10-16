<?php


namespace App\Http\Controllers;


use App\Services\LoginService;
use Illuminate\Http\Request;

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
        if ($request->session()->exists('activeUser')) {
            return redirect('/');
        }
        $params = [
            'title' => 'Login'
        ];
        return view('auth.login', $params);
    }

    public function setNullAlertSession(Request $request)
    {
        try{
            $request->session()->put('alert', null);
            return "ok";
        }catch (\Exception $e){
            return "failed";
        }
    }

    public function validateLogin(Request $request)
    {
        try{
            $username = $request->input('email');
            $password = $request->input('password');

            $params=[
                'email'=>$email,
                'password'=>$password
            ];

            $result = $this->loginService->actionLogin($params);

            if($result['code']== 200){
                $request->session()->put('activeUser', $result['data']);
                return "<div class='alert alert-success'>".$result['message']."</div> <script>reload(1000);</script>";
            }else{
                return "<div class='alert alert-warning'>".$result['message']."</div>";
            }
        }catch(\Exception $e){
            return "<div class='alert alert-danger'>Terjadi kesalahan pada server</div>";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

}