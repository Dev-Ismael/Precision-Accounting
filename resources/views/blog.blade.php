@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">





        <!-- Start Breadcarumb area  -->
        <div class="breadcrumb-area breadcarumb-style-1 ptb--50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h1 class="title theme-gradient h2">Our Blog Articles.</h1>
                            <ul class="page-list">
                                <li class="rn-breadcrumb-item"><a href="/">Home</a></li>
                                <li class="rn-breadcrumb-item active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcarumb area  -->








        <!-- Start blog area  -->
        <div class="rn-blog-area rn-section-gap">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="row mt_dec--30">
                            <div class="col-lg-12">
                                <div class="row row--15">

                                    @foreach ($articles as $article)
                                        <div class="col-lg-6 col-md-6 col-12 mt--30">
                                            <div class="rn-card undefined">
                                                <div class="inner">
                                                    <div class="thumbnail"><a class="image"
                                                            href="{{ route('post', $article->slug) }}"><img
                                                                src="{{ asset('images/articles/'.$article->img) }}"
                                                                alt="Blog Image"></a>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="rn-meta-list">
                                                            <li><a href="#">{{ $article->author }}</a></li>
                                                            <li class="separator">/</li>
                                                            <li>{{date( 'm-d-Y', strtotime( $article->created_at) )}}</li>
                                                        </ul>
                                                        <h4 class="title"><a href="{{ route('post', $article->slug) }}">
                                                            {{$article->title }}
                                                            </a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center mt-5 pagination-container">
                                {{$articles->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt_md--40 mt_sm--40">
                        <aside class="rwt-sidebar">
                            <div class="rbt-single-widget widget_search mt--40">
                                <div class="inner">
                                    <form class="blog-search" action="#"><input type="text"
                                            placeholder="Search ...">
                                        <button class="search-button">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_categories mt--40">
                                <h3 class="title">Categories</h3>
                                <div class="inner">
                                    <ul class="category-list ">
                                        @foreach ($categories as $category)
                                            <li><a href="category/development.html"><span
                                                        class="left-content">{{ $category->title }}</span><span
                                                        class="count-text">{{ $category->articles->count() }}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_recent_entries mt--40">
                                <h3 class="title">Post</h3>
                                <div class="inner">
                                    <ul>
                                        @foreach ($lasted_articles as $lasted_article)
                                            <li><a class="d-block" href="{{ route('post', 'post-slug') }}">
                                                    {{ $lasted_article->title }}
                                                </a><span class="cate"> {{ $lasted_article->category->title }} </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End blog area  -->









    </div>
@endsection
