<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultingRequest;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{

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
        return view('consulting');
    }





    
}
