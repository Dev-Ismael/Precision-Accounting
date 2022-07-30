<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultingRequest;
use App\Mail\ConsultingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultingController extends Controller
{
    CONST RECIVER_MAIL   = 'info@cpapai.com' ;
    CONST MAIL_SUBJECT   = 'A new consulting submition at cpapai.com' ;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('consulting');
    }



    public function send(ConsultingRequest $request )
    {
        $consultingData = $request->all();
        $consultingData += ['subject' => static::MAIL_SUBJECT ];
        Mail::to(static::RECIVER_MAIL)->            // Our Email 'reciver'
            send( new ConsultingMail( $consultingData ) );
        return "thanks for submition";
    }






}
