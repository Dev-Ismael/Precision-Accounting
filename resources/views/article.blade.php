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
                            <div class="content">

                                {!! $article->content !!}

                                {{-- <div class="category-meta">
                                    <span class="text">Tags: &nbsp; </span>
                                    <div class="tagcloud">
                                        @foreach ( $categories as $category )
                                            <a href="#">{{ $article->title }}</a>
                                        @endforeach
                                    </div>
                                </div> --}}

                                {{-- <!-- Start Contact Form Area  -->
                                <div class="rn-comment-form pt--60">
                                    <div class="inner">
                                        <div class="section-title">
                                            <span class="subtitle">Have a Comment?</span>
                                            <h2 class="title">Leave a Reply</h2>
                                        </div>
                                        <form class="mt--40" action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="rnform-group"><input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="rnform-group"><input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="rnform-group"><input type="text" placeholder="Website">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <div class="rnform-group">
                                                        <textarea placeholder="Comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="blog-btn"><a class="btn-default"
                                                            href="blog-details.html"><span>SEND
                                                                MESSAGE</span></a></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Contact Form Area  --> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
