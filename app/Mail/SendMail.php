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
    public $email;
    public $verifyUser;
    public $user;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$token)
    {
        // $this->email=$email;
        // $this->token=$token;
        $this->email=$email;
        $this->token = $token;
        //$this->verifyUser=$verifyUser;
        
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $user = new User;
        // $email = DB::table('t_user')->select('email')->first();
        // $token = DB::table('verify_users')->select('token')->first();
        // $params=[
        //     'from'=>'Loker Magang',
        //     'email'=>$email->email,
        //     'token'=>$token,
        // ];

        return $this->view('emails.verify-email')->with([
            'from' => 'LOKER MAGANG',
            'email' => $this->email,
            'token' => $this->token,
        ]);
    }


}