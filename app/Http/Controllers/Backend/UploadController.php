<?php

namespace App\Http\Controllers\Backend;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class UploadController extends Controller
{
    public function create(Request $request)
    {
        $activeUser = User::find(session()->get('activeUser')->user_id);
        $activeCompany = Company::find($activeUser->mode_id);
 
        $attch_siup = $request->file('attch_siup');
        $attch_tdp = $request->file('attch_tdp');
        $attch_npwp = $request->file('attch_npwp');
        $attch_photo = $request->file('attch_photo');
       
        $activeCompany->attch_siup = $attch_siup->getClientOriginalName();
        $activeCompany->attch_tdp = $attch_tdp->getClientOriginalName();
        $activeCompany->attch_npwp = $attch_npwp->getClientOriginalName();
        $activeCompany->attch_photo = $attch_photo->getClientOriginalName();
        
       
        try{
            $attch_siup->storeAs('public/company_siup/',$activeUser->user_id.''.$attch_siup->getClientOriginalName());
            $attch_tdp->storeAs('public/company_siup/',$activeUser->user_id.''.$attch_tdp->getClientOriginalName());
            $attch_npwp->storeAs('public/company_siup/',$activeUser->user_id.''.$attch_npwp->getClientOriginalName());
            $attch_photo->storeAs('public/company_siup/',$activeUser->user_id.''.$attch_photo->getClientOriginalName());
            $activeCompany->save();
        }catch(Exception $e)
        {
            dd($e->getMessage());
        }
       
 
    }
}
