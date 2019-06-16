<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!--  CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- PAGE TITLE -->
    <title>D-Lister | Directory & Listing Responsive HTML5 Template </title>

</head>

<body>

    <!-- ====== Go to top ====== -->
    <a id="toTop" title="Go to top" href="javascript:void(0)">
        <span id="toTopHover"></span>TOP
    </a>

    <!-- Preloader start-->
    <div class="preloader">
        <div class="loader-inner">
            <div class="dash one">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash two">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash three">
                <i class="fa fa-map-marker-alt"></i>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header start-->
    <header class="header">
        <div class="head-top head-top-one d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="socials socials-header text-lg-left text-center">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="head-contact text-lg-right text-center">
                            <li>
                                <i class="fa fa-phone"></i>
                                +123-456-7890
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                info@company.com
                            </li>
                            <!-- <li class="language-drop">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                        english
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">hindi</a>
                                        <a class="dropdown-item" href="#">urdu</a>
                                        <a class="dropdown-item" href="#">english</a>
                                    </div>
                                </div>
                            </li> -->
                            <li class="ad-list">
                                <a href="add-list.html" class="btn btn-two btn-anim">
                                    <i class="fa fa-plus-circle"></i> add listing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-header-one affix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-one logo-wrap">
                            <div class="logo my-1">
                                <a href="index.html">
                                    <img src="{{ asset('images/jcurve.jpeg') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="menu menu-one">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon bar1"></span>
                                    <span class="navbar-toggler-icon bar2"></span>
                                    <span class="navbar-toggler-icon bar3"></span>
                                </button>
                                <!-- Links -->
                                <div class="main-menu collapse navbar-collapse" id="nav-content">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle current" data-toggle="dropdown">home</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dropdown">
                                                    <a href="index.html">home 1</a>
                                                </li>
                                                <li class="dropdown-item dropdown">
                                                    <a href="index-2.html">home 2</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">about us</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">listing</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="listing.html">all listings</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-sidebar.html">listing with sidebar</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-with-map.html">listing with map</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-detail.html">listing detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">contact us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#search">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item join-nav d-lg-block d-none">
                                            <a class="nav-link" href="login.html">
                                                <i class="fa fa-user c-theme mr-2"></i> join us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <!-- Search Form -->
    <div id="search" class="top-search d-flex">
        <span class="close">
            <i class="fa fa-times"></i>
        </span>
        <div class="w-100 text-center mt-4">
            <h3 class="c-white fw-5">search here</h3>
            <form role="search" id="searchform" action="#" method="get" class="search-bar">
                <input value="" name="q" type="search" placeholder="type to search..." class="form-control">
                <button type="submit" class="submit-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- banner start -->
    <div class="main-banner">
        <div class="banner-image" data-jarallax='{"videoStartTime": 4300}' data-jarallax-video="https://youtu.be/y1Alop4LhYI">
            <div class="container">
                <div class="banner-content">
                    <div class="row">
                        <div class="col-12">
                            <h2>Get the j curve in your business...</h2>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consecws eftetuer adscnki iscedring elit aendea cdefom ameodo lorem
                                ipsf dolor sit amet conscsec tsetuer.</p>
                        </div>
                    </div>
                    <form action="#" class="banner-form mt-5">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-3 col-md-6">
                                <input type="text" class="form-control mb-lg-0" placeholder="What are you looking for?">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <select class="form-control mb-lg-0 custom-select" id="service2">
                                    <option>all categories</option>
                                    <option>hotel</option>
                                    <option>tour</option>
                                    <option>pharmacy</option>
                                    <option>shops</option>
                                </select>

                            </div>
                            <div class="col-lg-2 col-md-4">
                                <button type="submit" class="btn btn-one btn-anim w-100">
                                    <i class="fa fa-search"></i> search</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- popular list start-->
    

    <!-- categories start-->
    <section class="categories sp-100-70 bg-dull">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                             Categories
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                            ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($categories as $category)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <!-- <div class="icon-box" style="background-image:url({{ asset($category->path) }})"> -->
                        <div class="icon-box" >
                           <!--  <i class="flaticon-map"></i> -->
                           <!-- <i class="far fa-address-book"></i> -->
                           <img src="{{ asset($category->path) }}" style="height: 100px;">
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html">{{ $category->name }}</a>
                            </h5>
                            <p class="mb-0">35 Listing</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- categories end -->

    

    <!-- footer starts -->
    <footer class="footer footer-one">
        <div class="foot-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-12 mb-60">
                        <div class="company-details">
                            <img src="{{ asset('images/jcurve.jpeg') }}" class="foot-logo mb-4" alt="lister">
                            <p class="pb-2">Lorem ipsum dolor sit amet, consect tuer adipi cin elit. Aen sociis nato pe na ibus magnis dis
                                partur monte na et ridiculu onec quam felis. castei efte tuerg scn kt isceding elit ende
                                cd magum socadaiis nato ipsf.</p>
                            <div class="socials mt-4">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                        <div class="recent-post">
                            <div class="foot-title">
                                <h4>useful links</h4>
                            </div>
                            <ul class="quick-link">
                                <li>
                                    <a href="add-list.html">add listing</a>
                                </li>
                                <li>
                                    <a href="register.html">register</a>
                                </li>
                                <li>
                                    <a href="sign-in.html">sign in</a>
                                </li>
                                <li>
                                    <a href="about.html">how it work</a>
                                </li>
                                <li>
                                    <a href="contact.html">contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                        <div class="recent-post">
                            <div class="foot-title">
                                <h4>my account</h4>
                            </div>
                            <ul class="quick-link">
                                <li>
                                    <a href="login.html">create account</a>
                                </li>
                                <li>
                                    <a href="#">dashboard</a>
                                </li>
                                <li>
                                    <a href="#">profile</a>
                                </li>
                                <li>
                                    <a href="#">my listing</a>
                                </li>
                                <li>
                                    <a href="#">favorites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                        <div class="recent-post">
                            <div class="foot-title">
                                <h4>categories</h4>
                            </div>
                            <ul class="quick-link">
                                <li>
                                    <a href="#">Restaurants</a>
                                </li>
                                <li>
                                    <a href="#">Shopping</a>
                                </li>
                                <li>
                                    <a href="#">Hotels</a>
                                </li>
                                <li>
                                    <a href="#">Destinations</a>
                                </li>
                                <li>
                                    <a href="#">Nightlife</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                        <div class="recent-post">
                            <div class="foot-title">
                                <h4>quick links</h4>
                            </div>
                            <ul class="quick-link">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="price.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">Blogs</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Our Partners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="foot-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-capitalize">Copyright © 2019, All rights Reserved. Created by
                            <a href="#">J curve</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>