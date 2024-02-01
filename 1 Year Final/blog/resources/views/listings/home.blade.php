@extends('layout')

@section('content')
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to Alpha Squad</h2>
                    <p class="animate__animated fanimate__adeInUp">A place where Sri Lankan Esports Gamers hangout and play
                        video games.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Join us Now</h2>
                    <p class="animate__animated animate__fadeInUp">Register now. Where just you and a handful of friends can
                        spend time together. A place that makes it easy to talk every day and hang out more often..</p>
                    <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>About</h2>
                    <p>Who we are</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p>
                            Alpha Squad is an online gaming community which focuses primarily on providing a common place to
                            hang out and socialize with fellow gamers.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Share gaming contents</li>
                            <li><i class="ri-check-double-line"></i> Latest updates</li>
                            <li><i class="ri-check-double-line"></i> Gaming events</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            The community was created in 2016 and currently has over 150 members as of August 2022. Alpha
                            Squad has set up a regular schedule where members gather and have either video games played or
                            attend event in order to meet new people or to hang out with previous members. They also
                            participated in some of GLK (Gamer LK) tournaments but their main goal is to keep it a simple
                            fun-loving community out of the competitive aspect.
                        </p>
                        <a href="/register" class="btn-learn-more">Register Now</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Services</h2>
                    <p>What we do offer</p>
                </div>

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                            <i class="ri-window-fill"></i>
                            <h4 class="d-none d-lg-block">Blog</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <i class="ri-wechat-fill"></i>
                            <h4 class="d-none d-lg-block">Chat</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Blog that features everything Gaming-Related</h3>
                                <p>
                                    Video Game Blog team consists of more than 20 experts on gaming, so you know you’re in
                                    for a treat. This team works hard to deliver the support that you need for gaming and
                                    the latest news and reviews about top games.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Reviews of newly released games.</li>
                                    <li><i class="ri-check-double-line"></i> Latest gaming related news.</li>
                                    <li><i class="ri-check-double-line"></i> Gaming hardware reviews and recommendations.
                                    </li>
                                </ul>
                                <p class="fst-italic">
                                    Join us today if you haven't already and share interesting gaming related content with
                                    the fellow community members. Help us grow as a community and help spread the love.
                                    Don't forget to tell us about your gaming style.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Online Text-Chat service for registered community members</h3>
                                <p>
                                    Alpha Squad provides ultra-simple text chat service. You can start chatting with fellow
                                    community members by simply registering with Alpha Squad. You can also add friends to
                                    your chat and find friends to play together.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Send messages.</li>
                                    <li><i class="ri-check-double-line"></i> Add people to group conversations.</li>
                                    <li><i class="ri-check-double-line"></i> Let others know you’ve read their messages.
                                    </li>
                                </ul>
                                <p class="fst-italic">
                                    Join us today if you haven't already and share interesting gaming related content with
                                    the fellow community members. Help us grow as a community and help spread the love.
                                    Don't forget to tell us about your gaming style.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Team</h2>
                    <p>Our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ash</h4>
                                <span>Naveendra Ashen</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>D3F3ND3R</h4>
                                <span>Yasith Heshan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Lazer Knight</h4>
                                <span>Lakshan Mihilaka</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Bloodborne</h4>
                                <span>Sahan Sudara</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-discord"></i>
                                <h4>Discord:</h4>
                                <a href="https://discord.gg/3tcwPHvm">
                                    <p>https://discord.gg/3tcwPHvm</p>
                                </a>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope-fill"></i>
                                <h4>Email:</h4>
                                <a href="mailto:ashenmrn@gmail.com">
                                    <p>ashenmrn@gmail.com</p>
                                </a>
                            </div>

                            <div class="phone">
                                <i class="bi bi-facebook"></i>
                                <h4>Facebook:</h4>
                                <a href="https://www.facebook.com/groups/1903437133085969">
                                    <p>Sri Lankan Gaming Alliance</p>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <form action="#" method="POST" role="form" class="php-email-form-f contact_form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            {{-- <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div> --}}
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message" required></textarea>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div class="text-center"><button type="submit" style="margin-top: 16px">Send
                                    Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
