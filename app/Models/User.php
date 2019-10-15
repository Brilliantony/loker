<?php
namespace App;
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Fondation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password', 'mode', 'mode_id', 'privilege'
    ];

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];
    //
}
