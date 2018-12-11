<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>GPI Africa | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('bck-assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('bck-assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('bck-assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('bck-assets/pages/css/search.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('bck-assets/layouts/layout3/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/layouts/layout3/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('bck-assets/layouts/layout3/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('styles')
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-md">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <!-- BEGIN HEADER -->
            <div class="page-header">
                <!-- BEGIN HEADER TOP -->
                <div class="page-header-top">
                    <div class="container">
                        <!-- BEGIN LOGO -->
                        <div class="page-logo">
                            <a href="{{ url('/home') }}">
                                <img src="{{ asset('bck-assets/layouts/layout3/img/logo-default.jpg') }}" alt="logo" class="logo-default">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href="javascript:;" class="menu-toggler"></a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge badge-default">7</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="external">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href="app_todo.html">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">just now</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-success">
                                                                <i class="fa fa-plus"></i>
                                                            </span> New user registered.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">3 mins</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Server #12 overloaded.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">10 mins</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Server #2 not responding.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">14 hrs</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> Application error.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">2 days</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Database overloaded 68%.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">3 days</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> A user IP blocked.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">4 days</span>
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd.
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">5 days</span>
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-info">
                                                                        <i class="fa fa-bullhorn"></i>
                                                                    </span> System Error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="time">9 days</span>
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Storage server failed. </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END NOTIFICATION DROPDOWN -->

                                <li class="droddown dropdown-separator">
                                    <span class="separator"></span>
                                </li>

                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class="dropdown dropdown-user dropdown-dark">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" src="{{ asset('storage/companies/logos/'.Auth::user()->company->avatar) }}">
                                        <span class="username username-hide-mobile">{{ Auth::user()->profile->fullname }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        <li>
                                            <a href="{{ url('/profile') }}">
                                                <i class="icon-user"></i> My Profile </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="icon-key"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- END HEADER TOP -->
                <!-- BEGIN HEADER MENU -->
                <div class="page-header-menu">
                    <div class="container">
                        <!-- BEGIN MEGA MENU -->
                        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                        <div class="hor-menu  ">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/') }}">Website</a>
                                </li>
                                <li>
                                    <a href="{{ url('/home') }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Get Verified
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MEGA MENU -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!-- END HEADER -->
        </div>
    </div>
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1>
                                    <small></small>
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->

                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            <ul class="page-breadcrumb breadcrumb">
                                @yield('breadcrumb')
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                @yield('content')
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <!-- BEGIN FOOTER -->
            <!-- BEGIN PRE-FOOTER -->
            <div class="page-prefooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>About</h2>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                            <h2>Subscribe Email</h2>
                            <div class="subscribe-form">
                                <form action="javascript:;">
                                    <div class="input-group">
                                        <input type="text" placeholder="mail@email.com" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit">Submit</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>Follow Us On</h2>
                            <ul class="social-icons">
                                <li>
                                    <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                            <h2>Contacts</h2>
                            <address class="margin-bottom-40"> Phone: 800 123 3456
                                <br> Email:
                                <a href="mailto:info@demo.com">info@demo.io</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRE-FOOTER -->
            <!-- BEGIN INNER FOOTER -->
            <div class="page-footer">
                <div class="container"> {{ date('Y') }} &copy; GPI Africa
                </div>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
            <!-- END INNER FOOTER -->
            <!-- END FOOTER -->
        </div>
    </div>
</div>

<!--[if lt IE 9]>
<script src="{{ asset('bck-assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('bck-assets/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('bck-assets/global/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('bck-assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('bck-assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('bck-assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('bck-assets/layouts/layout3/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/layouts/layout3/scripts/demo.min.js') }}" type="text/javascript"></script>
<script>
    (function(){
        $('#logout').on('click', function(e){
            e.preventDefault();
            $('#logout-form').submit();
        })
    })();
</script>
@yield('scripts')
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>