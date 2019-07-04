<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">

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
        <div class="head-top head-top-two d-none d-lg-block py-1">
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
                            <li>
                                <i class="fa fa-map-marker-alt"></i>
                                432-A2, Park Avenue, US
                            </li>

                            <li class="login-sign">
                                <a href="login.html">
                                    <i class="fa fa-user"></i> login / signup
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-header-two affix" style="background-color: #228ACA !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        {{-- <div class="logo-two logo-wrap">
                            <div class="logo my-1">
                                <a href="index.html">
                                    <img src="assets/img/logo-white.png" alt="logo">
                                </a>
                            </div>
                        </div> --}}
                        <div class="logo-two logo-wrap">
                            <div class="logo my-1">
                                <a href="index.html">
                                    <img src="./images/jcurve.jpeg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="menu menu-two">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon bar1"></span>
                                    <span class="navbar-toggler-icon bar2"></span>
                                    <span class="navbar-toggler-icon bar3"></span>
                                </button>
                                <!-- Links -->
                                <div class="main-menu collapse navbar-collapse" id="nav-content">
                                    <ul class="navbar-nav ml-auto align-items-lg-center">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link  current" data-toggle="dropdown">home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">about us</a>
                                        </li>

                                        <li class="nav-item ">
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

                                        <li class="nav-item d-lg-block d-none">
                                            <a href="add-list.html" style="color: #228ACA !important" class="btn btn-one btn-anim br-5 px-3 nav-btn">
                                                <i class="fa fa-plus-circle"></i> add listing
                                            </a>
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
    <section class="main-banner-2">
        <div class="banner-image2">
            <!-- <div class="tilt-anim" data-tilt> -->
                <div class="banner-content">
                    <!-- <p class="text-uppercase mb-4">Lorem ipsum dolor sit amet consecws eftetuer adscnki</p> -->
                    <h2>Get the j Curve in your Business</h2>
                </div>
            <!-- </div> -->
            
        </div>
    </section>
    <!-- banner end -->

    <!-- listing start -->
    <section class="bg-w tri-bg sp-100-70 o-hide">
        <div class="container">
            <div class="list-category-slider owl-carousel owl-theme mb-60">
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-find"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">destination</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-spa"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">beauty & spa</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-cheers"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">nightlife</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-hotel"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">hotels</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-cutlery"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">restaurants</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-shop"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">shopping</a>
                    </h5>
                </div>
                <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-drama"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">events</a>
                    </h5>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-md-6">
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                </div>
                <div class="col-lg-3 col-md-6">
                    <select class="form-control custom-select" id="service2">
                        <option>all categories</option>
                        <option>hotel</option>
                        <option>tour</option>
                        <option>pharmacy</option>
                        <option>shops</option>
                    </select>

                </div>
                <div class="col-lg-2 col-md-4">
                    <button type="submit" class="btn btn-one btn-anim br-5 w-100 mb-30">
                        <i class="fa fa-search"></i> search</button>
                </div>
            </div>
        </div>
    </section>
    <!-- listing start -->


    

    <!-- counter starts -->
    <section class="counters sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-list-1"></i>
                        </div>
                        <h2 class="count c-theme" data-count="5256">0</h2>
                        <p>total listing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-team"></i>
                        </div>
                        <h2 class="count c-theme" data-count="1250">0</h2>
                        <p>total listing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <h2 class="count c-theme" data-count="160">0</h2>
                        <p>total listing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-appointment"></i>
                        </div>
                        <h2 class="count c-theme" data-count="12">0</h2>
                        <p>total listing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter ends -->

    
    

    <!-- categories start-->
    <section class="categories sp-100-70 bg-dull">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            top categories
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                            ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat1.jpg')">
                            <i class="flaticon-map"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html">destination</a>
                            </h5>
                            <p class="mb-0">35 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat2.jpg')">
                            <i class="flaticon-cutlery"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html">restaurants</a>
                            </h5>
                            <p class="mb-0">20 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat3.jpg')">
                            <i class="flaticon-shop"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> shopping</a>
                            </h5>
                            <p class="mb-0">15 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat4.jpg')">
                            <i class="flaticon-hotel"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> hotels</a>
                            </h5>
                            <p class="mb-0">12 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat5.jpg')">
                            <i class="flaticon-spa"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> Beauty & Spa</a>
                            </h5>
                            <p class="mb-0">18 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat6.jpg')">
                            <i class="flaticon-drama"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> events</a>
                            </h5>
                            <p class="mb-0">14 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat7.jpg')">
                            <i class="flaticon-cheers"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> nightlie</a>
                            </h5>
                            <p class="mb-0">25 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat8.jpg')">
                            <i class="flaticon-fast-food"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing-detail.html"> Beauty & Spa</a>
                            </h5>
                            <p class="mb-0">10 Listing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories end -->


    <!-- cta-one start-->
   
    <!-- cta-one end -->
    

    <!-- app start-->
    <div class="app-section bg-red tri-bg-w sp-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="app-img mr-5">
                        <img src="assets/img/home/app-phn.png" alt="lister-app">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="app-content text-lg-left text-center">
                        <h3>Android App and iOS App Available </h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo ligaui
                            egets dolor. </p>
                        <div class="app-icon">
                            <a href="#" class="mr-4">
                                <img src="assets/img/home/google-play.png" alt="google-play">
                            </a>
                            <a href="#">
                                <img src="assets/img/home/play-store.png" alt="play-store">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- app end -->

    <!-- footer starts -->
    <footer class="footer footer-two">
        <div class="foot-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-12 mb-60">
                        <div class="company-details">
                            <img src="assets/img/logo2.png" class="foot-logo mb-4" alt="lister">
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
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
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
                    
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-capitalize">Copyright © 2019, All rights Reserved. Created by
                            <a href="#">Company Name</a>
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
    <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>