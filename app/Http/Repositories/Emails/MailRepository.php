<?php


namespace App\Http\Repositories\Emails;


use App\Mail\VerifyMail;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailRepository
{

    public function sendMailVerify($email, $key)
    {
        Mail::to($email)->send(new VerifyMail($key));
    }


    public function sendMailWelcome()
    {
        Mail::to(Auth::user()->email)->send(new Welcome());
    }


}
