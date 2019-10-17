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
            }else{
                if($activeUser->password!=sha1($password)){
                    $response = new ResponseMessageServiceParameter(404,'Password Not Match',null);
                    return $response->getResponse();
                }else{
                    if($isApi==true){
                        $alertTypes=[];
                        if(!is_null($activeUser->getRole->getAlertTypeMap)){
                            foreach ($activeUser->getRole->getAlertTypeMap as $key =>$item){
                                $alertTypes[]=[
                                    'id'=>$item->getAlertType->id,
                                    'name'=>$item->getAlertType->name
                                ];
                            }
                        }
                        $params=[
                            'user'=>$this->getUserStructural($activeUser),
                            'alert_types'=>$alertTypes,
                        ];
                        $response = new ResponseMessageServiceParameter(200, 'Process Authentification Success', $params);
                        return $response->getResponse();
                    }else{
                        if($activeUser->roles_id!=1){
                            $response = new ResponseMessageServiceParameter(404, 'Authentification Failed,Because You Not Administrator', $activeUser);
                            return $response->getResponse();
                        }else{
                            $response = new ResponseMessageServiceParameter(200, 'Process Authentification Success', $activeUser);
                            return $response->getResponse();
                        }
                    }
                }
            }

        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }
    }
}