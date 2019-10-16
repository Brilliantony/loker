<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 05/10/18
 * Time: 00.33
 */

namespace App\Services;


use App\Models\AlertTypeRoleMap;
use App\Models\Role;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Support\Facades\DB;
use Validator;

class RoleService
{

    public function actionGetData($isApi=false){
        try{
            if($isApi==false){
                $data=Role::all();
            }else{
                $data=Role::whereNotIn('id',[1])->get();
            }
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

    public function actionFindOne($params){
        try{
            $id=$params['id'];
            $decryptedId=decrypt($id);
            $data=Role::find($decryptedId);
            $response = new ResponseMessageServiceParameter(200,'Data tersedia',$data);
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
                $data = new Role();
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
            $encryptedId = $params['id'];
            $decryptedId = decrypt($encryptedId);
            $name = $params['name'];
            $alertType=$params['alert_type'];
            $data = [
                'name' => $name,
            ];

            $rules = $this->rules();
            $rulesUpdate = $this->rulesUpdate();

            if(is_null($decryptedId)){

                $validator = Validator::make($data,$rules);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }

                $data= new Role();
                $data->name=$name;
                $data->save();

                if(!empty($alertType)){
                    $filterArrays=removeNullValue($alertType);
                    foreach ($filterArrays as $key=>$item){
                        $alertTypeRoleMap=new AlertTypeRoleMap();
                        $alertTypeRoleMap->roles_id=$data->id;
                        $alertTypeRoleMap->alert_types_id=decrypt($filterArrays[$key]);
                        $alertTypeRoleMap->save();
                    }

                }
                DB::commit();
                $response = new ResponseMessageServiceParameter(200, 'Data berhasil disimpan!', null);

            }else{
                $validator = Validator::make($data,$rulesUpdate);
                if ($validator->fails()) {
                    $error = $validator->errors()->first();
                    $response = new ResponseMessageServiceParameter(404, $error, null);
                    return $response->getResponse();
                }
                $validate = $this->validate($decryptedId, $name);
                if($validate['code'] == 200){
                    $data=Role::find($decryptedId);
                    $data->name=$name;
                    $data->save();
                    AlertTypeRoleMap::where(['roles_id'=>$data->id])->delete();

                    if(!empty($alertType)){
                        $filterArrays=removeNullValue($alertType);
                        foreach ($filterArrays as $key=>$item){
                            $alertTypeRoleMap=new AlertTypeRoleMap();
                            $alertTypeRoleMap->roles_id=$data->id;
                            $alertTypeRoleMap->alert_types_id=decrypt($filterArrays[$key]);
                            $alertTypeRoleMap->save();
                        }
                    }
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
            'name' => 'required|unique:roles',

        ];
        return $rules;
    }

    private function rulesUpdate()
    {
        $rules = [
            'name' => 'required',
        ];
        return $rules;
    }

    private function validate($id, $name)
    {
        $checkData = Role::where([
            ['id','<>', $id],
            ['name','=', $name],
        ]);

        if ($checkData->count() > 0) {
            $response = new ResponseMessageServiceParameter(404, 'Data tidak tersedia', null);
        }else{
            $response = new ResponseMessageServiceParameter(200, 'Data tersedia', null);
        }
        return $response->getResponse();
    }

}