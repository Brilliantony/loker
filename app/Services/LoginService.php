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

    private function getUserStructural($data)
    {
        $currentData=[
            'id'=>$data->id,
            'fullname'=>$data->fullname,
            'username'=>$data->username,
            'email'=>$data->email,
            'fcm_key'=>$data->fcm_key,
            'groups_id'=>$data->roles_id,
            'groups_name'=>$data->getRole->name,
        ];

        return $currentData;
    }


    public function actionUpdateFcmKey($params){
        try{
            $usersId=$params['users_id'];
            $fcmKey=$params['fcm_key'];

            if(is_null($usersId) || $usersId == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing paramete users_id', null);
                return $response->getResponse();
            }

            if(is_null($fcmKey) || $fcmKey == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter fcm_key', null);
                return $response->getResponse();
            }

            $activeUser=User::find($usersId);
            if(is_null($activeUser)){
                $response = new ResponseMessageServiceParameter(404,'User Not Found',null);
                return $response->getResponse();
            }else{
                $activeUser->fcm_key=$fcmKey;
                $activeUser->save();
                $response = new ResponseMessageServiceParameter(200, 'Update fcm successfull', null);
                return $response->getResponse();
            }
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }
    }

    public function initializeUser()
    {
        //Inisialisasi pengguna
        $user = User::count();
        if($user == 0) {
            //Inisialisasi roles
            $role = new Role();
            $role->id = 1;
            $role->name = "Administrator";
            $role->is_delete=0;
            $role->save();
            $role = new Role();
            $role->id = 2;
            $role->name = "Pejabat";
            $role->is_delete=0;
            $role->save();
            $role = new Role();
            $role->id = 3;
            $role->name = "ARFF";
            $role->is_delete=0;
            $role->save();
            $role = new Role();
            $role->id = 4;
            $role->name = "AVSEC";
            $role->is_delete=0;
            $role->save();
            //Inisialisasi pengguna
            $data = new User();
            $data->id=1;
            $data->fullname = "Administrator Panic Button";
            $data->username= "admin";
            $data->password = sha1("panic2018");
            $data->email = "admin@admin.com";
            $data->roles_id = 1;
            $data->save();

            //inisialisasi alert type
            $alert=new AlertType();
            $alert->id=1;
            $alert->name='Siaga 2';
            $alert->save();
            $alert=new AlertType();
            $alert->id=2;
            $alert->name='Siaga 3';
            $alert->save();
            $alert=new AlertType();
            $alert->id=3;
            $alert->name='Status Kuning';
            $alert->save();
            $alert=new AlertType();
            $alert->id=4;
            $alert->name='Status Merah';
            $alert->save();

        }



    }
}