<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles        = Article::orderBy('id','desc')->paginate(1);
        $categories      = Category::all();
        $lasted_articles = Article::orderBy('id','desc')->limit(5)->get();
        // return $categories;
        return view('blog',compact('categories','lasted_articles','articles'));
    }

    public function article($slug)
    {
        $categories      = Category::all();
        $article = Article::where('slug',$slug)->first();
        // if article Not Found
        if( !$article ){
            return redirect('/');
        }
        return view('article',compact('article','categories'));
    }


}
