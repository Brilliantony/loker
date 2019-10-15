<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Fondation\Auth\Admin as Authenticatable;

class Admin extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];
}
