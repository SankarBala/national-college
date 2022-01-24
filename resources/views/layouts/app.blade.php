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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-page"></div>
            <div class="loader-page"></div>
            <div class="loader-page"></div>
        </div>
    </div>


    <header class="header">

        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <marquee direction="left" style="color:white">
                            <ul class="nav">
                                <li class=""><a class="my-0 py-0" href="#">Recent notice go here</a></li>
                            </ul>
                        </marquee>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="topbar-right">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>


                            <div class="search">
                                <ul>
                                    <li class="search_btn"><a href="#"><i class="far fa-search"></i></a></li>
                                </ul>
                                <div class="header_search_content">
                                    <div class="header_search_content_inner">
                                        <a href="#" class="close_btn"><i class="fal fa-times"></i></a>
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i class="fal fa-search"></i></button>
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
                            <a href="index-2.html"><img src="assets/img/logo.png" alt="#" width="100px" height=""></a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">

                        <div class="header-widget">
                            <div class="single-widget">
                                <i class="far fa-phone"></i>
                                <h4>Call Now<span>+880-1745-993722</span></h4>
                            </div>
                            <div class="single-widget">
                                <i class="far fa-envelope"></i>
                                <h4>Email Us<a href="mailto:query@nationalcollege.edu.bd"><span><span class="__cf_email__" data-cfemail="">query@nationalcollege.edu.bd</span></span></a></h4>
                            </div>
                            <div class="single-widget">
                                <i class="far fa-map-marker-alt"></i>
                                <h4>Our Location<span>Pragati Sharanee, Badda, Gulshan, Dhaka-1212</span></h4>
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
                                    <li class=""><a href="index-2.html">Home</a></li>
                                    <li><a href="#">Activities<i class="far fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="#">Teachers<i class="far fa-angle-right"></i></a>
                                                <ul class="dropdown submenu">
                                                    <li><a href="teacher.html">Teachers One</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Admission<i class="far fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="event-single.html">Event Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Notice<i class="far fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blogs-left-sidebar.html">All Notice</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('event.index')}}">Events</a></li>
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                                </ul>


                                <div class="button">
                                    <a href="contact.html" class="btn"><i class="far fa-pencil"></i>Apply Now</a>
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
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-widget about">
                            <div class="logo"><a href="#"><img src="assets/img/logo2.png" alt="#"></a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sed dolorem ducimus!</p>
                            <ul class="list">
                                <li><i class="far fa-phone"></i>+880-1745-993722</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:query@nationalcollege.edu.bd"><span class="" data-cfemail="">query@nationalcollege.edu.bd</span></a></li>
                                <li><i class="far fa-map-marker-alt"></i>3783 Armbrester Drive,USA</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-widget useful-links">
                            <h2>Important Links</h2>
                            <ul>
                                <li><a href="{{route('about-us')}}"><i class="far fa-angle-double-right"></i>About Us</a></li>
                                <li><a href="{{route('faq')}}"><i class="far fa-angle-double-right"></i>Faq</a></li>
                                <li><a href="{{route('faq')}}"><i class="far fa-angle-double-right"></i>Upcoming Events</a></li>
                                <li><a href="{{route('terms-of-use')}}"><i class="far fa-angle-double-right"></i>Terms & Conditions</a></li>
                                <li><a href="{{route('contact-us')}}"><i class="far fa-angle-double-right"></i>Contact Us</a></li>
                                <li><a href="{{route('privacy-policy')}}"><i class="far fa-angle-double-right"></i>Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-widget latest-news">
                            <h2>Latest Posts</h2>
                            <div class="news-inner">
                                <div class="single-news">
                                    <img src="assets/img/blog/sm-1.jpg" alt="#">
                                    <h4><a href="blog-single.html">Nam libero tempore cum soluta nobis est</a></h4>
                                    <p><i class="far fa-calendar-alt"></i> July 02, 2021</p>
                                </div>
                                <div class="single-news">
                                    <img src="assets/img/blog/sm-2.jpg" alt="#">
                                    <h4><a href="blog-single.html">At vero et accusamus et iusto odio dignissimos</a></h4>
                                    <p><i class="far fa-calendar-alt"></i> July 02, 2021</p>
                                </div>
                                <div class="single-news">
                                    <img src="assets/img/blog/sm-3.jpg" alt="#">
                                    <h4><a href="blog-single.html">Sed perspiciatis unde omnis iste natus sit </a></h4>
                                    <p><i class="far fa-calendar-alt"></i> July 02, 2021</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-widget newsletter">
                            <h2>Newsletter</h2>
                            <div class="mail">
                                <p>Subscribe to our newsletter, Get the latest updates and news from us!</p>
                                <div class="form">
                                    <input type="email" placeholder="Enter your email">
                                    <button class="button" type="submit"><i class="far fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>


                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>

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
                                        <p>© Copyright 2021 <a href="#">National College</a> All Rights Reserved.</p>
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
</body>


</html>