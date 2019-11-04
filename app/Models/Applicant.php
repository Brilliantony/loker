<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table="t_applicant";
    protected $primaryKey = 'applicant_id';
    protected $fillable = [
        'name', 'photo', 'nick_name', 'level', 'majors_id', 'gender', 'address', 'code_wilayah', 'email', 'telp', 'birth_date','status',
    //
    ];

    public $timestamps = false;

    public function getMajors()
    {
        return $this->hasOne('App\Models\Majors','majors_id','applicant_id');
    }
}
