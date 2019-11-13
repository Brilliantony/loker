<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $table="t_company_quota_transaction";
    protected $primaryKey = 'transaction_id';
    protected $fillable = [
        'company_id','description','quota'
    ];
 
    public $timestamps = false;
    //

    public function getCompany()
    {
        return $this->hasOne('App\Models\Company','company_id','company_id');
    }
    //
}
