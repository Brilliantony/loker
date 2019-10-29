<?php
namespace App;
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Fondation\Auth\User as Authenticatable;

class User extends Model
{
    use Notifiable;

    protected $table="t_user";
    protected $fillable = [
        'email', 'password', 'mode', 'mode_id', 'privilege', 'token'
    ];

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];
    //
    public function company()
    {
        return $this->hasOne('App\Models\Company');
    }
}
