<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    protected $table="t_majors";
    protected $primaryKey = 'majors_id';
    protected $fillable = [
        'majors_name',
    ];

    public $timestamps = false;
    //

    public function getApplicant()
    {
        return $this->hasMany('App\Models\Applicant','majors_id','applicant_id');
    }
}
