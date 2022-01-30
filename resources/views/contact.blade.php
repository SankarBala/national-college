@extends('layouts.app')

@section('content')

    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="{{ route('index') }}">Home<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Get In <span>Touch</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using orem psum is that it has a more-or-less
                            normal distribution.</p>
                    </div>
                </div>
            </div>
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2709.088365102505!2d90.4242365071291!3d23.776576747510052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d23.776842799999997!2d90.4257303!4m5!1s0x3755c7ba09302d9b%3A0x9155f2b042302111!2snational%20college!3m2!1d23.7768329!2d90.4254472!5e0!3m2!1sbn!2sbd!4v1643524943150!5m2!1sbn!2sbd"
                                class="w-100" height="660" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-head">

                            <form class="form" method="post" id="contact-form">
                                @csrf
                                <div class="form-group">
                                    <label>You Name</label>
                                    <input name="name" type="text" placeholder="Enter Name" required value="" id="name" />
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input name="email" type="email" placeholder="Email Address" required value=""
                                        id="email" />
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" placeholder="Phone Number" required value=""
                                        id="phone" />
                                    <div class="form-group">
                                        <label>Your Subject</label>
                                        <input name="subject" type="text" placeholder="Subject" required value=""
                                            id="subject" />
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="Your Message" required value=""
                                            id="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="button">
                                            <input name="submit" class="btn btn-success" id="submit" value="Send Message"
                                                type="submit" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <div class="form-messege text-success"></div>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            @push('scripts')
                <script>
                    $("#contact-form").submit(function(e) {
                        e.preventDefault();
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var phone = $("#phone").val();
                        var subject = $("#subject").val();
                        var message = $("#message").val();
                        var token = $("input[name='_token']").val();
                        $.ajax({
                            url: "{{ route('message.store') }}",
                            method: 'POST',
                            data: {
                                name: name,
                                email: email,
                                phone: phone,
                                subject: subject,
                                message: message,
                                _token: token
                            },
                            success: function(data) {
                                $(".form-messege").html(data.message);
                                $("#name").val('');
                                $("#email").val('');
                                $("#phone").val('');
                                $("#subject").val('');
                                $("message").val('');
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });


                    });
                </script>
            @endpush

            <div class="contact-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="contact-info">
                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                            <h3>Our Location</h3>
                            <p>{{ option('address') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="contact-info">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <h3>Email Address</h3>
                            <a href="mailto:{{ option('email') }}"><span class="__cf_email__"
                                    data-cfemail="6e070008012e0b160f031e020b400d0103">{{ option('email') }}</span></a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="contact-info">
                            <div class="icon"><i class="far fa-phone"></i></div>
                            <h3>Get in Touch</h3>
                            <p>{{ option('phone') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
