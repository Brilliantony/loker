<?php

namespace App\Mail;


use App\Models\Company;
use App\ServiceParameters\ResponseMessageServiceParameter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $newPassword;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$newPassword)
    {
        $this->name=$name;
        $this->newPassword=$newPassword;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $params=[
            'from'=>'Panic Button Apps',
            'newPassword'=>$this->newPassword,
            'name'=>$this->name
        ];

        return $this->view('emails.forgot-password',$params);
    }


}