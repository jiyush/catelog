@include('front.layouts.head')
@include('front.layouts.header')
    
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
                @if(!empty($categories))
                    @foreach($categories as $category)
                        <div class="list-items2 btn-anim">
                            <div class="icon-box"  >
                                {{-- <i class="flaticon-find"></i> --}}
                                <img src="{{ asset($category->path) }}" style="height: 100px" >
                            </div>
                            <h5 class="mb-0 mt-3">
                                <a href="#">{{ $category->name }}</a>
                            </h5>
                        </div>
                    @endforeach
                @endif
                
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
@include('front.layouts.footer')
   