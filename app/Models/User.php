<?php
namespace App;
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table="t_user";
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email', 'password', 'mode', 'mode_id', 'privilege', 'token'
    ];

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];
    //
    public function getCompany()
    {
        return $this->hasOne('App\Models\Company');
    }
}
