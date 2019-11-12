<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    //
    protected $table="t_gender";
    protected $primaryKey = 'gender_id';
    protected $fillable = [
        'gender_name',
    ];

    public $timestamps = false;
    //

    public function getApplicant()
    {
        return $this->hasMany('App\Models\Applicant','applicant_id','gender_id');
    }
}
