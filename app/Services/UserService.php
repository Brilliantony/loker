<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 05/10/18
 * Time: 00.33
 */

namespace App\Services;


use App\Mail\SendMail;
use App\Models\User;
use App\Models\Company;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Support\Facades\DB;

class UserService
{

    public function actionGetData(){
        try{
            $data=User::all();
            if($data->count()<=0){
                $response = new ResponseMessageServiceParameter(404,'Data tidak tersedia',[]);
                return $response->getResponse();
            }
            $response = new ResponseMessageServiceParameter(200,'Data tersedia',$data);
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500,'Server Error',[]);
        }

        return $response->getResponse();

    }

    public function actionFindOne($params,$isApi=false){
        try{
            $id=$params['id'];
            $decryptedId=decrypt($id);
            $data=User::find($decryptedId);
            if($isApi==false){
                $response = new ResponseMessageServiceParameter(200,'Data tersedia',$data);
            }else{
                $currentData=$this->getUserStructural($data);
                $response = new ResponseMessageServiceParameter(200,'Data tersedia',$currentData);
            }
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(404,'Data tidak tersedia',null);
        }
        return $response->getResponse();
    }

    public function actionForm($params){
        try{
            $paramsId=[
                'id'=>$params['id']
            ];

            $result=$this->actionFindOne($paramsId);
            if($result['code']==200){
                $data= $result['data'];
            }else{
                $data = new User();
            }
            $response = new ResponseMessageServiceParameter(200, 'Data tersedia', $data);
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(404,'Data tidak tersedia',null);
        }

        return $response->getResponse();

    }

    public function actionSave($params){
        DB::beginTransaction();
        try{
            $id = $params['id'];
            $email = $params['email'];
            $password =$params['password'];
            $mode=$params['mode'];
            $modeId=$params['mode_id'];
            $privilage = ['privilage'];
            $data = [
                'email'=>$email,
                'password'=>sha1($password),
                'mode'=>$mode,
                'modeId'=>$modeId,
                'privilage'=>$privilage,
            ];

            $rules = $this->rules();
            $rulesUpdate = $this->rulesUpdate();

            if(is_null($Id)){

                $validator = Validator::make($data,$rules);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }

                $data= new User();
                $data->email=$email;
                $data->password=sha1($password);
                $data->mode=$mode;
                $data->modeId=$modeId;
                $data->privilage=$privilage;
                $data->save();

                DB::commit();
                $response = new ResponseMessageServiceParameter(200, 'Data berhasil disimpan!', null);

            }else{
                $validator = Validator::make($data,$rulesUpdate);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }
                $validate = $this->validate($decryptedId, $username);
                if($validate['code'] == 200){

                    $data= User::find($Id);
                    $data->email=$email;
                    $data->password=sha1($password);
                    $data->mode=$mode;
                    $data->modeId=$modeId;
                    $data->privilage=$privilage;
                    $data->save();
                    DB::commit();
                    $response = new ResponseMessageServiceParameter(200, 'Data berhasil di update!', null);
                }
                else{
                    $response = new ResponseMessageServiceParameter(404, 'Data sudah tersedia!', null);
                }
            }

        }catch(\Exception $e){
            DB::rollBack();
            $response = new ResponseMessageServiceParameter(500, 'Terjadi kesalahan! data gagal disimpan!', null);
        }
        return $response->getResponse();


    }

    public function actionDelete($params){
        try{
            $paramsId=[
                'id'=>$params['id']
            ];

            $result = $this->actionFindOne($paramsId);
            if($result['code'] == 200){
                $data = $result['data'];
                $data->delete();
                $response = new ResponseMessageServiceParameter(200, 'data berhasil dihapus!', null);
            }else{
                $response = new ResponseMessageServiceParameter(404, 'Terjadi kesalahan! data gagal dihapus!', null);
            }

        }catch(\Exception $e){
            $response = new ResponseMessageServiceParameter(500, '
            Operasi tidak diizinkan! Data digunakan oleh entitas lain', null);
        }

        return $response->getResponse();
    }

    private function rules()
    {
        $rules = [
            'email'=>'required',
            'password'=>'required',
            'mode'=>'required',
            'mode_id'=>'required',
            'privilage'=>'required',

        ];
        return $rules;
    }

    private function rulesUpdate()
    {
        $rules = [
            
            'email'=>'required',
            
        ];
        return $rules;
    }

    private function validate($id, $email)
    {
        $checkData = User::where([
            ['id','<>', $id],
            ['email','=', $email],
        ]);

        if ($checkData->count() > 0) {
            $response = new ResponseMessageServiceParameter(404, 'Data tidak tersedia', null);
        }else{
            $response = new ResponseMessageServiceParameter(200, 'Data tersedia', null);
        }
        return $response->getResponse();
    }

    // private function getUserStructural($data)
    // {
    //     $currentData=[
    //         'id'=>$data->id,
    //         'fullname'=>$data->fullname,
    //         'username'=>$data->username,
    //         'email'=>$data->email,
    //         'fcm_key'=>$data->fcm_key,
    //         'groups_id'=>$data->roles_id,
    //         'groups_name'=>$data->getRole->name,
    //     ];

    //     return $currentData;
    // }


    public function actionChangePassword($params)
    {
        try{
            $newPassword=$params['new_password'];
            $confirmPassword=$params['confirm_password'];
            $userId=$params['users_id'];


            if(is_null($newPassword) || $newPassword == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter new_password', null);
                return $response->getResponse();
            }

            if(is_null($confirmPassword) || $confirmPassword == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter confirm_password', null);
                return $response->getResponse();
            }

            if(is_null($userId) || $userId == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter user_id', null);
                return $response->getResponse();
            }

            $activeUser=User::find($userId);
            if(is_null($activeUser)){
                $response = new ResponseMessageServiceParameter(404,'User Not Found',null);
                return $response->getResponse();
            }else{
                if($newPassword != $confirmPassword){
                    $response = new ResponseMessageServiceParameter(404,'Confirm password not match',null);
                    return $response->getResponse();
                }else{
                    $activeUser->password=sha1($newPassword);
                    $activeUser->save();
                    $response = new ResponseMessageServiceParameter(200, 'Change password successfully', null);
                    return $response->getResponse();

                }
            }

        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }

    }
    public function verifyEmail($params)
    {
        try{
            $email=$params['email'];
            if(is_null($email) || $email == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter email', null);
                return $response->getResponse();
            }
            $checkData=Company::where(['email'=>$email])->first();
            if(is_null($checkData)){
                $response = new ResponseMessageServiceParameter(404,'Email Not Found',null);
                return $response->getResponse();
            }

            $newPassword=codeGenerator();
            DB::beginTransaction();
            $checkData->password=sha1($newPassword);
            $checkData->save();
            Mail::to($checkData->email)->queue(new SendMail($checkData->company_name,$newPassword));
            DB::commit();
            $response = new ResponseMessageServiceParameter(200, 'Send to your email successfully', null);
            return $response->getResponse();
        }catch (\Exception $e){
            DB::rollBack();
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }
    }
    public function actionForgotPassword($params)
    {
        try{
            $email=$params['email'];
            if(is_null($email) || $email == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter email', null);
                return $response->getResponse();
            }
            $checkData=Company::where(['email'=>$email])->first();
            if(is_null($checkData)){
                $response = new ResponseMessageServiceParameter(404,'Email Not Found',null);
                return $response->getResponse();
            }

            $newPassword=codeGenerator();
            DB::beginTransaction();
            $checkData->password=sha1($newPassword);
            $checkData->save();
            Mail::to($checkData->email)->queue(new SendMail($checkData->fullname,$newPassword));
            DB::commit();
            $response = new ResponseMessageServiceParameter(200, 'Forgot password successfully', null);
            return $response->getResponse();
        }catch (\Exception $e){
            DB::rollBack();
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
            return $response->getResponse();
        }
    }


    public function actionCheckPassword($params)
    {
        try{
            $id=$params['id'];
            $password=$params['password'];

            if(is_null($id) || $id == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter user_id', null);
                return $response->getResponse();
            }

            if(is_null($password) || $password == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter password', null);
                return $response->getResponse();
            }
            $checkData=User::find($id);
            if(is_null($checkData)){
                $response = new ResponseMessageServiceParameter(404,'User Not Found',null);
                return $response->getResponse();
            }

            if($checkData->password!=sha1($password)){
                $response = new ResponseMessageServiceParameter(404, 'Password not match', null);
                return $response->getResponse();
            }

            $response = new ResponseMessageServiceParameter(200, 'Checking password successfully', null);
        }catch (\Exception $e){
            $response = new ResponseMessageServiceParameter(500, 'Server error', null);
        }

        return $response->getResponse();

    }



}