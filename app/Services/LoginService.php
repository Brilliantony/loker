<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 05/10/18
 * Time: 00.13
 */

namespace App\Services;


use App\Models\AlertType;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use App\ServiceParameters\ResponseMessageServiceParameter;


class LoginService
{

    public function actionLogin($params,$isApi=false)
    {
        try{
            $username=$params['email'];
            $password=$params['password'];


            if(is_null($email) || $email == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing paramete email', null);
                return $response->getResponse();
            }

            if(is_null($password) || $password == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter password', null);
                return $response->getResponse();
            }

            $activeUser=User::where(['email'=>$email])->first();
            if(is_null($activeUser)){
                $response = new ResponseMessageServiceParameter(404,'User Not Found',null);
                return $response->getResponse();
            }
            if($activeUser->password!=sha1($password)){
                $response = new ResponseMessageServiceParameter(404,'Password Not Match',null);
                return $response->getResponse();
            }
           
            
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }
    }
}