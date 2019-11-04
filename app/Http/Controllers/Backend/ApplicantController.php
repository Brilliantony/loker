<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Majors;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function create(Request $request){
        try{
            $file=$this->photoApplicant($request);
            if($file==false){
                return "<div class='alert alert-success'Gagal Upload</div>
                <script> scrollToTop(); reload(1500); </script>";
            }

            $name = $request->input('name');
            $photo = $request->$file;
            $nick_name = $request->input('nick_name');
            $level = $request->input('level');
            $majors_id = $request->input('majors_id');
            $gender = $request->input('gender');
            $address = $request->input('address');
            $code_wilayah = $request->input('code_wilayah');
            $email = $request->input('email');
            $telp = $request->input('telp');
            $birth_date = $request->input('birth_date');

            $applicant = new Applicant;
            $applicant->create([
                'name'=>$name,
                'photo'=>$photo,
                'nick_name'=>$nick_name,
                'level'=>$level,
                'majors_id'=>$majors_id,
                'gender'=>$gender,
                'address'=>$address,
                'code_wilayah'=>$code_wilayah,
                'email'=>$email,
                'telp'=>$telp,
                'birth_date'=>$birth_date,
            ]);

            return view();
        }catch(\Exception $e){
            dd($e);
        }
    } 

    public function delete(Request $request){
    
        $id =$request->id;
        try{
            Applicant::find($id)->delete();
            return view('success.email-sended');
            
        }catch(\Exception $e){
            return "<div class='alert alert-danger'>Data gagal dihapus!</div>";
        }
    
    }

    public function update(Request $request, $applicant_id){
        try{
            $file=$this->photoApplicant($request);
            if($file==false){
                return "<div class='alert alert-success'Gagal Upload</div>
                <script> scrollToTop(); reload(1500); </script>";
            }
            $data = Applicant::find($applicant_id);
            $data->name = $request->input('name');
            $data->photo = $file;
            $data->nick_name = $request->input('nick_name');
            $data->level = $request->input('level');
            $data->majors_id = $request->input('majors_id');
            $data->gender = $request->input('gender');
            $data->address = $request->input('address');
            $data->code_wilayah = $request->input('code_wilayah');
            $data->email = $request->input('email');
            $data->telp = $request->input('telp');
            $data->birth_date = $request->input('birth_date');
            $data->save();

            return view();
        }catch(\Exception $e){
            dd($e);
        }
        
    }

    public function photoApplicant(Request $request)
    {
        $validation = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        if($photo->storeAs('public/photo_applicant /',$logo_name)){
            return $photo;
        }else{
            return false;
        }

    }
    
}
