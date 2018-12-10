<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GPI Africa - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href=" {{ asset('frt-assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('frt-assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{ asset('frt-assets/vendor/lightbox2/css/lightbox.css') }}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{ asset('frt-assets/css/fontastic.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('frt-assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('frt-assets/css/style.blue.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('frt-assets/img/favicon.png') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="./" class="navbar-brand"><img src="{{ asset('frt-assets/img/logo.svg') }}" alt="" class="img-fluid"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <!-- Link-->
                        <li class="nav-item"> <a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                        <!-- Link-->
                        <!--<li class="nav-item"> <a href="faq.html" class="nav-link">FAQ</a></li>-->
                        <!--&lt;!&ndash; Link&ndash;&gt;-->
                        <!--<li class="nav-item"> <a href="contact.html" class="nav-link">Contact</a></li>-->
                        <!--&lt;!&ndash; Link&ndash;&gt;-->
                        <!--<li class="nav-item"> <a href="text.html" class="nav-link">Text Page</a></li>-->
                        <li class="nav-item dropdown">
                            <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                                Resources
                            </a>
                            <div class="dropdown-menu">
                                <a href="javascript:;" class="dropdown-item">FAQ</a>
                                <a href="javascript:;" class="dropdown-item">
                                    Contact
                                </a>
                                <a href="javascript:;" class="dropdown-item">Text Page</a>
                            </div>
                        </li>
                    </ul>
                    @guest
                    <a href="{{ url('/login') }}" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a> @else {{
                    Auth::user()->name }} @endguest

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="footer-logo"><img src="{{ asset('frt-assets/img/logo-footer.svg') }}" alt="..." class="img-fluid"></div>
                </div>
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h5 class="footer-heading">Site pages</h5>
                    <ul class="list-unstyled">
                        <li> <a href="javascript:;" class="footer-link">Home</a></li>
                        <li> <a href="javascript:;" class="footer-link">FAQ</a></li>
                        <li> <a href="javascript:;" class="footer-link">Contact</a></li>
                        <li> <a href="javascript:;" class="footer-link">Text Page</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h5 class="footer-heading">Product</h5>
                    <ul class="list-unstyled">
                        <!--<li> <a href="#" class="footer-link">Why Lysis?</a></li>-->
                        <li> <a href="#" class="footer-link">Enterprise</a></li>
                        <li> <a href="#" class="footer-link">Blog</a></li>
                        <li> <a href="#" class="footer-link">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="footer-heading">We are social</h5>
                    <ul class="list-unstyled">

                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-vimeo"></i></a>
                            <a href="#" class="social-link"><i class="fa fa-pinterest"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved. Global Performance Index. <br>Designed by <a href="https://my-gpisuite.com"
                                class="external footer-link">GPI International </a></p>
                        {{-- Please do not remove the backlink to us unless you support further theme development at https://bootstrapious.com/donate.
                        --}} {{-- It is part of the license conditions. Thank you for understanding :) --}}

                    </div>
                    <!--<div class="col-lg-6 text-center text-lg-right">-->
                    <!--<ul class="list-inline social mb-0">-->
                    <!--<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a><a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-vimeo"></i></a><a href="#" class="social-link"><i class="fa fa-pinterest"></i></a></li>-->
                    <!--</ul>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('frt-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frt-assets/vendor/popper.js/umd/popper.min.js') }}">

    </script>
    <script src="{{ asset('frt-assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frt-assets/vendor/jquery.cookie/jquery.cookie.js') }}">

    </script>
    <script src="{{ asset('frt-assets/vendor/lightbox2/js/lightbox.js') }}"></script>
    <script src="{{ asset('frt-assets/js/front.js') }}"></script>
</body>

</html>
