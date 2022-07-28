<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;


class ResourceController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */


    public function index()
    {
        $resources = Resource::get();
        return view('resources',compact('resources'));
    }


}
