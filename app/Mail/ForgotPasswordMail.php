<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    # build for the template of the email
    public function build()
    {
        #markdown is the template of the email
        #config('app.name') is the name of the app - Laravel
       return $this->markdown('emails.forget_password')->subject('DPT3054N HR System Forgot Password');
    }

}
