<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GPI Africa - Africa Verified Businesses in one place</title>
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
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('frt-assets/img/logo.png') }}" alt="" class="img-fluid">
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <!-- Link-->
                        <li class="nav-item"> <a href="{{ url('/home') }}" class="nav-link active">Home</a></li>
                        <!-- Link-->
                        <!--<li class="nav-item"> <a href="faq.html" class="nav-link">FAQ</a></li>-->
                        <!--&lt;!&ndash; Link&ndash;&gt;-->
                        <!--<li class="nav-item"> <a href="contact.html" class="nav-link">Contact</a></li>-->
                        <!--&lt;!&ndash; Link&ndash;&gt;-->
                        <!--<li class="nav-item"> <a href="text.html" class="nav-link">Text Page</a></li>-->
                        <li class="nav-item dropdown">
                            <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Resources</a>
                            <div class="dropdown-menu"><a href="javascript:;" class="dropdown-item">FAQ</a>
                                <a href="javascript:;" class="dropdown-item">Contact</a>
                                <a href="javascript:;" class="dropdown-item">Text Page</a>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ url('/login') }}" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a>
                    &nbsp;/&nbsp;
                    <a href="{{ url('/register') }}" class="">Create Account </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
        <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <form action="#" class="login-form text-left">
                        <div class="form-group mb-4">
                            <label>Email address</label>
                            <input type="email" name="email" placeholder="name@company.com" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-heading mb-0">Verified African<br> Businesses</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead text-muted mt-4 mb-4">No. 1 Business Directory for registered and verified businesses on the African Continent.</p>
                        </div>
                    </div>
                    <form action="#" class="subscription-form">
                        <!--<div class="form-group">-->
                        <!--<input type="email" name="email" placeholder="Name@company.com" class="form-control">-->
                        <a href="{{ url('/register') }}" class="btn btn-primary">Get Started</a>
                        <!--</div>-->
                    </form>
                </div>
                <div class="col-lg-6"><img src="{{ asset('frt-assets/img/illustration-hero.svg') }}" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <!-- Intro Section-->
    <section>
        <div class="container">
            <div class="text-center">
                <h2>Ease of Doing Business in Africa just got Easier</h2>
                <p class="lead text-muted mt-2">Get Access to Hundreds of verified businesses in Africa.</p><a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto mt-5"><img src="{{ asset('frt-assets/img/illustration-1.svg') }}" alt="..." class="intro-image img-fluid"></div>
            </div>
        </div>
    </section>
    <!-- Divider Section-->
    <section class="bg-primary text-white">
        <div class="container">
            <div class="text-center">
                <h2>Get More Business Investment</h2>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p class="lead text-white mt-2">Get your Business reputation from zero to your Goals when you are verified by us</p>
                    </div>
                </div> <a href="{{ url('/register') }}" class="btn btn-outline-light">Create a Profile Today </a>
            </div>
        </div>
    </section>
    <!-- SignUp Modal-->
    <div id="signup" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
        <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <form action="#" class="login-form text-left">
                        <div class="form-group mb-4">
                            <label>Full Name</label>
                            <input type="email" name="email" placeholder="Last Name first" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label>Company Name</label>
                            <input type="password" name="password" placeholder="Full Company Name" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label>Official Email</label>
                            <input type="password" name="password" placeholder="name@businessname.com" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label>Telephone</label>
                            <input type="password" name="password" placeholder="Include international dialing code e.g 234 for Nigeria" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Integrations Section-->
    <!--<section>-->
    <!--<div class="container">-->
    <!--<div class="text-center">-->
    <!--<h2>Integrations</h2>-->
    <!--<div class="row">-->
    <!--<div class="col-lg-8 mx-auto">-->
    <!--<p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. eiusmod tempor incididunt ut labore.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="integrations mt-5">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/monitor.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">Web desgin</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/target.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">Print</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/chat.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">SEO and SEM</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/idea.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">Consulting</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/coffee-cup.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">Email Marketing</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--<div class="box text-center">-->
    <!--<div class="icon d-flex align-items-end"><img src="img/pen.svg" alt="..." class="img-fluid"></div>-->
    <!--<h3 class="h4">UX &amp; UI</h3>-->
    <!--<p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->
    <!-- CLients Section-->
    <section class="bg-gray">
        <div class="container">
            <div class="text-center">
                <h2>Trusted by These Financiers</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead text-muted mt-2">Our platform is trusted by these Financiers from all over the world</p>
                    </div>
                </div>
            </div>
            <div class="clients mt-5">
                <div class="row">
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-1.svg') }}" alt="" class="client-image img-fluid"></div>
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-2.svg') }}" alt="" class="client-image img-fluid"></div>
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-3.svg') }}" alt="" class="client-image img-fluid"></div>
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-4.svg') }}" alt="" class="client-image img-fluid"></div>
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-5.svg') }}" alt="" class="client-image img-fluid"></div>
                    <div class="col-lg-2"><img src="{{ asset('frt-assets/img/client-6.svg') }}" alt="" class="client-image img-fluid"></div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container text-center text-lg-left">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2 class="divider-heading">How Lysis works</h2>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead divider-subtitle mt-2 text-muted">Our Team of professionals are highly skilled experts in strategic management, leadership and
                                business development.</p>
                        </div>
                    </div><a href="#" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0"><img src="img/illustration-2.svg" alt="" class="divider-image img-fluid"></div>
            </div>
        </div>
    </section>

    <!-- Get Started Section-->
    <section class="bg-darkblue">
        <div class="container text-center">
            <h2>Grow your Business</h2>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <p class="lead text-muted mt-2">Get Business updates from Experts.<br>We do not spam you.</p>
                </div>
            </div>

        </div>
    </section>
    <footer class="main-footer">
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
    <script>
      (function(){
         if(localStorage.getItem('usrChoice')){
                localStorage.removeItem('usrChoice');
            }
      })();
    </script>
</body>

</html>
