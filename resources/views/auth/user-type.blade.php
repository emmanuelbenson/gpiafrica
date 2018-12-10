<script>(function(){localStorage.removeItem('usrChoice');})();
</script>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>GPI Africa | User Account 4</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #3 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets//global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('bck-assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('bck-assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('bck-assets/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <h1 style="color: #fff; text-transform: uppercase;">GPI Africa</h1>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form">
        <h3 class="form-title">Select User Type</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Select a user type. </span>
        </div>
        <div class="form-group">

            <div class="form-group">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Select a user type. </span>
                </div>
                <div class="btn-group-vertical " data-toggle="buttons">
                    <label class="btn blue btn-lg btn-circle">
                        <input type="radio" id="radio-biz" class="toggle"> Business </label>
                    <!-- BEGIN HELP BLOCK -->
                    <p class="help-block">
                        <span class="label label-xs label-success">E.g.&nbsp;</span> Importer, Exporter, Manufacturer,etc. </p>
                    <!--END HELP BLOCK-->
                    <div class="clearfix margin-bottom-10"> </div>
                    <label class="btn blue btn-lg btn-circle btn-block">
                        <input type="radio" id="radio-finance" class="toggle"> Financier
                    </label>

                </div>
            </div>
            <a href="{{ url('/login') }}" class="btn btn-md yellow btn-square">Back to login</a>
        </div>
    </form>
    <!-- END LOGIN FORM -->

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
<script src="{{ asset('bck-assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('bck-assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bck-assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('bck-assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('bck-assets/pages/scripts/login-4.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#radio-biz').on('change', function(){
            localStorage.setItem("usrChoice", "business")
            setTimeout(function(){
                window.location.href = "{{ url('/register') }}";
            }, 1000)
        });

        $('#radio-finance').on('change', function(){
            localStorage.setItem("usrChoice", "financier")
            setTimeout(function(){
                window.location.href = "{{ url('/register') }}";
            }, 1000)
        })
    })
</script>
</body>

</html>