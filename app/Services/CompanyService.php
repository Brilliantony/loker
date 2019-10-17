<?php


namespace App\Services;


use App\Mail\SendMail;
use App\Models\Company;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Support\Facades\DB;
class UserService
{

    public function actionGetData(){
        try{
            $data=Company::all();
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
            $data=Company::find($id);
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
                'company_id'=>$params['company_id']
            ];

            $result=$this->actionFindOne($paramsId);
            if($result['code']==200){
                $data= $result['data'];
            }else{
                $data = new Company();
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
            $id = $params['company_id'];
            $company_name=$params['company_name'];
            $company_logo=$params['company_logo'];
            $company_telp=$params['company_telp'];
            $company_email=$params['company_email'];
            $company_address=$params['company_address'];
            $code_wilayah=$params['code_wilayah'];
            $attch_siup=$params['attch_siup'];
            $attch_tdp=$params['attch_tdp'];
            $attch_npwp=$params['attch_npwp'];
            $attch_photo=$params['attch_photo'];

            $data = [
                'company_name'=>$company_name,
                'company_logo'=>$company_logo,
                'company_telp'=>$company_telp,
                'company_email'=>$company_email,
                'company_address'=>$company_address,
                'code_wilayah'=>$code_wilayah,
                'password'=>sha1($password),
                //'roles_id'=>decrypt($rolesId)
            ];

            $rules = $this->rules();
            $rulesUpdate = $this->rulesUpdate();

            if(is_null($id)){

                $validator = Validator::make($data,$rules);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }

                $data= new Company();
                $data->company_name=$company_name;
                $data->company_logo=$company_logo;
                $data->company_telp=$company_telp;
                $data->company_email=$company_email;
                $data->company_address=$company_address;
                $data->code_wilayah=$code_wilayah;
                $data->save();

                $data2 = new User();
                $data2->email = $company_name;
                $data2->mode = $mode;
                $data2->mode_id = $mode_id;
                $data2->privilage = $privilage;
                $data2->save();

                DB::commit();
                $response = new ResponseMessageServiceParameter(200, 'Data berhasil disimpan!', null);

            }else{
                $validator = Validator::make($data,$rulesUpdate);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }
                $validate = $this->validate($id, $company_name);
                if($validate['code'] == 200){

                    $data= Company::find($id);
                    $data->company_name=$company_name;
                    $data->company_logo=$company_logo;
                    $data->company_telp=$company_telp;
                    $data->company_email=$company_email;
                    $data->company_address=$company_address;
                    $data->code_wilayah=$code_wilayah;
                    $data->attch_siup = $attch_siup;
                    $data->attch_tdp = $attch_tdp;
                    $data->attch_npwp = $attch_npwp;
                    $data->attch_photo = $attch_photo;
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
            Operasi tidak diizinkan!', null);
        }

        return $response->getResponse();
    }

    private function rules()
    {
        $rules = [
            'company_name'=>'required',
            'company_logo'=>'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'company_telp'=>'required|max:12',
            'company_email'=>'required',
            'company_address'=>'required',
            'code_wilayah'=>'required',

        ];
        return $rules;
    }

    private function rulesUpdate()
    {
        $rules = [
            'company_name'=>'required',
            'company_logo'=>'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'company_telp'=>'required|max:12',
            'company_email'=>'required',
            'company_address'=>'required',
            'code_wilayah'=>'required',
            'attch_siup'=>'required',
            'attch_tdp'=>'required',
            'attch_npwp'=>'required',
            'attch_photo'=>'required,'
           
        ];
        return $rules;
    }

    private function validate($id, $company_name)
    {
        $checkData = Company::where([
            ['id','<>', $id],
            ['company_name','=', $company_name],
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

            $activeUser=Company::find($userId);
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

    public function actionVerifyEmail($param)
    {
        try{
            $email=$params['email'];
            if(is_null($email) || $email == ""){
                $response = new ResponseMessageServiceParameter(404, 'Missing parameter email', null);
                return $response->getResponse();
            }
            $checkData=User::where(['email'=>$email])->first();
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
            $response = new ResponseMessageServiceParameter(200, 'Forgot password successfully', null);
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
            $checkData=User::where(['email'=>$email])->first();
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