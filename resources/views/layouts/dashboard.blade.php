<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Neer - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
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
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown active">
                        <a href="dashboard.html" class="nav-link">Dashboard</a>
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
                        <a href="my-profile.html" class="nav-link">My Profile</a>
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
                        <li class="active"><a href="dashboard.html"><i class="flaticon-dashboard"></i> Dashboard</a></li>
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
                        <li><a href="my-profile.html"><i class="flaticon-male"></i>My Profile</a></li>
                        <li><a href="index.html"><i class="flaticon-logout"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-md-5"><h4>Hello , Tom</h4></div>
                        <div class="col-sm-12 col-md-7">
                            <div class="breadcrumb-nav">
                                <ul>
                                    <li>
                                        <a href="index.html">Index</a>
                                    </li>
                                    <li>
                                        <a href="#" class="active">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-success alert-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ui-item bg-success">
                            <div class="left">
                                <h4>242</h4>
                                <p>Active Listings</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ui-item bg-warning">
                            <div class="left">
                                <h4>1242</h4>
                                <p>Listing Views</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ui-item bg-active">
                            <div class="left">
                                <h4>786</h4>
                                <p>Reviews</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-comments-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ui-item bg-dark">
                            <div class="left">
                                <h4>42</h4>
                                <p>Bookmarked</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-heart-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="dashboard-list">
                            <div class="dashboard-message bdr clearfix ">
                                <div class="tab-box-2">
                                    <div class="clearfix mb-30 comments-tr">
                                        <span>Comments</span>
                                        <ul class="nav nav-pills float-right" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pending</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Approved</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>Maikel Alisa</h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#"><img src="http://placehold.it/60x60" alt="comments-user"></a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment mb-0">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment mb-0">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="dashboard-list">
                            <div class="dashboard-message bdr clearfix ">
                                <div class="tab-box-2">
                                    <div class="clearfix mb-30 comments-tr">
                                        <span>Comments</span>
                                        <ul class="nav nav-pills float-right" id="pills-tab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Pending</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="true">Approved</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent2">
                                        <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>Maikel Alisa</h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#"><img src="http://placehold.it/60x60" alt="comments-user"></a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment mb-0">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active show" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                            <div class="comment mb-0">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="http://placehold.it/60x60" alt="comments-user">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5>
                                                            Maikel Alisa
                                                        </h5>
                                                        <div class="comment-meta">
                                                            8:42 PM 1/28/2017<a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="sub-banner-2 text-center">© 2018 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
                    </div>
                </div>
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

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>