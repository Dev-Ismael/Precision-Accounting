@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">



        <div class="rn-magazine-area ptb--40">
            <div class="wrapper plr--10">
                <div class="row row--5">
                    <div class="col-lg-12 col-xl-6">
                            @if ( isset($pinned_articles[0]) )
                                <div class="rn-card box-card-style-default content-transparent post-large mt--10">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a class="image" href="blog-details.html">
                                                <img class="w-100" src="{{ asset("images/articles/".$pinned_articles[0]->img) }}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="blog-details.html">{{ $pinned_articles[0]->title }}</a></h4>
                                            <ul class="rn-meta-list">
                                                <li><a href="#">{{ $pinned_articles[0]->author }}</a></li>
                                                <li class="separator">/</li>
                                                <li>{{date( 'm-d-Y', strtotime( $pinned_articles[0]->created_at) )}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="row row--5">
                            <div class="col-lg-6 middle-post">
                                @if ( isset($pinned_articles[1]) )
                                    <div class="rn-card box-card-style-default content-transparent h-100">
                                        <div class="inner h-100">
                                            <div class="thumbnail h-100">
                                                <a class="image h-100 w-100" href="blog-details.html"  style="background-image: url('{{asset("images/articles/".$pinned_articles[1]->img)}}')">
                                                    {{-- <img class="w-100" src="{{ asset("images/articles/".$pinned_articles[1]->img) }}" alt="Blog Image"> --}}
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="blog-details.html">{{ $pinned_articles[1]->title }}</a></h4>
                                                <ul class="rn-meta-list">
                                                    <li><a href="#">{{ $pinned_articles[1]->author }}</a></li>
                                                    <li class="separator">/</li>
                                                    <li>{{date( 'm-d-Y', strtotime( $pinned_articles[1]->created_at) )}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <!-- Start Single Post  -->
                                <div class="rn-card box-card-style-default content-transparent mt--10">
                                    @if ( isset($pinned_articles[2]) )
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a class="image" href="blog-details.html">
                                                    <img class="w-100" src="{{ asset("images/articles/".$pinned_articles[2]->img) }}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="blog-details.html">{{ $pinned_articles[2]->title }}</a></h4>
                                                <ul class="rn-meta-list">
                                                    <li><a href="#">{{ $pinned_articles[2]->author }}</a></li>
                                                    <li class="separator">/</li>
                                                    <li>{{date( 'm-d-Y', strtotime( $pinned_articles[2]->created_at) )}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <!-- End Single Post  -->
                                <!-- Start Single Post  -->
                                <div class="rn-card box-card-style-default content-transparent mt--10">
                                    @if ( isset($pinned_articles[3]) )
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a class="image" href="blog-details.html">
                                                    <img class="w-100" src="{{ asset("images/articles/".$pinned_articles[3]->img) }}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="blog-details.html">{{ $pinned_articles[3]->title }}</a></h4>
                                                <ul class="rn-meta-list">
                                                    <li><a href="#">{{ $pinned_articles[3]->author }}</a></li>
                                                    <li class="separator">/</li>
                                                    <li>{{date( 'm-d-Y', strtotime( $pinned_articles[3]->created_at) )}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <!-- End Single Post  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--
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

 --}}






        <!-- Start blog area  -->
        <div class="rn-blog-area rn-section-gap">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="row mt_dec--30">
                            <div class="col-lg-12">
                                <div class="row row--15">

                                    <!----------------- If No Articles ------------------>
                                    @if ($articles->isEmpty())

                                        @if( preg_match('(search)', url()->current()) == 1 )  <!---- in search Page ---->
                                            <h4> 0 Search results  "{{ Request::input('search') }}" </h4>
                                        @else
                                            <h4> No Articles! </h4>
                                        @endif

                                    <!----------------- If Exist Articles ------------------>
                                    @else

                                        @if( preg_match('(search)', url()->current()) == 1 )  <!---- in search Page ---->
                                            <h4> {{ $articles->count() }} Search results  "{{ Request::input('search') }}" </h4>
                                        @endif

                                        <!---------- Articles ---------->
                                        @foreach ($articles as $article)
                                            <div class="col-lg-6 col-md-6 col-12 mt--30">
                                                <div class="rn-card undefined">
                                                    <div class="inner">
                                                        <div class="thumbnail"><a class="image"
                                                                href="{{ route('article', $article->slug) }}"><img
                                                                    src="{{ asset('images/articles/'.$article->img) }}"
                                                                    alt="Blog Image"></a>
                                                        </div>
                                                        <div class="content">
                                                            <ul class="rn-meta-list">
                                                                <li><a href="#">{{ $article->author }}</a></li>
                                                                <li class="separator">/</li>
                                                                <li>{{date( 'm-d-Y', strtotime( $article->created_at) )}}</li>
                                                            </ul>
                                                            <h4 class="title"><a href="{{ route('article', $article->slug) }}">
                                                                {{$article->title }}
                                                                </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    @endif

                                </div>
                            </div>
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center mt-5 pagination-container">
                                {{ $articles->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt_md--40 mt_sm--40">
                        <aside class="rwt-sidebar">
                            <div class="rbt-single-widget widget_search mt--40">
                                <div class="inner">
                                    <form class="blog-search" action="{{ route('blog.search') }}" method="POST">
                                        @csrf
                                        <input type="text" name="search" value='{{ Request::input('search') }}'  placeholder="Search ..." autocomplete="off" maxlength="55" required/>
                                        <button class="search-button" type="submit">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                    @error('search')
                                        <div class="invalid-feedback d-block">{{ $message }}.</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_categories mt--40">
                                <h3 class="title">Categories</h3>
                                <div class="inner">
                                    <ul class="category-list ">
                                        @foreach ($categories as $category)
                                            <li><a href="#"><span
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
                                            <li><a class="d-block" href="{{ route('article', 'post-slug') }}">
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
