<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>GPI Market Africa | Account</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content=" " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('bck-assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('bck-assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('bck-assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{ url('/') }}">
        <!--<img src="../assets/pages/img/logo-big.png" alt="" /--> <span><h1 style="color: #fff;">GPI Africa</h1></span></a>
</div>
<!-- END LOGO -->
<div class="content">

    <!-- BEGIN REGISTRATION FORM -->
    <form class="login-form" action="{{ url('/register') }}" method="post">
        <h3>{{ __('Create Account') }}</h3>
        @csrf
        <input type="hidden" id="usrChoice" name="usrChoice" value="{{ old('usrChoice') }}">
        <p> Enter your personal details below: </p>
        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Full Name</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control{{ $errors->has('fullname') ? ' has-error' : '' }} placeholder-no-fix" value="{{ old('fullname') }}" type="text" placeholder="Full Name" name="fullname" />
                @if ($errors->has('fullname'))<span id="fullname-error" class="help-block">{{ $errors->first('fullname') }}</span>@endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('companyName') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Company Name</label>
            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" value="{{ old('companyName') }}" placeholder="Company Name" name="companyName" />
                @if ($errors->has('companyName'))<span id="fullname-error" class="help-block">{{ $errors->first('companyName') }}</span>@endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
            <label for="single" class="control-label">Select sector</label>
            <select name="industry" id="industry" class="select2 form-control" value="{{ old('industry') }}">
                <option value=""></option>
            </select>
            @if ($errors->has('industry'))<span class="help-block">{{ $errors->first('industry') }}</span>@endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" value="{{ old('email') }}" type="text" placeholder="Email" name="email" />
                @if ($errors->has('email'))<span class="help-block">{{ $errors->first('email') }}</span>@endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Address</label>
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="text" value="{{ old('address') }}" placeholder="Address" name="address" />
                @if ($errors->has('address'))<span class="help-block">{{ $errors->first('address') }}</span>@endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">City/Town</label>
            <div class="input-icon">
                <i class="fa fa-location-arrow"></i>
                <input class="form-control placeholder-no-fix" type="text" value="{{ old('city') }}" placeholder="City/Town" name="city" />
                @if ($errors->has('city'))<span class="help-block">{{ $errors->first('city') }}</span>@endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="single" class="control-label">Select country</label>
            <select id="country" name="country" class="form-control select2">
                <option></option>
            </select>
            @if ($errors->has('country'))<span class="help-block">{{ $errors->first('country') }}</span>@endif
        </div>
        <p> Enter your account details below: </p>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
                @if ($errors->has('password'))<span class="help-block">{{ $errors->first('password') }}</span>@endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" />
                </div>
            </div>
        </div>
        <div class="form-group{{ $errors->has('tnc') ? ' has-error' : '' }}">
            <label class="mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="tnc" /> I agree to the
                <a href="javascript:;">Terms of Service </a> &
                <a href="javascript:;">Privacy Policy </a>
                <span></span>
            </label>
            <div id="register_tnc_error">
                @if ($errors->has('tnc'))<span class="help-block">{{ $errors->first('tnc') }}</span>@endif
            </div>
        </div>
        <div class="form-actions">
            <a id="register-back-btn" href="{{ url('/login') }}" class="btn red btn-outline"> Back </a>
            <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">&copy; GPI International </div>
<!-- END COPYRIGHT -->
<!--[if lt IE 9]>
<script src="{{ asset('bck-assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('bck-assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{ asset('bck-assets/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('bck-assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('bck-assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('bck-assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('bck-assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('bck-assets/pages/scripts/login-4.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/custom.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->

</body>
<script>
    (function(){
        if(!localStorage.getItem("usrChoice")){
            window.location.href = "{{ url('/pre-register') }}"
        }

        var usrChoice = localStorage.getItem("usrChoice");
        var usrSelChoice = $("#usrChoice").val();
        usrSelChoice.val(usrChoice);

    })();
</script>

</html>