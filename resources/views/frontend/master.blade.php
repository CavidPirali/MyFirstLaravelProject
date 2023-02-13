<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deluck - Business Agency & Corporate Template">

    <!-- ========== Page Title ========== -->
    <title>Deluck - Business Agency & Corporate Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href={{asset("assets/frontend/img/favicon.png")}} type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href={{asset("assets/frontend/css/bootstrap.min.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/font-awesome.min.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/flaticon-set.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/magnific-popup.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/owl.carousel.min.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/owl.theme.default.min.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/animate.css")}} rel="stylesheet" />
    <link href={{asset("assets/frontend/css/bootsnav.css")}} rel="stylesheet" />
    <link href={{asset('assets/frontend/style.css')}} rel="stylesheet">
    <link href={{asset("assets/frontend/css/responsive.css")}} rel="stylesheet" />


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset("assets/frontend/js/html5/html5shiv.min.js")}}"></script>
    <script src={{asset("assets/frontend/js/html5/respond.min.js")}}></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area inline inc-border">
    <div class="container">
        <div class="row">
            <div class="col-md-7 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                California, TX 70240
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            <p>
                                Info@gmail.com
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>
                                +123 456 7890
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 info-right">
                <div class="item-flex border-less">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="language-switcher">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                English
                                <span class="fas fa-angle-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Español</a></li>
                                <li><a href="#">Française</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default active-border-top attr-border navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="home.blade.php">
                    <img src="{{asset("assets/frontend/img/logo.png")}}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="home.blade.php">Home Version One</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Onepage Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="home.blade.php">Home One</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >About</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.blade.php">Version One</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing-table.blade.php">Pricing Table</a></li>
                            <li><a href="contact.blade.php">Contact</a></li>
                            <li><a href="error.blade.php">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Gallery</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Grid Colum</a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery-grid-2-colum.blade.php">Gallery Two Colum</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.blade.php">Version One</a></li>
                            <li><a href="services-details.blade.php">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Team</a>
                        <ul class="dropdown-menu">
                            <li><a href="team.blade.php">Three Colum</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.blade.php">Blog Standard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.blade.php">contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h4 class="title">About Us</h4>
                <p>
                    Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                </p>
            </div>
            <div class="widget address">
                <h4 class="title">Office Location</h4>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i>
                        +123 456 7890
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        California, TX 70240
                    </li>
                    <li>
                        <i class="fas fa-envelope-open"></i>
                        info@yourdomain.com
                    </li>
                </ul>
            </div>
            <div class="widget opening-hours">
                <h4>Opening Hours</h4>
                <ul>
                    <li>
                        Mon - Fri <span>9:00 - 21:00</span>
                    </li>
                    <li>
                        Saturday <span>10:00 - 16:00</span>
                    </li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
