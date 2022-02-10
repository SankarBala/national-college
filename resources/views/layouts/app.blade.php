<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>National College</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('styles')
</head>

<body>
    
   

    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <marquee direction="left" style="color:white">
                            <ul class="nav">
                                @foreach ($notices as $notice)
                                    <li class=""><a class="my-0 py-0"
                                            href="{{route('notice.show', $notice)}}">{{ $notice->title }}</a></li>
                                @endforeach
                            </ul>
                        </marquee>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="topbar-right">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>


                            <div class="search">
                                <ul>
                                    <li class="search_btn"><a href="#"><i class="far fa-search"></i></a></li>
                                </ul>
                                <div class="header_search_content">
                                    <div class="header_search_content_inner">
                                        <a href="#" class="close_btn"><i class="fal fa-times"></i></a>
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top" name="s"
                                                placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i
                                                    class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{asset('assets/img/logo.png')}}" alt="#" width="100px"
                                    height=""></a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">

                        <div class="header-widget">
                            <div class="single-widget">
                                <i class="far fa-phone"></i>


                                <h4>Call Now<span>{{ option('phone') }}</span></h4>
                            </div>
                            <div class="single-widget">
                                <i class="far fa-envelope"></i>
                                <h4>Email Us<a href="mailto:{{ option('email') }}"><span><span class="__cf_email__"
                                                data-cfemail="">{{ option('email') }}</span></span></a></h4>
                            </div>
                            <div class="single-widget">
                                <i class="far fa-map-marker-alt"></i>
                                <h4>Our Location<span>{{ option('address') }}</span></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-default">
                            <div class="navbar-collapse">

                                <ul id="nav" class="nav menu navbar-nav">
                                    <li class=""><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="#">Admission<i class="far fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="">Get Admission</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Notice<i class="far fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href={{route('notice.index')}}>All Notice</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="{{ route('event.index') }}">Events</a></li> --}}
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                    <li><a href="{{ asset('assets/prospectus.pdf') }}" >Prospectus</a></li>
                                </ul>


                                <div class="button">
                                    <a target="_blank" href="{{ route('admin.index') }}"
                                        class="btn">Dashboard</a>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>


    @yield('content')

    <footer class="footer overlay section">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-widget about">
                            <div class="logo"><a href="#"><img src="assets/img/logo2.png" alt="#"></a></div>
                            <p></p>
                            <ul class="list">
                                <li><i class="far fa-phone"></i>{{ option('phone') }}</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:{{ option('email') }}"><span
                                            class="" data-cfemail="">{{ option('email') }}</span></a>
                                </li>
                                <li><i class="far fa-map-marker-alt"></i>{{ option('address') }}</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-widget useful-links">
                            <h2>Important Links</h2>
                            <ul>
                                <li><a href="{{ route('about-us') }}"><i class="far fa-angle-double-right"></i>About
                                        Us</a></li>
                                <li><a href="{{ route('faq') }}"><i class="far fa-angle-double-right"></i>Faq</a>
                                </li>
                                <li><a href="{{ route('faq') }}"><i class="far fa-angle-double-right"></i>Upcoming
                                        Events</a></li>
                                <li><a href="{{ route('terms-of-use') }}"><i
                                            class="far fa-angle-double-right"></i>Terms & Conditions</a></li>
                                <li><a href="{{ route('contact-us') }}"><i
                                            class="far fa-angle-double-right"></i>Contact Us</a></li>
                                <li><a href="{{ route('privacy-policy') }}"><i
                                            class="far fa-angle-double-right"></i>Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-12">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2709.088365102505!2d90.4242365071291!3d23.776576747510052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d23.776842799999997!2d90.4257303!4m5!1s0x3755c7ba09302d9b%3A0x9155f2b042302111!2snational%20college!3m2!1d23.7768329!2d90.4254472!5e0!3m2!1sbn!2sbd!4v1643524943150!5m2!1sbn!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-head">
                            <div class="row">
                                <div class="col-12">

                                    <div class="copyright">
                                        <p>© Copyright 2021 <a href="#">{{ option('brand') }}</a> All Rights
                                            Reserved.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.stellar.min.js"></script>

    <script src="assets/js/facnybox.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/circle-progress.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/slicknav.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/easing.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/jquery.scrollUp.min.js"></script>

    <script src="assets/js/main.js"></script>
    @stack('scripts')
</body>


</html>
