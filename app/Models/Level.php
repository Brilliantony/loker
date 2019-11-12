<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $table="t_level";
    protected $primaryKey = 'level_id';
    protected $fillable = [
        'level_name',
    ];

    public $timestamps = false;
    //

    public function getApplicant()
    {
        return $this->hasMany('App\Models\Applicant','applicant_id','level_id');
    }
}
