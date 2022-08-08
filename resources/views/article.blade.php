@extends('layouts.app')

@section('content')
    <div class="main-content pt--125">

        <div class="rn-blog-details-area">
            <div class="post-page-banner" style="padding-top: 60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content text-center">
                                <div class="page-title">
                                    <h1 class="theme-gradient"> {{ $article->title }} </h1>
                                </div>
                                <ul class="rn-meta-list">
                                    <li>
                                        <i class="feather-user"></i>
                                        <a href="#"> {{ $article->author }}  </a>
                                    </li>
                                    <li>
                                        <i class="feather-calendar"></i>
                                        {{date( 'm-d-Y', strtotime( $article->created_at) )}}
                                    </li>
                                </ul>
                                <div class="thumbnail alignwide mt--60"><img class="w-100 radius"
                                        src="{{ asset("images/articles/".$article->img) }}" alt="Blog Images"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content pt--60 rn-section-gapBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="content dynamic-content">
                                {!! $article->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
