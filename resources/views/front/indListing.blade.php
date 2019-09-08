@include('front.layouts.head')
@include('front.layouts.header')

<!-- page-banner start-->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Listing</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">listing</a>
                        </li>
                        <li>
                            <span class="active">All category</span>
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
                <form method="get" action="{{ route('industry.all') }}">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <input type="text" name="filters[name]" 
                            @if(!empty($filters['name']))
                                value="{{$filters['name']}}"        
                            @endif
                             class="form-control"  placeholder="Search by industy">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                                <i class="fa fa-crosshairs"></i>
                                <input type="text" name="filters[address]" 
                                @if(!empty($filters['address']))
                                    value="{{$filters['address']}}"        
                                @endif
                                class="form-control"  placeholder="Search By Location">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                                <select class="form-control custom-select" name="filters[category]" id="service2">
                                    <option value="">all categories</option>
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            @if(!empty($filters['category']))
                                                @if($filters['category'] == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>    
                                                @endif
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <button type="submit" class="btn btn-one btn-anim w-100" style="background-color: #228ACA !important;color: #fff;">
                                filter now</button>
                        </div>
                    </div>
                </form>
            </div>
              
           
            <section class="categories sp-100-70 bg-dull">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="all-title">
                                <h3 class="sec-title">
                                    All categories
                                </h3>
                                <svg class="title-sep">
                                    <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                                    />
                                </svg>
                                <p>If you are thinking of expanding your business; get registered for free
        and even premium! Get listed with us and experience the difference!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @if(!empty($categories))
                    @foreach($categories as $category)
                        {{-- <div class="list-items2 btn-anim">
                            <div class="icon-box"  >
                                <img src="{{ asset($category->path) }}" style="height: 100px" >
                            </div>
                            <h5 class="mb-0 mt-3">
                                <a href="#">{{ $category->name }}</a>
                            </h5>
                        </div> --}}
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                            <div class="ctg-item">
                                <div class="icon-box" style="background-image:url('assets/img/home/cat1.jpg')">
                                    <img src="{{ asset($category->path) }}" style="height: 100px" >
                                    {{-- <i class="apparels"></i> --}}
                                </div>
                                <div class="content-box p-4">
                                    <h5 class="mb-1">
                                        <a href="{{ route('industries', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                    </h5>
                                    {{-- <p class="mb-0">35 Listing</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                        {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
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
                        </div> --}}
                        
                    </div>
                </div>
            </section>
            
        </div>
    </div>
    <!-- listings end -->

@include('front.layouts.footer')

                    