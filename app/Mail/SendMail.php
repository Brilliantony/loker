<?php

namespace App\Mail;


use App\Models\Company;
use App\Models\User;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user=$user;
        
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $params=[
            'from'=>'Loker Magang',
            'remember_token'=>$this->user->remember_token,
            
        ];

        return $this->view('emails.verify-email',$params);
    }


}