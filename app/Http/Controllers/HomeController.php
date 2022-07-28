<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Member;
use App\Models\Service;
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
        $articles     = Article::orderBy('id','desc')->limit(6)->get();
        $services     = Service::where('parent_id', Null)->orderBy('id','desc')->limit(6)->get();
        return view('home' , compact('testimonials', 'members','articles','services'));
    }
}
