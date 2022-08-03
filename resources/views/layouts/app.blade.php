<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('doob_template_assets/images/favicon-white.png') }}">
    <!------- FontAwesome  ------->
    <script src="https://kit.fontawesome.com/bc98e6aa51.js" crossorigin="anonymous"></script>

    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/magnify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('doob_template_assets/css/style.css') }}">

</head>

<body class="active-light-mode">
    <main id="app" class="page-wrapper">

        @php
            $setting  = App\Models\Setting::find(1);
        @endphp
{{--
        <div class="header-transparent-with-topbar">
            <div class="header-top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- <div class="col-lg-4 col-md-12 col-12">

                        </div> -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="header-right">
                                <div class="address-content">
                                    <p>
                                        <i class="feather-map-pin"></i>
                                        <span><a href="{{ $setting->location }}"
                                            target="_blank">
                                            {{ $setting->address }}
                                        </a></span>
                                    </p>
                                    <p>
                                        <i class="feather-phone"></i>
                                        <span><a href="tel:{{$setting->phone}}">{{ $setting->phone }}</a></span>
                                    </p>
                                </div>
                                <div class="social-icon-wrapper">
                                    <ul class="social-icon social-default icon-naked">
                                        <li>
                                            <a href="{{ $setting->facebook }}"
                                                target="_blank">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->twitter }}" target="_blank">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->youtube }}"
                                                target="_blank">
                                                <i class="feather-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->linkedin }}"
                                                target="_blank">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{$setting->email}}" target="_blank">
                                                <i class="feather-mail"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            @php
                $tax_centers     = App\Models\TaxCenter::get();
                $parent_services = App\Models\Service::where('parent_id', Null)->get();
            @endphp

            <!-- Start Header Area  -->
            <header class="rn-header header-default header-transparent header-sticky nav-white">
                <div class="container position-relative">
                    <div class="row align-items-center row--0">
                        <div class="col-lg-3 col-md-6 col-4">
                            <div class="logo">
                                <a href="{{ route("home") }}">
                                    <img class="logo-light"
                                        src="{{ asset('doob_template_assets/images/logo/logo.png') }}"
                                        alt="Corporate Logo">
                                    <img class="logo-dark"
                                        src="{{ asset('doob_template_assets/images/logo/logo-dark.png') }}"
                                        alt="Corporate Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-8 position-static">
                            <div class="header-right">
                                <nav class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li><a href="{{ route("home") }}">Home</a></li>
                                        <li><a href="{{ route("about") }}">About</a></li>
                                        <li class="has-droupdown has-menu-child-item"><a href="#">Services</a>
                                            <ul class="submenu">
                                                @foreach ( $parent_services as $parent_service )
                                                    <li>
                                                        <a href="{{ route("service", $parent_service->slug ) }}"> {{ $parent_service->title }}  </a>
                                                        @php
                                                            $sub_services = App\Models\Service::where('parent_id', $parent_service->id)->get();
                                                        @endphp
                                                        @if ( !$sub_services->isEmpty())
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                            <ul class="sub-menu text-left">
                                                                @foreach ( $sub_services as $sub_service )
                                                                    <li><a href="{{ route("service", $sub_service->slug ) }}"> {{ $sub_service->title }} </a></li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="has-droupdown has-menu-child-item"><a href="#">Tax Center</a>
                                            <ul class="submenu">
                                                @foreach ( $tax_centers as $tax_center )
                                                    <li><a href="{{ route("tax_center", $tax_center->slug ) }}"> {{ $tax_center->title }} </a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ route("blog") }}">Blog</a></li>
                                        <li><a href="{{ route("contact") }}">Contact</a></li>
                                        <li><a href="{{ route("resources") }}">Resources</a></li>
                                    </ul>
                                </nav>
                                <!-- Start Header Btn  -->
                                <div class="header-btn"><a class="btn-default text-uppercase rounded-0"
                                        href="{{ route("consulting") }}">Free Consulting</a></div>
                                <!-- End Header Btn  -->

                                <!-- Start Mobile-Menu-Bar -->
                                <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                    <div class="hamberger">
                                        <button class="hamberger-button">
                                            <i class="feather-menu"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Start Mobile-Menu-Bar -->

                                {{-- <!--------------- Sitvher btn ------------------>
                                <div id="my_switcher" class="my_switcher">
                                    <ul>
                                        <li>
                                            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                                    <img class="Victor Image"
                                                    src="{{ asset('doob_template_assets/images/icons/vector.svg') }}"
                                                    alt="Vector Images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                                <img class="sun-image"
                                                    src="{{ asset('doob_template_assets/images/icons/sun-01.svg') }}"
                                                    alt="Sun images">
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header Area  -->
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="{{ route("home") }}">
                                <img class="logo-light"
                                    src="{{ asset('doob_template_assets/images/logo/logo.png') }}"
                                    alt="Corporate Logo">
                                <img class="logo-dark"
                                    src="{{ asset('doob_template_assets/images/logo/logo-dark.png') }}"
                                    alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">

                        <li><a href="{{ route("home") }}">Home</a></li>
                        <li><a href="{{ route("about") }}">About</a></li>
                        <li class="has-droupdown has-menu-child-item"><a href="#">Services</a>
                            <ul class="submenu">
                                @foreach ( $parent_services as $parent_service )
                                    <li>
                                        @php
                                            $sub_services = App\Models\Service::where('parent_id', $parent_service->id)->get();
                                        @endphp
                                        @if ( $sub_services->isEmpty())
                                            <a href="{{ route("service", $parent_service->slug ) }}"> {{ $parent_service->title }}  </a>
                                        @else
                                            <li class="has-droupdown has-menu-child-item">
                                                <a href="{{ route("service", $parent_service->slug ) }}"> {{ $parent_service->title }}  </a>
                                                <ul class="submenu">
                                                    @foreach ( $sub_services as $sub_service )
                                                        <li><a href="{{ route("service", $sub_service->slug ) }}"> {{ $sub_service->title }} </a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="has-droupdown has-menu-child-item"><a href="#">Tax Center</a>
                            <ul class="submenu">
                                @foreach ( $tax_centers as $tax_center )
                                    <li><a href="{{ route("tax_center", $tax_center->slug ) }}"> {{ $tax_center->title }} </a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route("blog") }}">Blog</a></li>
                        <li><a href="{{ route("contact") }}">Contact</a></li>
                        <li><a href="{{ route("resources") }}">Resources</a></li>
                    </ul>

                </div>
            </div>
        </div>



        <!-- Start Theme Style  -->
        <div>
            <div class="rn-gradient-circle"></div>
            <div class="rn-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->




        @yield('content')








        <!-- Start Footer Area  -->
        <footer class="rn-footer footer-style-default footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="rn-footer-widget">
                                <div class="logo">
                                    <a href="{{ route("home") }}">
                                        <img class="logo-light" src="{{ asset('doob_template_assets/images/logo/logo.png') }}"
                                            alt="Corporate Logo">
                                        <img class="logo-dark" src="{{ asset('doob_template_assets/images/logo/logo-dark.png') }}"
                                            alt="Corporate Logo">
                                    </a>
                                </div>
                                <h5 class="text-big">For many years <span class="fw-bold">PRECISION ACCOUNTING</span>
                                    INTL LLC has been helping individuals, families and small businesses in the
                                    community prepare their taxes.</h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rn-footer-widget">
                                <h4 class="title">Quick Links</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="{{ route("home") }}">Home</a></li>
                                        <li><a href="{{ route("about") }}">About</a></li>
                                        <li><a href="{{ route("blog") }}">Blog</a></li>
                                        <li><a href="{{ route("contact") }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="rn-footer-widget">
                                <h4 class="title">Contact Us</h4>
                                <div class="inner">
                                    <div class="footer-contact">
                                        <div class="d-flex footer-contact-email">
                                            <div class="pe-3 footer-contact-icon ">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-address">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-map"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="{{ $setting->location }}"
                                                        target="_blank">
                                                        {{ $setting->address }}
                                                    </a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-phone">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-phone"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-sms">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-message-circle"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="sms:{{$setting->sms}}">{{ $setting->sms }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="rn-footer-widget">
                                <h4 class="title pt-3 pt-md-0">Newsletter</h4>
                                <div class="inner">
                                    <h6 class="subtitle">Subscribe Our Newsletters To Get Updates & More</h6>
                                    <form class="newsletter-form" method="POST" action="{{ route("subscriber.store") }}" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Enter Your Email Here" required/>
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button class="btn-default" type="submit">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->













        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <ul class="ft-menu link-hover">
                                <li>
                                    <a href="{{ route("consulting") }}">Consulting</a>
                                </li>
                                <li>
                                    <a href="{{ route("resources") }}">Resources</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">
                                © PRECISION ACCOUNTING
                                <script>
                                    const d = new Date();
                                    let year = d.getFullYear();
                                    document.write(year);
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->











    </main>




    <!-- ====================== Scripts ====================== -->
    <script src="{{ asset('doob_template_assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/lightbox.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('doob_template_assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('doob_template_assets/js/main.js') }}"></script>

    <!-- App Scripts -->
    {{-- <script src="{{ asset('web/js/app.js') }}" defer></script> --}}


</body>

</html>
