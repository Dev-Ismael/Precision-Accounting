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
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a class="image" href="/blog-details/1"><img
                                                        src="{{ asset('doob_template_assets/images/blog/blog-01.jfif') }}" alt="Blog Image">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">Irin Pervin</a></li>
                                                        <li class="separator">/</li>
                                                        <li>10 Dec 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">Best Corporate
                                                            Tips
                                                            You Will Read This Year.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="{{ route('post','post-slug') }}"><img
                                                    src="{{ asset('doob_template_assets/images/blog/blog-02.jfif') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">Fatima Asrafy</a></li>
                                                        <li class="separator">/</li>
                                                        <li>30 Nov 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">Should Fixing
                                                            Corporate Take 100 Steps.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="{{ route('post','post-slug') }}"><img
                                                    src="{{ asset('doob_template_assets/images/blog/blog-03.jfif') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">John Dou</a></li>
                                                        <li class="separator">/</li>
                                                        <li>12 Oct 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">The Next 100
                                                            Things
                                                            To Immediately Do About.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="/blog-details/4"><img
                                                    src="{{ asset('doob_template_assets/images/blog/blog-04.jfif') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">Jannin</a></li>
                                                        <li class="separator">/</li>
                                                        <li>25 Aug 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">Top 5 Lessons
                                                            About
                                                            Corporate To Learn Before.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="/blog-details/5"><img
                                                    src="{{ asset('doob_template_assets/images/blog/blog-05.jfif') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">Jannin</a></li>
                                                        <li class="separator">/</li>
                                                        <li>23 Jul 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">Master The Art Of
                                                            Corporate With These 5 Tips.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rn-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail"><a class="image" href="{{ route('post','post-slug') }}"><img
                                                    src="{{ asset('doob_template_assets/images/blog/blog-06.jfif') }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rn-meta-list">
                                                        <li><a href="#">John Dou</a></li>
                                                        <li class="separator">/</li>
                                                        <li>30 Jun 2021</li>
                                                    </ul>
                                                    <h4 class="title"><a href="{{ route('post','post-slug') }}">Corporate Is Your
                                                            Worst Enemy. 5 Ways To Defeat It.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="rwt-load-more text-center mt--60"><button
                                        class="btn btn-default btn-icon"><span>View More Post<span class="icon">
                                                <i class="feather-loader"></i>
                                            </span></span></button></div>
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
                                        <li><a href="category/development.html"><span
                                                    class="left-content">Development</span><span
                                                    class="count-text">3</span></a></li>
                                        <li><a href="category/company.html"><span class="left-content">Company</span><span
                                                    class="count-text">3</span></a></li>
                                        <li><a href="category/marketing.html"><span
                                                    class="left-content">Marketing</span><span
                                                    class="count-text">2</span></a></li>
                                        <li><a href="category/ux-design.html"><span class="left-content">UX
                                                    Design</span><span class="count-text">5</span></a></li>
                                        <li><a href="category/business.html"><span
                                                    class="left-content">Business</span><span
                                                    class="count-text">2</span></a></li>
                                        <li><a href="category/app-development.html"><span class="left-content">App
                                                    Development</span><span class="count-text">3</span></a></li>
                                        <li><a href="category/application.html"><span
                                                    class="left-content">Application</span><span
                                                    class="count-text">2</span></a></li>
                                        <li><a href="category/art.html"><span class="left-content">Art</span><span
                                                    class="count-text">2</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_recent_entries mt--40">
                                <h3 class="title">Post</h3>
                                <div class="inner">
                                    <ul>
                                        <li><a class="d-block" href="{{ route('post','post-slug') }}">Best Corporate Tips You Will
                                                Read This Year.</a><span class="cate">Development</span></li>
                                        <li><a class="d-block" href="{{ route('post','post-slug') }}">Should Fixing Corporate Take
                                                100 Steps.</a><span class="cate">UX Design</span></li>
                                        <li><a class="d-block" href="{{ route('post','post-slug') }}">The Next 100 Things To
                                                Immediately Do About.</a><span class="cate">Development</span></li>
                                        <li><a class="d-block" href="{{ route('post','post-slug') }}">Top 5 Lessons About
                                                Corporate
                                                To Learn Before.</a><span class="cate">Marketing</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_archive mt--40">
                                <h3 class="title">Archives</h3>
                                <div class="inner">
                                    <ul>
                                        <li><span class="cate">10 Dec 2021</span></li>
                                        <li><span class="cate">30 Nov 2021</span></li>
                                        <li><span class="cate">12 Oct 2021</span></li>
                                        <li><span class="cate">25 Aug 2021</span></li>
                                        <li><span class="cate">23 Jul 2021</span></li>
                                        <li><span class="cate">30 Jun 2021</span></li>
                                        <li><span class="cate">21 Apl 2021</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_tag_cloud mt--40">
                                <h3 class="title">Tags</h3>
                                <div class="inner mt--20">
                                    <div class="tagcloud">
                                        <a href="#">Corporate</a>
                                        <a href="#">Agency</a>
                                        <a href="#">Creative</a>
                                        <a href="#">Design</a>
                                        <a href="#">Minimal</a>
                                        <a href="#">Company</a>
                                        <a href="#">Development</a>
                                        <a href="#">App Landing</a>
                                        <a href="#">Startup</a>
                                        <a href="#">App</a>
                                        <a href="#">Business</a>
                                        <a href="#">Software</a>
                                        <a href="#">Landing</a>
                                        <a href="#">Art</a>
                                    </div>
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
