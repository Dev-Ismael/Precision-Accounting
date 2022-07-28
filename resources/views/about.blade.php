@extends('layouts.app')

@section('content')
    <!-- Start Slider Area  -->
    <div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--12" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner pt--80 text-center sal-animate" data-sal="slide-up" data-sal-duration="400"
                        data-sal-delay="150">
                        <div>
                            <h3 class="rn-sub-badge"><span class="theme-gradient">Our Company's About
                                    Details.</span></h3>
                        </div>
                        <h1 class="title display-one">We are a Corporate <br> Business Agency.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->



    <!-- Start advance-tab Area  -->
    <div class="rwt-advance-tab-area rn-section-gap">
        <div class="container">
            <div class="row mb--40">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h4 class="subtitle "><span class="theme-gradient">WHAT WE DO</span></h4>
                        <h2 class="title w-600 mb--20">Most trustworthy consulting with the best CPAs.</h2>
                    </div>
                </div>
            </div>

            <div class="html-tabs" data-tabs="true">
                <div class="row row--30">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30">
                        <div class="advance-tab-button advance-tab-button-1">
                            <ul class="nav nav-tabs tab-button-list" id="myTab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" role="tab" aria-controls="home" aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Payroll management</h4>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item w-100" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">IRS problem resolution</h4>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item w-100" role="presentation">
                                    <a href="#" class="nav-link tab-button active" id="contact-tab"
                                        data-bs-toggle="tab" data-bs-target="#contact" role="tab"
                                        aria-controls="contact" aria-selected="true">
                                        <div class="tab">
                                            <h4 class="title">Smart QuickBooks services</h4>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade advance-tab-content-1" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="thumbnail">
                                    <img src="{{ asset('doob_template_assets/images/advance-tab/payroll.jpg') }}"
                                        alt="advance-tab-image">
                                </div>

                            </div>
                            <div class="tab-pane fade advance-tab-content-1" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="thumbnail">
                                    <img src="{{ asset('doob_template_assets/images/advance-tab/irs.jpg') }}"
                                        alt="advance-tab-image">
                                </div>
                            </div>
                            <div class="tab-pane fade advance-tab-content-1 active show" id="contact" role="tabpanel"
                                aria-labelledby="contact-tab">
                                <div class="thumbnail">
                                    <img src="{{ asset('doob_template_assets/images/advance-tab/quick.jpg') }}"
                                        alt="advance-tab-image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End advance-tab Area  -->





    <!-- Start Split Style-3 Area  -->
    <div class="rwt-split-area rn-section-gap">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mb--40">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400"
                        data-sal-delay="150">
                        <h4 class="subtitle "><span class="theme-gradient"> More About Us </span></h4>
                        <h2 class="title w-600 mb--20">Need expert CPAs to run and grow your business so talk to us</h2>
                    </div>
                </div>
            </div>
            <div class="rn-splite-style bg-color-blackest">
                <div class="split-wrapper">
                    <div class="row g-0 radius-10 align-items-center">
                        <div class="col-lg-12 col-xl-6 col-12">
                            <div class="thumbnail">
                                <img src="{{ asset('doob_template_assets/images/split/about.jpg') }}"  alt="split Images">
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <div class="split-inner">
                                <h5 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="200">PRECISION ACCOUNTING INTL LLC.</h5>
                                <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="300">
                                    For many years PRECISION ACCOUNTING INTL LLC has been helping individuals, families and
                                    small businesses in the community prepare their taxes. Our friendly service makes the
                                    process less stressful and more efficient and our experience and knowledge ensure that
                                    we're always up to date on the latest changes to Federal and state tax codes. We'll make
                                    sure your return gets filed accurately and on time, with all the deductions you're
                                    entitled to. .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Split Style-3 Area  -->
@endsection
