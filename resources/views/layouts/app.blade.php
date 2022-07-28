<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                                        <span>1035 US Highway 46 East, Clifton, NJ 07013</span>
                                    </p>
                                    <p>
                                        <i class="feather-phone"></i>
                                        <span><a href="tel:(973) 956-1040">(973) 956-1040</a></span>
                                    </p>
                                </div>
                                <div class="social-icon-wrapper">
                                    <ul class="social-icon social-default icon-naked">
                                        <li>
                                            <a href="https://web.facebook.com/Precision.Accounting.Intl?_rdc=1&_rdr"
                                                target="_blank">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/IntlPrecision" target="_blank">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCPB2_XDDen5BiL0ye_kvoeQ"
                                                target="_blank">
                                                <i class="feather-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/precision-accounting-llc-clifton-nj"
                                                target="_blank">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sms:(973) 304-5553" target="_blank">
                                                <i class="feather-mail"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $tax_centers = App\Models\TaxCenter::get();
                $services    = App\Models\Service::get();
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
                                                <li>
                                                    <a href="{{ route("tax_center", "taxcenter-slug") }}">Track Your Refund</a>
                                                    <ul class="sub-menu text-left">
                                                        <li class="dropdown-submenu"><a href="individuals-services.php">Individuals Services</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{ route("service", "service-slug") }}">Individuals Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Debt, and Tax Issues</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Estate Planning</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Retirement Planning</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="bookkeeping-services.php">Bookkeeping Services</a></li>
                                                        <li class="dropdown-submenu"><a href="tax-services.php">Tax Services</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation for Businesses</a>
                                                                </li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Planning</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Estate and Trust Tax Services</a>
                                                                </li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Relief</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Bookkeeping Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Payroll Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Part-Time CFO Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Non-Profit Organization
                                                                Services</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route("tax_center", "taxcenter-slug") }}">Track Your Refund <i class="fa-solid fa-arrow-right"></i> </a>
                                                    <ul class="sub-menu text-left">
                                                        <li class="dropdown-submenu"><a href="individuals-services.php">Individuals Services</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{ route("service", "service-slug") }}">Individuals Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Debt, and Tax Issues</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Estate Planning</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Retirement Planning</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="bookkeeping-services.php">Bookkeeping Services</a></li>
                                                        <li class="dropdown-submenu"><a href="tax-services.php">Tax Services</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Services</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation for Businesses</a>
                                                                </li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Planning</a></li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Estate and Trust Tax Services</a>
                                                                </li>
                                                                <li><a href="{{ route("service", "service-slug") }}">Tax Relief</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Bookkeeping Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Payroll Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Part-Time CFO Services</a></li>
                                                        <li><a href="{{ route("service", "service-slug") }}">Non-Profit Organization
                                                                Services</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route("tax_center", "taxcenter-slug") }}">Tax Due Dates</a></li>
                                                <li><a href="{{ route("tax_center", "taxcenter-slug") }}">Tax Rates</a></li>
                                                <li><a href="{{ route("tax_center", "taxcenter-slug") }}">Tax Forms &amp;
                                                        Publications</a></li>
                                                <li><a href="{{ route("tax_center", "taxcenter-slug") }}">Record Retention Guide</a>
                                                </li>
                                                <li><a href="{{ route("tax_center", "taxcenter-slug") }}">State Tax Forms</a></li>
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
                                        target="_blank" href="#">Free Consulting</a></div>
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


                                <div id="my_switcher" class="my_switcher">
                                    <ul>
                                        <li>
                                            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                                <img class="sun-image"
                                                    src="{{ asset('doob_template_assets/images/icons/sun-01.svg') }}"
                                                    alt="Sun images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                                <img class="Victor Image"
                                                    src="{{ asset('doob_template_assets/images/icons/vector.svg') }}"
                                                    alt="Vector Images">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
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
                        <li class="with-megamenu has-menu-child-item"><a href="#">Services</a>
                            <div class="rn-megamenu">
                                <div class="wrapper">
                                    <div class="row row--0">
                                        <div class="col-lg-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="{{ route("service", "service-slug") }}">Individuals Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Debt, and Tax Issues</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Estate Planning</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Retirement Planning</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Preparation for Businesses</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Planning</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Estate and Trust Tax Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Tax Relief</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="{{ route("service", "service-slug") }}">Bookkeeping Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Payroll Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Part-Time CFO Services</a></li>
                                                <li><a href="{{ route("service", "service-slug") }}">Non-Profit Organization Services</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <li><a  href="{{ route("resources") }}">Resources</a></li>
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
                                                <span><a href="#">info@cpapai.com</a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-address">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-map"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="https://g.page/PrecisionAccountingIntl?share"
                                                        target="_blank">1035 US Highway 46 East, Clifton, NJ
                                                        07013</a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-phone">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-phone"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="tel:(973) 956-1040">(973) 956-1040</a></span>
                                            </div>
                                        </div>
                                        <div class="d-flex footer-contact-sms">
                                            <div class="pe-3 footer-contact-icon">
                                                <i class="feather-message-circle"></i>
                                            </div>
                                            <div class="footer-contact-text">
                                                <span><a href="sms:(973) 304-5553">(973) 304-5553</a></span>
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
                                    <form class="newsletter-form" action="#">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter Your Email Here">
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
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
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
