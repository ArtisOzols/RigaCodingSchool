<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function store()
    {





        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'phoneCode' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'privacy' => 'required',
            'date'=>'',
            'time' =>''
        ]);


        Mail::to('MAILOS@mailos.lv')->send(new ContactFormMail($data));

        return redirect('/kontakti')
        ->with('message', "Paldies par ziņu! Drīz sazināsimies ar Jums.");
        }
}
