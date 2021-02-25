<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/bootstrap-submenu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('main/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('main/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('main/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('main/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('main/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('main/css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('main/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('main/img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('main/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script  src="{{asset('main/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script  src="{{asset('main/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script  src="{{asset('main/js/html5shiv.min.js')}}"></script>
    <script  src="{{asset('main/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNPV7L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3>Sign into your account</h3>
                    <div class="btn-section clearfix">
                        <a href="{{route('login')}}" class="link-btn active btn-1 active-bg">Login</a>
                        <a href="{{route('register')}}" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>
                    <form method="post">
                        @csrf
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                        </div>
                        <div class="form-group form-box clearfix">
                            <input type="password" name="password" class="input-text" placeholder="Password">
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn-md btn-theme float-left">Login</button>
                            <a href="forgot-password.html" class="forgot-password">Forgot Password</a>
                        </div>
                    </form>
                    <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="{{route('home')}}">
                            <img src="{{asset('main/img/logos/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <h3>Welcome to Neer</h3>
                    <div class="social-list">
                        <a href="#" class="facebook-bg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter-bg">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="google-bg">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="linkedin-bg">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

<script src="{{asset('main/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('main/js/popper.min.js')}}"></script>
<script src="{{asset('main/js/bootstrap.min.js')}}"></script>
<script  src="{{asset('main/js/bootstrap-submenu.js')}}"></script>
<script  src="{{asset('main/js/rangeslider.js')}}"></script>
<script  src="{{asset('main/js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{asset('main/js/bootstrap-select.min.js')}}"></script>
<script  src="{{asset('main/js/jquery.easing.1.3.js')}}"></script>
<script  src="{{asset('main/js/jquery.scrollUp.js')}}"></script>
<script  src="{{asset('main/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script  src="{{asset('main/js/leaflet.js')}}"></script>
<script  src="{{asset('main/js/leaflet-providers.js')}}"></script>
<script  src="{{asset('main/js/leaflet.markercluster.js')}}"></script>
<script  src="{{asset('main/js/dropzone.js')}}"></script>
<script  src="{{asset('main/js/slick.min.js')}}"></script>
<script  src="{{asset('main/js/jquery.filterizr.js')}}"></script>
<script  src="{{asset('main/js/jquery.magnific-popup.min.js')}}"></script>
<script  src="{{asset('main/js/jquery.countdown.js')}}"></script>
<script  src="{{asset('main/js/maps.js')}}"></script>
<script  src="{{asset('main/js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{asset('main/js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{asset('main/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
