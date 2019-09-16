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
                            <span class="active">All category</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}

    <!-- listings start-->
    {{-- <div class="bg-w sp-100">
        <div class="container"> --}}
            {{-- <div class="filter-box mb-30"> --}}
                {{-- <form method="get" action="{{ route('industry.all') }}">
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
                </form> --}}
            {{-- </div> --}}
              
           
            {{-- <section class="categories sp-100-70 bg-dull"> --}}
                <section class="bg-dull sp-100-70">
                <div class="container-fluid">
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
                                <p>We are committed to help you find exactly what you're looking for. Apart from giving you up-to-date phone numbers and addresses of local businesses across the state, we'll also give you driving directions to get there!</p>
                            </div>
                        </div>
                    </div>  
                     <div class="justify-content-center ">
                    
                        @if(!empty($categories))
                            @if($categories->count() > 4)
                                <div class="bg-w sp-100">
                                    <div class="container-fluid">
                                        <div  id="category-slider" class="owl-carousel owl-theme px-8">
                                            @foreach($categories as $category)
                                            {{-- class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30 " --}}
                                                <div >
                                                    <div class="ctg-item">
                                                        <div class="icon-box " style="background-image:url('{{ asset($category->bpath) }}'); width: 301px; height: 220px; justify-content: center; display: flex;">
                                                            <img src="{{ asset($category->path) }}"  style="width: 100px; height: 100px">
                                                            {{-- <i class="apparels"></i> --}}
                                                        </div>
                                                        <div class="content-box p-4 ">
                                                            <h5 class="mb-1">
                                                                <a href="{{ route('industries', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                                            </h5>
                                                            {{-- <p class="mb-0">35 Listing</p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            

                                            @endforeach
                                        </div>
                                        </div>
                                    </div>
                            @else
                            <div class="bg-w sp-100">
                                
                            <div class="row">
                                
                                @foreach($categories as $category)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                                        <div class="ctg-item">
                                            <div class="icon-box " style="background-image:url('{{ asset($category->bpath) }}'); width: 301px; height: 220px; justify-content: center; display: flex;">
                                                <img src="{{ asset($category->path) }}" style="height: 100px" >
                                            </div>
                                            <div class="content-box p-4">
                                                <h5 class="mb-1">
                                                    <a href="{{ route('industries', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                                </h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            </div>
                            @endif
                        @endif
                    </div>
                  
                </div>
            </section>
            
    {{--     </div>
    </div> --}}
    <!-- listings end -->


@include('front.layouts.footer')


                    