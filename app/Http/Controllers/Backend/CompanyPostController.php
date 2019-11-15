<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyPost;
use App\Models\Company;
use App\Models\Majors;
use App\Models\level;
use App\Models\Applicant;
use App\Models\User;

class CompanyPostController extends Controller
{
    public function posting(Request $request){
        try{
            $activeUser = User::find(session()->get('activeUser')->user_id);

            $judul = $request->input('judul');
            $level = $request->input('level');
            $jurusan = $request->input('jurusan');
            $gender = $request->input('gender');
            $provinsi = $request->input('itemProvinsi');
            $kota = $request->input('itemKota');
            
            $post = new CompanyPost;

            if(!is_null($judul) && !is_null($level) && !is_null($jurusan) && !is_null($gender) && !is_null($provinsi) && !is_null($kota))
            {
                $post->create([
                    'company_id'=>$activeUser->mode_id,
                    'title'=>$judul,
                    'level_id'=>$level,
                    'majors_id'=>$jurusan,
                    'gender_id' => $gender,
                    'provinsi'=>$provinsi,
                    'kota'=>$kota,
                ]);
                    echo "<div class='alert alert-danger'>Posting Success</div>";
                    return "<script> scrollToTop(); reload(1500); </script>";
            }
            else
            {
                echo "<div class='alert alert-danger'>Check Kembali Inputan Anda !</div>";
            }
           
        }catch(\Exception $e){
            dd($e);
        }
    }
    
    public function filter(Request $request){
        $post_id = $request->post_id;
        $post = new CompanyPost;
        $applicant = new Applicant;
        try{
            $post = DB::table('t_company_post')->where('post_id','=',$post_id)->first();
            
            $applicant = DB('t_applicant')
            ->where('level_id','=',$post->level_id)
            ->where('majors_id','=',$post->majors_id)
            ->where('gender_id','=',$post->gender_id)
            ->where('kota','=',$post->kota)->first();

            return view('company.index')->with(['data'=>$applicant]);
         
        }catch(\Exception $e){
            dd($e);
        }
        
    }
}
