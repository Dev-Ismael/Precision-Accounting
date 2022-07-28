<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */


    public function index($slug)
    {
        $service = Service::where('slug',$slug)->first();
        // if service Not Found
        if( !$service ){
            return redirect('/');
        }
        return view('service',compact("service"));
    }


}
