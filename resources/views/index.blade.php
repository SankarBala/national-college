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
                            {{-- <a href="course-single.html" class="btn"><i class="far fa-link"></i></a> --}}
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="bg-success text-white px-2 py-1 rounded">Admission open</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(5.0)</span>
                                </div>
                            </div>
                            <h4><a href="">Science</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>100 Seats</span>
                                <span><i class="far fa-clock"></i>2 Years</span>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.6s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/2.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn"><i class="far fa-link"></i></a> --}}
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="bg-success text-white px-2 py-1 rounded">Admission open</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(5.0)</span>
                                </div>
                            </div>
                            <h4><a href="">Business Studies</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>100 Seats</span>
                                <span><i class="far fa-clock"></i>2 Years</span>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.8s">

                    <div class="single-course">
                        <div class="course-head overlay">
                            <img src="assets/img/course/3.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn"><i class="far fa-link"></i></a> --}}
                        </div>
                        <div class="single-content">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="bg-success text-white px-2 py-1 rounded">Admission open</span>
                                <div class="course-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(5.0)</span>
                                </div>
                            </div>
                            <h4><a href="">Humanities</a></h4>
                            <p>There are many variations of passages available, but the majority have suffered alteration in
                                some form, by injected humour, or randomised words believable. </p>
                        </div>
                        <div class="course-meta">
                            <div class="meta-left">
                                <span><i class="far fa-users"></i>100 Seats</span>
                                <span><i class="far fa-clock"></i>2 Years</span>
                            </div>

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
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">

                        <div class="single-team">
                            <img src="{{ $teacher->photo }}" alt="#">
                            <div class="team-hover bg-warning">
                                <h4>{{ $teacher->name }}<span>{{ $teacher->designation }}</span></h4>

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
                                    <div class="col-12">
                                        <h2 class="name">দৈনিক ইত্তেফাক</h2>
                                        <div class="testi-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4 class="mb-1"><u>এইচএসসি’তে ন্যাশনাল কলেজের শতভাগ পাস</u></h4>
                                        <p class="text-justify">
                                            খুব অল্প সময়ই শিক্ষা বিস্তারে ব্যাপক অবদান রাখছে এমন প্রতিষ্ঠানের মধ্যে
                                            ন্যাশানাল কলেজ একটি। ঢাকার মধ্যবাড্ডায় অবস্থিত ন্যাশনাল কলেজে পাশের হার গত ৩ বছর
                                            পর পর এ+ সহ ১০০%। ভালো ফলাফলের পাশাপাশি প্রতিষ্ঠানের শিক্ষকমন্ডলী চরিত্র
                                            গঠন, নৈতিকতা, দেশপ্রেম ও স্ব-স্ব ধর্মীয় মূল্যবোধের প্রতি গুরুত্বারোপ করে থাকেন।
                                            এখানে মানবিক, বিজ্ঞান, ব্যবসায় শিক্ষা শাখায় শিক্ষার্থীরা অত্যন্ত চমৎকার ফলাফল
                                            করে আসছে।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="name">আজকালের খবর</h2>
                                        <div class="testi-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4 class="mb-1"><u>সফলতার সঙ্গে এগিয়ে চলছে বাড্ডার ন্যাশনাল কলেজ</u>
                                        </h4>
                                        <p class="text-justify">
                                            মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড ঢাকার অধীনে পরপর ১০০% সাফল্য অর্জনকারী
                                            শ্রেষ্ঠ কয়েকটি কলেজের মধ্যে ন্যাশনাল কলেজ অন্যতম ন্যাশনাল কলেজ প্রতিষ্ঠালগ্ন
                                            থেকে ভালো কিছু করার প্রত্যয়ী ছিল। যার প্রমাণ পাওয়া যায় এর পূর্বতন ফলাফল দেখলে।
                                            ন্যাশনাল কলেজ থেকে ২০০৬ সালে এইসএসসিতে পাসের হার ছিল
                                            শতভাগ। ইতোমধ্যে ন্যাশনাল কলেজ মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষাবোর্ড ঢাকার অধীনে
                                            কয়েকটি শ্রেষ্ঠ কলেজের অন্যতম একটি। আর এই সফলতার পেছনে ছিল ছা্ত্র-ছাত্রী, শিক্ষক
                                            এবং অভিবাবকদের কার্যক্রম ও মানসম্মত শিক্ষার নিশ্চয়তা।</p>
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
                        <h2>Recent <span>Events</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="event-slider owl-carousel owl-theme">
                        @foreach ($events as $event)
                            <div class="single-event">
                                <div class="head overlay">
                                    <img src="{{ 'storage/' . $event->event_picture }}" alt="#">

                                </div>
                                <div class="event-content">
                                    <div class="meta">
                                        <span><i class="far fa-calendar-alt text-dark"></i>{{ $event->startTime }}</span>
                                        {{-- <span><i class="far fa-clock"></i>7.00AM-8.00AM</span> --}}
                                    </div>
                                    <h4><a href="event-single.html">{{ $event->title }}</a></h4>
                                    <p>{{ $event->description }}</p>
                                </div>
                            </div>
                        @endforeach
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
