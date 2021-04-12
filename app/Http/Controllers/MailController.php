<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use PDF;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $name = $request->Name;
        
        $subj = $request->Asunto;
        $msg = $request->Mensaje;
        $pdf = 
        Mail::to(env('CONTACT_MAIL'))->send(new ContactMail($name, $email, $subj, $msg));
        return redirect()->route('home')->withSuccess(['email' => 'Mensaje enviado. Gracias por contactarnos!']);
    }
}
