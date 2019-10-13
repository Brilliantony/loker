<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'school_name', 'school_logo', 'school_telp', 'school_email', 'school_address', 'level', 'code_wilayah',
    ];

    public $timestamps = false;
    //
}
