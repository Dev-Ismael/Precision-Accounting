<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
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
        $articles        = Article::orderBy('id','desc')->paginate(10);
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

        // SEO Tools
        SEOMeta::setTitle($article->seo_title);
        SEOMeta::setDescription($article->seo_description);
        SEOMeta::setKeywords($article->seo_keywords);

        return view('article',compact('article','categories'));
    }

    public function search(Request $request)
    {
        // validate search and redirect back
        $this->validate($request, [
            'search'     =>  ['required', 'string', 'max:55'],
        ]);

        $articles = Article::where('title', 'like', "%{$request->search}%")->paginate( 20 );
        $categories      = Category::all();
        $lasted_articles = Article::orderBy('id','desc')->limit(5)->get();
        return view('blog',compact('categories','lasted_articles','articles'));

    }


}
