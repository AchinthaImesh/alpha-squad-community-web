<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Alpha Squad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{ URL('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"') }}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/home"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                            class="img-fluid">Alpha Squad</a>
                </h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="/home">Home</a></li>
                    <li><a class="nav-link scrollto " href="/">Blog</a></li>
                    <li><a class="nav-link scrollto " href="/chat">Chat</a></li>
                    @auth
                        <li><a class="nav-link scrollto " href="/listings/manage">Manage Posts</a></li>
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt=""
                            style="margin-right: 2px">
                        {{-- <li><span>{{ auth()->user()->name }}</span></li> --}}
                        <li class="dropdown"><a href="#"
                                style="background: transparent; margin-left: 2px;"><span>{{ auth()->user()->name }}</span><i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <form method="POST" class="inline " action="/logout">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a class="nav-link scrollto " href="/register">Register</a></li>
                        <li><a class="nav-link scrollto " href="/login">Log in</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Alpha Squad</h3>
            <p>A place that makes it easy to talk every day and hang out more often...</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Alpha Squad</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">KUDSE211F</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
        const form = document.querySelector('.contact_form');

        function sendMsg(e) {
            e.preventDefault();

            var name = document.querySelector('#name').value;
            var email = document.querySelector('#email').value;
            var message = document.querySelector('#message').value;

            //password F8A1EA4548CF77E37A9CC59016935B3A4A93
            //server smtp.elasticemail.com
            //Port 2525
            Email.send({
                SecureToken: "f4b68e7a-1e9c-46f3-98fa-af99a9641ab1",
                To: 'fortestingcode2000@gmail.com',
                From: email,
                Subject: "Contact From",
                Body: message
            }).then(
                // location.reload(),
                message => confirm(message)
                // location.reload()
                //  if (message=>confirm(message) == true) {
                //     window.location.reload();
                //  }

                // if (message) {
                //     window.location.reload();
                // }

            );

        }

        form.addEventListener('submit', sendMsg);
    </script>

</body>

</html>
