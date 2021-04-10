<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
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
    @yield('css')

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

<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo-3" href="index.html">
                <img src="{{asset('main/img/logos/black-logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown active">
                        <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="messages.html" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="bookings.html" class="nav-link">Bookings</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-properties.html" class="nav-link">My Properties</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-invoices.html" class="nav-link">My Invoices</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="favorited-properties.html" class="nav-link">Favorited Properties</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="submit-property.html" class="nav-link">Submit Property</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('my.profile')}}" class="nav-link">My Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.html" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://placehold.it/90x90" alt="avatar">
                                    My Account
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="messages.html">Messages</a>
                                    <a class="dropdown-item" href="bookings.html">Bookings</a>
                                    <a class="dropdown-item" href="my-profile.html">My profile</a>
                                    <a class="dropdown-item" href="index.html">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-theme btn-md" href="submit-property.html">Submit property</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-nav">
                <div class="dashboard-inner">
                    <h4>Main</h4>
                    <ul>
                        <li @if(url()->current() === route('dashboard')) class="active" @endif><a @if(url()->current() !== route('dashboard')) href="{{route('dashboard')}}" @endif><i class="flaticon-dashboard"></i> Dashboard</a></li>
                        <li><a href="messages.html"><i class="flaticon-mail"></i> Messages <span class="nav-tag">6</span></a></li>
                        <li><a href="bookings.html"><i class="flaticon-calendar"></i> Bookings</a></li>
                    </ul>
                    <h4>Listings</h4>
                    <ul>
                        <li><a href="my-properties.html"><i class="flaticon-empire-state-building"></i>My Properties</a></li>
                        <li><a href="my-invoices.html"><i class="flaticon-bill"></i>My Invoices</a></li>
                        <li><a href="favorited-properties.html"><i class="flaticon-heart"></i>Favorited Properties</a></li>
                        <li><a href="submit-property.html"><i class="flaticon-plus"></i>Submit Property</a></li>
                    </ul>
                    <h4>Account</h4>
                    <ul>
                        <li @if(url()->current() === route('my.profile')) class="active" @endif><a @if(url()->current() !== route('my.profile')) href="{{route('my.profile')}}" @endif><i class="flaticon-male"></i>My Profile</a></li>
                        <li><a href="{{route('logout')}}"><i class="flaticon-logout"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="dashboard-content" id="app">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- Dashbord end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
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
@yield('js')
</body>
</html>
