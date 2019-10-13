<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'name', 'photo', 'nick_name', 'level', 'majors_id', 'gender', 'address', 'code_wilayah', 'email', 'telp', 'birt_date',
    //
    ];

    public $timestamps = false;
}
