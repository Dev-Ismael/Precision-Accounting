<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    CONST RECIVER_MAIL   = 'info@cpapai.com' ;
    CONST MAIL_SUBJECT   = 'A new contact submition at cpapai.com' ;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting      = Setting::find(1);
        return view('contact',compact('setting'));
    }


    public function send(ContactRequest $request)
    {
        $contactData = $request->all();
        $contactData += ['subject' => static::MAIL_SUBJECT ];
        Mail::to(static::RECIVER_MAIL)->            // Our Email 'reciver'
            send( new ContactMail( $contactData ) );
        return "thanks for submition";
    }


}
