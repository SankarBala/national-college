@extends('layouts.app')

@section('content')
    <section class="home-slider">
        <div class="hero-slider owl-carousel owl-theme">

            <div class="single-slider overlay" style="background-image:url('assets/img/college/slider1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="slider-text">
                                <h1>Best Educational Institute <span>Academic And Proffesional</span></h1>
                                <p>Besides standard lesson plan, expert and experienced teachers, teaching and strict
                                    administration, a well location and surrounding of the institution is a prerequisite
                                    undoubtedly. In view of this, National College has been set up in a learning oriented
                                    distinct building at Gulshan-Baridhara aristocratic area to and from where one can
                                    communicate easily.</p>
                                <div class="button">
                                    {{-- <a href="" class="btn primary">Our Courses</a>
                                    <a href="" class="btn">Learn More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


    <section class="our-features section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Check <span>Our Best</span> Feature</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using orem psum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.4s">

                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="assets/img/feature/1.jpg" alt="#">
                        </div>
                        <h2>Scholarship Facility</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit volutr accusantium doloremque laudantium</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.6s">

                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="assets/img/feature/2.jpg" alt="#">
                        </div>
                        <h2>Skilled Teachers</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit volutr accusantium doloremque laudantium</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.8s">

                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="assets/img/feature/3.jpg" alt="#">
                        </div>
                        <h2>Book Library Facility</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit volutr accusantium doloremque laudantium</p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="enroll overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">

                            <div class="enroll-form">
                                <div class="form-title">
                                    <h2>Connect our social network</h2>
                                    <p></p>
                                </div>

                                <form class="p-2" action="#">
                                    <iframe
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNationalCollege.edu.Bangladesh&tabs=timeline&width=480&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                        width="100%" height="500px" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                    </iframe>
                                </form>

                            </div>

                        </div>
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="enroll-right">
                                <div class="section-title">
                                    <h2>We Have Experienced Proffesionals And We Do Our Best To Achieve Your Goal.</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                        suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. </p>
                                </div>
                            </div>

                            <div class="skill-main">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">

                                        <div class="single-skill">
                                            <div class="circle" data-value="0.7" data-size="130">
                                                <strong>40K+</strong>
                                            </div>
                                            <h4>Students</h4>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">

                                        <div class="single-skill">
                                            <div class="circle" data-value="0.9" data-size="130">
                                                <strong>80+</strong>
                                            </div>
                                            <h4>Courses</h4>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">

                                        <div class="single-skill">
                                            <div class="circle" data-value="0.8" data-size="130">
                                                <strong>60+</strong>
                                            </div>
                                            <h4>Teachers</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses section-bg section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2> <span> Explore Our Popular courses</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.4s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/1.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Business Management</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.6s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/2.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Chemical Engineering</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.8s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/3.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Civil Engineering</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="1s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/4.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Food Science</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="1.2s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/5.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Health Studies</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="1.4s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/6.jpg" alt="#">
                            <a href="course-single.html" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span>10 Lessons</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                            </div>
                            <h4><a href="course-single.html">Architechture And Design</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>60 Seats</span>
                                <span><i class="far fa-clock"></i>3 Years</span>
                            </div>
                            <span class="price">$850</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="cta" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-6 col-12">
                    <div class="cta-inner overlay">
                        <div class="text-content">
                            <h2>20% Offer Running - Join Today For Your Course</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                aut fugit quis nostrum exercitationem.</p>
                            <div class="button">
                                <a class="btn primary wow fadeInUp" href="contact.html">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Meet Our <span>Teachers</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ([1, 2, 3, 4] as $item)
                    <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">
                        <div class="single-team">
                            <img src="assets/img/team/1.jpg" alt="#">
                            <div class="team-hover">
                                <h4>Teacher name<span>Designation</span></h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="testimonials overlay section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider owl-carousel owl-theme">

                        <div class="single-testimonial">
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="assets/img/testimonial/1.png" alt="#">
                                    </div>
                                    <div class="col-7">

                                        <h4 class="name">Edna F Herron</h4>
                                        <div class="testi-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have
                                            suffered alteration in some form, by injected humour, or randomised words which
                                            don't
                                            look even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="events section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Our Upcoming <span>Events</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="event-slider owl-carousel owl-theme">

                        <div class="single-event">
                            <div class="head overlay">
                                <img src="assets/img/college/16.jpg" alt="#">
                                <a href="assets/img/college/16.jpg" data-fancybox="photo" class="btn"><i
                                        class="far fa-search"></i></a>
                            </div>
                            <div class="event-content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i>21 February 2022</span>
                                    <span><i class="far fa-clock"></i>7.00AM-8.00AM</span>
                                </div>
                                <h4><a href="event-single.html">Event Title</a></h4>
                                <p>Event description</p>
                                <div class="button">
                                    <a href="event-single.html" class="btn">Join Event <i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">

                    <div class="single-fact">
                        <i class="far fa-book-open"></i>
                        <div class="number"><span class="counter">120</span>+</div>
                        <p>Total Class Room</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">

                    <div class="single-fact">
                        <i class="far fa-graduation-cap"></i>
                        <div class="number"><span class="counter">20</span>k+</div>
                        <p>Our Students</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">

                    <div class="single-fact">
                        <i class="far fa-users"></i>
                        <div class="number"><span class="counter">80</span>+</div>
                        <p>Total Teacher</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">

                    <div class="single-fact">
                        <i class="far fa-award"></i>
                        <div class="number"><span class="counter">20</span>+</div>
                        <p>Win Awards</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Our <span>Gallery</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay=".2s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/1.jpg" alt="">
                                    <a href="assets/img/college/1.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay=".4s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/2.jpg" alt="">
                                    <a href="assets/img/college/2.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay=".6s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/3.jpg" alt="">
                                    <a href="assets/img/college/3.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/6.jpg" alt="">
                                    <a href="assets/img/college/6.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay="1.2s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/7.jpg" alt="">
                                    <a href="assets/img/college/7.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 wow zoomIn" data-wow-delay="1.4s">
                            <div class="gallery-single">
                                <div class="overlay">
                                    <img src="assets/img/college/6.jpg" alt="">
                                    <a href="assets/img/college/6.jpg" data-fancybox="gallery" class="btn"><i
                                            class="far fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wow zoomIn" data-wow-delay=".8s">
                        <div class="gallery-single">
                            <div class="overlay">
                                <img src="assets/img/college/4.jpg" alt="">
                                <a href="assets/img/college/4.jpg" data-fancybox="photo" class="btn"><i
                                        class="far fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest <span>News</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">

                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>20<span>Jun</span></h4>
                            </div>
                            <img src="assets/img/blog/1.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Sed ut perspiciatis unde omni natus</a>
                            </h4>
                            <div class="blog-info">
                                <a href="#"><i class="far fa-user"></i>By Admin</a>
                                <a href="#"><i class="far fa-folder-open"></i>Learning</a>
                                <a href="#"><i class="far fa-heart"></i>30K</a>
                            </div>
                            <p>There are many variations of passages of orem psum available but the majority have suffered
                                alteration in some form.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i
                                        class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s">

                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>20<span>Jun</span></h4>
                            </div>
                            <img src="assets/img/blog/2.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">At vero eos et accusamus odio</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="far fa-user"></i>By Admin</a>
                                <a href="#"><i class="far fa-folder-open"></i>Learning</a>
                                <a href="#"><i class="far fa-heart"></i>30K</a>
                            </div>
                            <p>There are many variations of passages of orem psum available but the majority have suffered
                                alteration in some form.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i
                                        class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s">

                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>20<span>Jun</span></h4>
                            </div>
                            <img src="assets/img/blog/3.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Nam libero tempore cum soluta nobis</a>
                            </h4>
                            <div class="blog-info">
                                <a href="#"><i class="far fa-user"></i>By Admin</a>
                                <a href="#"><i class="far fa-folder-open"></i>Learning</a>
                                <a href="#"><i class="far fa-heart"></i>30K</a>
                            </div>
                            <p>There are many variations of passages of orem psum available but the majority have suffered
                                alteration in some form.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i
                                        class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}


    <div class="clients">
        <div class="container">
            <div class="client-slider owl-carousel owl-theme">
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>

@endsection
