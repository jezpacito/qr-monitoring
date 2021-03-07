<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(){
        $to_name = 'test';
        $to_email ='gatmaitanjezreel@gmail.com';
        $data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('CBDTMS QR');
            $message->from(config('services.gmail.email'),'’Test Mail’');
        });
    }
}
