@include('front.layouts.head')
@include('front.layouts.header')

<!-- page-banner start-->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>add listing</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">listing</a>
                        </li>
                        <li>
                            <span class="active">add listing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}

    <!-- listings start-->
    <div class="bg-w sp-100">
        <div class="container">
            <div class="filter-box mb-30">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <input type="text" class="form-control" placeholder="What are you looking for?">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                                <i class="fa fa-crosshairs"></i>
                                <input type="text" class="form-control" placeholder="location">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                                <select class="form-control custom-select" id="service2">
                                    <option>all categories</option>
                                    <option>hotel</option>
                                    <option>tour</option>
                                    <option>pharmacy</option>
                                    <option>shops</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                                <i class="fas fa-dollar-sign"></i>
                                <input type="text" class="form-control" placeholder="location">
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                            <div class="input-wrap range-box">
                                <p>distance radius :
                                    <span class="range-value">30</span>
                                    km
                                </p>
                                <div class="range-slider">
                                    <input type="range" min="1" max="100" value="30" class="range-track" id="myRange">
                                    <div class="fill" style="width:30%"></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <button type="submit" class="btn btn-one btn-anim w-100" style="background-color: #228ACA !important;color: #fff;">
                                filter now</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="action-list">
                <div class="row">
                    {{-- <div class="col-md-3 col-6 mb-30">
                        <div class="sort-filter">
                            <div class="sort-dropdown">
                                <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                    Popularity
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">low to high</a>
                                    <a class="dropdown-item" href="#">hight to low</a>
                                    <a class="dropdown-item" href="#">relevance</a>
                                    <a class="dropdown-item" href="#">discount</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-9 col-6 mb-30">
                        <div class="view-mode justify-content-end d-flex">
                            <div class="grid-view views current">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="list-view views">
                                <i class="fa fa-list-ul"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-grid-view show-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 49%
                                </span>
                                <img src="assets/img/home/pl-slide1.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>55
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cutlery mr-2"></i> restaurants</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the lounge & bar</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 30%
                                </span>
                                <img src="assets/img/home/pl-slide2.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>42
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shop mr-2"></i>shopping</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the best shop in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 19%
                                </span>
                                <img src="assets/img/home/pl-slide3.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>24
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cheers mr-2"></i>nightlife</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">enjoy best nightlife</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 59%
                                </span>
                                <img src="assets/img/home/pl-slide4.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>02
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best beauty & spa services</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 20%
                                </span>
                                <img src="assets/img/home/pl-slide5.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>42
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-find mr-2"></i>desitination</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best destinations in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 26%
                                </span>
                                <img src="assets/img/home/pl-slide6.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>24
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-hotel mr-2"></i>hotels</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">comfy hotels in town</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 17%
                                </span>
                                <img src="assets/img/home/pl-slide7.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>24
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shop mr-2"></i>shopping</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">shop the best clothes</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 39%
                                </span>
                                <img src="assets/img/home/pl-slide8.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>56
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-drama mr-2"></i>events</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">enjoy the festivals</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 45%
                                </span>
                                <img src="assets/img/home/pl-slide9.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>42
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cutlery mr-2"></i>food & drink</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">fabulous dine restaurants</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-30">
                        <a href="#" class="btn btn-one btn-anim">load more</a>
                    </div>
                </div>
            </div>
            <div class="listing-list-view">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 49%
                                    </span>
                                    <img src="assets/img/home/pl-slide1.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>24
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cutlery mr-2"></i> restaurants</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the lounge & bar</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 30%
                                    </span>
                                    <img src="assets/img/home/pl-slide2.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>27
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shop mr-2"></i>shopping</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the best shop in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 19%
                                    </span>
                                    <img src="assets/img/home/pl-slide3.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>35
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cheers mr-2"></i>nightlife</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">enjoy best nightlife</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 59%
                                    </span>
                                    <img src="assets/img/home/pl-slide4.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>75
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best beauty & spa services</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 20%
                                    </span>
                                    <img src="assets/img/home/pl-slide5.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>95
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-find mr-2"></i>desitination</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best destinations in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 26%
                                    </span>
                                    <img src="assets/img/home/pl-slide6.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>64
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-hotel mr-2"></i>hotels</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">comfy hotels in town</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 16%
                                    </span>
                                    <img src="assets/img/home/pl-slide7.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>31
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shop mr-2"></i>shopping</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">shop the best clothes</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="listing-item p-2">
                            <div class="img-list">
                                <div class="img-holder">
                                    <span class="offer">save 16%
                                    </span>
                                    <img src="assets/img/home/pl-slide8.jpg" alt="list">
                                    <div class="rate-like centering justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a class="likes" href="#">
                                            <i class="far fa-heart"></i>75
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-drama mr-2"></i>events</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">enjoy the festivals</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-30">
                        <a href="#" class="btn btn-one btn-anim">load more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- listings end -->

@include('front.layouts.footer')