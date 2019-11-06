<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table="m_wilayah";
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode', 'nama', 'lat', 'lng', 'kodepos', 'path', 'active'
    ];

    public $timestamps = false;
}
