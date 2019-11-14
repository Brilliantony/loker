<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Majors;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Level;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function formCreate(){
        $applicant = new Applicant;
        $user = new User;
        $majors = new Majors;
        $level = new Level;
        $params = [
            'level'=>$level,
            'majors'=>$majors,
            'applicant'=>$applicant,
            'user'=>$user,
        ];
        return view('applicant.register',$params);
    }

    public function getAll(){
        $data = Applicant::all();
        return response()->json($data);
    }

    public function create(Request $request){
        try{
            $file=$this->photoApplicant($request);
            if($file==false){
                return "<div class='alert alert-success'Gagal Upload</div>
                <script> scrollToTop(); reload(1500); </script>";
            }
            
            $name = $request->input('name');
            $photo = $file;
            $nick_name = $request->input('nick_name');
            $level = $request->input('level');
            $majors_id = $request->input('majors_id');
            $gender = $request->input('gender');
            $address = $request->input('address');
            $provinsi = $request->input('provinsi');
            $kota = $request->input('kota');
            $email = $request->input('email');
            $telp = $request->input('telp');
            $birth_date = $request->input('birth_date');
            //dd($photo);
            $applicant = new Applicant; 
            $applicant->create([
                'name'=>$name,
                'photo'=>$photo,
                'nick_name'=>$nick_name,
                'level_id'=>$level,
                'majors_id'=>$majors_id,
                'gender_id'=>$gender,
                'address'=>$address,
                'provinsi'=>$provinsi,
                'kota'=>$kota,
                'email'=>$email,
                'telp'=>$telp,
                'birth_date'=>$birth_date,
            ]);

            $applicant_id = DB::table('t_applicant')->select('applicant_id')->orderBy('applicant_id','desc')->first();
                
            $user = new User;
            $user->create([
                'email'=>$email,
                'mode'=>3,
                'mode_id'=>$applicant_id->applicant_id,
                'token'=> str_random(40),
            ]);

            return "<div class='alert alert-success'>Sukses Ditambahkan!</div>
            <script> scrollToTop(); reload(1000); </script>";
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
        if($photo->storeAs('public/photo_applicant/',$name)){
            return $name;
        }else{
            return false;
        }
    }

    public function addProvinsi(Request $request){
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("m_wilayah")
                    ->select("kode","nama")
                    ->where('nama','LIKE',"%$search%")
                    ->where('kode','NOT LIKE','%.%')
                    ->where('active','=','1')
                    ->orderBy('nama','asc')
                    ->get();
        }
        return response()->json($data);
    }

    public function addKota(Request $request){
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("m_wilayah")
                    ->select("kode","nama")
                    ->where('nama','LIKE',"%$search%")
                    ->where('kode','LIKE','%.%')
                    ->where('kode','NOT LIKE','%.%.%')
                    ->where('active','=','1')
                    ->orderBy('nama','asc')
                    ->get();
        }
        return response()->json($data);
        
    }
    
    
}
