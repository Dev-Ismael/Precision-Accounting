@extends('layouts.app')

@section('content')



    <!-- Start Slider Area  -->
    <div class="slider-area slider-style-1 variation-default height-950 bg_image bg_image--5" data-black-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-left">
                        <h4 class="subtitle">
                            <span >PRECISION ACCOUNTING INTL LLC</span>
                        </h4>
                        <h2 class="title" style="font-size: 65px">Your Success Is Our Proiority.</h2>
                        <ul class="list-icon">
                            <li>
                                <span class="icon background-transparent">
                                    <i class="feather-check"></i>
                                </span> How Tax Planning Matters.
                            </li>
                            <li>
                                <span class="icon background-transparent">
                                    <i class="feather-check"></i>
                                </span> Digital Switching Over.
                            </li>
                            <li>
                                <span class="icon background-transparent">
                                    <i class="feather-check"></i>
                                </span> Payroll Management.
                            </li>
                        </ul>
                        <div class="button-group mt--40 mt_sm--20">
                            <a class="btn-default btn-icon" target="_blank" href="#">
                                More About Us
                                <i class="icon feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->















    <!-- Start Service Area  -->
    <div class="rn-service-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle ">
                            <span class="theme-gradient">What we can do for you</span>
                        </h4>
                        <h2 class="title w-600 mb--20">Services provide for you.</h2>
                    </div>
                </div>
            </div>

            <div class="row row--15 service-wrapper">



                @foreach ( $services as $service )
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <div class="service service__style--1 icon-circle-style text-center">
                            <div class="service-icon pb-3">
                                <img  src="{{ asset('images/services/'.$service->icon ) }}" width="100" alt="service-icon">
                            </div>
                            <div class="content">
                                <h4 class="title w-600"><a href="#"> {{ $service->title }} </a></h4>
                                <p class="description b1 color-gray mb--0">
                                    {{ $service->summary }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
    <!-- End Service Area  -->















    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->














    <!-- Start Blog Area  -->
    <div class="blog-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400"
                        data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Latests News</span></h4>
                        <h2 class="title w-600 mb--20">Our Latest News.</h2>
                        <p class="description b1">We provide company and finance service for <br> startups and
                            company business.</p>
                    </div>
                </div>
            </div>
            <div class="row mt_dec--30">
                <div class="col-lg-12">
                    <div class="row row--15">



                        @foreach ( $articles as $article )
                            <div class="col-lg-4 col-md-6 col-12 mt--30 sal-animate" data-sal="slide-up"
                                data-sal-duration="700" data-sal-delay="100">
                                <div class="rn-card box-card-style-default">
                                    <div class="inner">
                                        <div class="thumbnail"><a class="image" href="{{ route('article', $article->slug ) }}"><img
                                                    class="w-100"  src="{{ asset('images/articles/'.$article->img ) }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="content">
                                            <ul class="rn-meta-list">
                                                <li><a href="#"> {{ $article->author }} </a></li>
                                                <li class="separator">/</li>
                                                <li> {{date( 'm-d-Y', strtotime( $article->created_at) )}} </li>
                                            </ul>
                                            <h4 class="title"><a href="{{ route('article','post-slug') }}">
                                                {{ $article->title }}
                                                </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="rwt-load-more text-center mt--60">
                        <a class="btn-default" href="{{ route("blog") }}">View More Post
                            <i class="feather-loader"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->













    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->









    <!-- Srart About Area  -->
    <div class="about-area about-style-4 rn-section-gap">
        <div class="container">
            <div class="row row--40 align-items-center">
                <div class="col-lg-6">
                    <div class="video-btn">
                        <div class="video-popup icon-center">
                            <div class="overlay-content">
                                <div class="thumbnail"><img class="radius-small"
                                         src="{{ asset('doob_template_assets/images/about/contact-image.jpg') }}" alt="Corporate Image"></div>
                                <div class="video-icon">
                                    <a class="btn-default rounded-player popup-video"
                                        href="https://www.youtube.com/watch?v=8tgU-kdAw_k">
                                        <span><i class="feather-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="video-lightbox-wrapper"></div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--40 mt_sm--40">
                    <div class="content">
                        <div class="inner">
                            <p class="h4">
                                WATCH VIDEOS
                            </p>
                            <p class="h2">
                                Financial Package for Your Company Success.
                            </p>
                            <div class="about-btn mt--30"><a class="btn-default" href="#">Learn More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
























    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->













    <!-- Start testimonial Four -->
    <div class="rwt-testimonial-area rn-section-gap">
        <div class="container">
            <div class="row mb--20">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Client Feedback</span></h4>
                        <h2 class="title w-600 mb--20">Our Clients Feedback.</h2>
                        <p class="description b1">We provide company and finance service for <br> startups and
                            company business.</p>
                    </div>
                </div>
            </div>

            <div class="rn-slick-dot rn-slick-arrow testimonial-activation mb--60">



                @foreach ( $testimonials as $testimonial )
                    <div class="testimonial-style-two">
                        <div class="row align-items-center row--20">
                            <div class="order-2 order-md-1 col-lg-8 col-md-8 offset-lg-1">
                                <div class="content mt_sm--40"><span class="form">&nbsp;</span>
                                    <p class="description">
                                        {{ $testimonial->content }}
                                     </p>
                                    <div class="client-info">
                                        <h4 class="title">{{ $testimonial->name }}</h4>
                                        <h6 class="subtitle">{{ $testimonial->job_title }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="order-1 d-flex justify-content-center order-md-2 col-lg-2 col-md-4">
                                <div class="thumbnail"><img class="w-100"  src="{{ asset("images/testimonials/".$testimonial->img) }}"
                                        alt="client-image"></div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
    <!-- End testimonial Four  -->











    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->




















    <!-- Start Main Counter Up Area  -->
    <div class="rwt-counterup-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Clients Feedback.</span></h4>
                        <h2 class="title w-600 mb--20">Global Clients Around the World.</h2>
                        <p class="description b1">Let’s See Our Valuable Clients Feedback about our services </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="count-box counter-style-2 text-center">
                        <div>
                            <div class="count-number"><span class="counter">199</span>+</div>
                        </div>
                        <h5 class="title">Bookkeeping service</h5>
                        <p class="description">
                            More than satisfied clients
                            with our Bookkeeping service
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="count-box counter-style-2 text-center">
                        <div>
                            <div class="count-number"><span class="counter">251</span>+</div>
                        </div>
                        <h5 class="title">Payroll service</h5>
                        <p class="description">
                            More than satisfied clients
                            with our Payroll service
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="count-box counter-style-2 text-center">
                        <div>
                            <div class="count-number"><span class="counter">321</span>+</div>
                        </div>
                        <h5 class="title">Taxes service</h5>
                        <p class="description">
                            More than satisfied clients
                            with our Taxes service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Counter Up Area  -->












    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->









    <!-- Start Team-Style-Default Area  -->
    <div class="rwt-team-area rn-section-gap">
        <div class="wrapper plr--65">
            <div class="container">
                <div class="row mb--20">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Our Experts.</span></h4>
                            <h2 class="title w-600 mb--20">Our Experts Team.</h2>
                            <p class="description b1">There are many variations of passages of Lorem Ipsum
                                available, <br>but the majority have suffered alteration.</p>
                        </div>
                    </div>
                </div>

                <div class="rn-slick-dot rn-slick-arrow team-slider mb--60">

                    @foreach ( $members as $member )

                        <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="200">
                            <div class="rn-team team-style-default">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img  src="{{ asset("images/members/".$member->img) }}" alt="member-image">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">{{ $member->name }}</h2>
                                        <h6 class="subtitle theme-gradient">{{ $member->job_title }}</h6>
                                        <span class="team-form">
                                            <i class="feather-map-pin"></i>
                                            <span class="location">{{ $member->address }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach



                    {{--

                    <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="rn-team team-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img  src="{{ asset('doob_template_assets/images/team/team-1.png') }}" alt="Corporate Template">
                                </div>
                                <div class="content">
                                    <h2 class="title">Amr Ibrahim</h2>
                                    <h6 class="subtitle theme-gradient">President</h6>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="rn-team team-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img  src="{{ asset('doob_template_assets/images/team/team-2.png') }}" alt="Corporate Template">
                                </div>
                                <div class="content">
                                    <h2 class="title">Wesam Albajes</h2>
                                    <h6 class="subtitle theme-gradient">Operation Manager</h6>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="rn-team team-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img  src="{{ asset('doob_template_assets/images/team/team-3.png') }}" alt="Corporate Template">
                                </div>
                                <div class="content">
                                    <h2 class="title">Hisham Sadek</h2>
                                    <h6 class="subtitle theme-gradient"> Individual Tax Accountant </h6>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="rn-team team-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img  src="{{ asset('doob_template_assets/images/team/team-4.png') }}" alt="Corporate Template">
                                </div>
                                <div class="content">
                                    <h2 class="title">Hisham Elkhazendar </h2>
                                    <h6 class="subtitle theme-gradient">Payroll Manager</h6>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt--30 sal-animate me-3 ms-3" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="rn-team team-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img  src="{{ asset('doob_template_assets/images/team/team-5.png') }}" alt="Corporate Template">
                                </div>
                                <div class="content">
                                    <h2 class="title">Ali Mafarja </h2>
                                    <h6 class="subtitle theme-gradient">Accountant</h6>
                                    <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">
                                            CO Miego, AD,USA
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>
    </div>
    <!-- End Team-Style-Default Area  -->

















    <!-- Start Call To Action Area  -->
    <div class="rwt-callto-action-area rn-section-gapBottom">
        <div class="wrapper">
            <div class="rn-callto-action clltoaction-style-default style-5">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper theme-shape">
                        <div class="col-lg-12">
                            <div class="inner">
                                <div class="content text-center">
                                    <h2 class="title">Keep in touch with our expert CPAs</h2>
                                    {{-- <h6 class="subtitle">MEET WITH US</h6> --}}
                                    <div class="call-to-btn">
                                        <a class="btn-default btn-icon" href="{{ route("consulting") }}">MEET WITH US
                                            <i class="feather-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call To Action Area  -->
@endsection
