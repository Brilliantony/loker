<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table="t_applicant";
    protected $primaryKey = 'applicant_id';
    protected $fillable = [
        'name', 'photo', 'nick_name', 'level_id', 'majors_id', 'gender_id', 'address', 'provinsi','kota', 'email', 'telp', 'birth_date','status',
    //
    ];

    public $timestamps = false;

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
