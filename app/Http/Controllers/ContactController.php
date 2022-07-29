<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

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


    public function send(ContactRequest $reaquest)
    {

        dd($reaquest);

    }


}
