<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonials = Testimonial::where('visibility', '1')->get();
        $members      = Member::get();
        return view('home' , compact('testimonials', 'members'));
    }
}
