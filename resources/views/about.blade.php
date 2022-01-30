@extends("layouts.app")

@section('content')
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                    <ul class="bread-list">
                        <li><a href="{{ route('index') }}">Home<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="assets/img/college/21.jpg" alt="#">
                        <a href="https://www.youtube.com/" class="btn video-popup mfp-fade"><i
                                class="far fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, totam.</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque accusantium exercitationem quo
                            recusandae similique quod reprehenderit error nihil ratione! Hic laboriosam nobis quo ducimus et
                            quis ea suscipit doloremque reprehenderit repudiandae voluptates corrupti nam, necessitatibus
                            nulla nostrum iure. Cumque, temporibus.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat alias repudiandae
                            culpa dignissimos ipsa sequi delectus commodi enim! Inventore corporis impedit perferendis quasi
                            aliquam.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat alias repudiandae
                            culpa dignissimos ipsa sequi delectus commodi enim! Inventore corporis impedit perferendis quasi
                            aliquam.</p>

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
                        <div class="number"><span class="counter">60</span>+</div>
                        <p>Total Teacher</p>
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
                        <i class="far fa-video"></i>
                        <div class="number"><span class="counter">220</span>+</div>
                        <p>Total classroom</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">

                    <div class="single-fact">
                        <i class="far fa-award"></i>
                        <div class="number"><span class="counter">40</span>+</div>
                        <p>Win Awards</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow zoomIn">
                    <div class="section-title">
                        <h2>Meet Our <span>Teachers</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident explicabo nemo voluptatem quia
                            a mollitia maxime distinctio eum delectus aperiam!.</p>
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
@endsection
