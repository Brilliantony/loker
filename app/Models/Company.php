<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table="t_company";
    protected $fillable = [
        'company_name', 'company_logo', 'company_telp', 'company_email', 'company_address', 'code_wilayah', 'attach_siup', 'attch_tdp', 'attch_npwp', 'attch_photo',
    ];
    //

    public $timestamps = false;

}
