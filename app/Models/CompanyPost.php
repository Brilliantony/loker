<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPost extends Model
{
    //
    protected $table="t_company_post";
    protected $primaryKey = 'post_id';
    protected $fillable = [
        'company_id','title','level_id','majors_id','gender_id','provinsi','kota','created_at','updated_at','created_by','updated_by'
    ];

    public $timestamps = false;
    //

    public function getCompany()
    {
        return $this->hasMany('App\Models\Company','company_id','company_id');
    }
    public function getLevel()
    {
        return $this->hasOne('App\Models\Level','level_id','level_id');
    }
    public function getMajors()
    {
        return $this->hasOne('App\Models\Majors','majors_id','majors_id');
    }

    public function getGender()
    {
        return $this->hasOne('App\Models\Gender','gender_id','gender_id');
    }
}
