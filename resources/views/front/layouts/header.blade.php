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

                            {{-- <li class="login-sign">
                                <a href="login.html">
                                    <i class="fa fa-user"></i> login / signup
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-header-two affix" style="background-color: #228ACA !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-two logo-wrap">
                            <div class="logo my-1">
                                <a href="index.html">
                                    <img src="./images/jcurve2.jpeg">
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
                                            <a href="{{ route('root') }}" class="nav-link  current" >home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">about us</a>
                                        </li>

                                        <li class="nav-item ">
                                            <a href="{{ route('industry.all') }}" class="nav-link" >listing</a>
                                        </li>

                                        

                                        

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contactus') }}">contact us</a>
                                        </li>

                                        <li class="nav-item d-lg-block d-none">
                                            <a href="{{ route('listing.add') }}" style="color: #228ACA !important" class="btn btn-one btn-anim br-5 px-3 nav-btn">
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