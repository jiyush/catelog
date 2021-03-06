@include('front.layouts.head')
@include('front.layouts.header')

<!-- page-banner start-->
    {{-- <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>{{ $categories->name }}</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('industry.all') }}">Category</a>
                        </li>
                        <li>
                            <span class="active">{{ $categories->name }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- end banner --}}

    <!-- listings start-->
    <div class="bg-w sp-100">
        <div class="container">
            <div class="filter-box mb-30">
                <form method="get" action="{{ route('industries', ['id' => $categories->id]) }}">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <input type="text" name="filters[name]" 
                            @if(!empty($filters['name']))
                                value="{{$filters['name']}}"        
                            @endif
                             class="form-control"  placeholder="Search by industy">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            {{-- <div class="input-wrap"> --}}
                                {{-- <i class="fa fa-crosshairs"></i> --}}
                                <input type="text" name="filters[products]" 
                                @if(!empty($filters['products']))
                                    value="{{$filters['products']}}"        
                                @endif
                                class="form-control"  placeholder="Search By Produsts">
                            {{-- </div> --}}
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
                            <button type="submit" class="btn btn-one btn-anim w-100" style="background-color: #228ACA !important;color: #fff;">
                                filter now</button>
                        </div>
                    </div>
                </form>
            </div>
              
            {{-- <div class="listing-list-view show-list"> --}}
            <div class="list-grid-view show-list">
                <div class="row">
                    {{-- Industry Listinf start --}}

                    @if($industries->count() > 0)
                        @foreach($industries as $industry)
                            {{-- <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="listing-item p-2" >
                                   
                                        <div class="img-holder">
                                            <img src="{{ asset($industry->image) }}" alt="list">
                                        </div>
                                   
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                Category
                                            </li>
                                            <li>
                                                {{ $industry->category_name }}
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="listing-detail.html">{{ $industry->name }}</a>
                                        </h5>
                                        <div style="height: 130px">
                                            <p>Produsts: {{ $industry->products }}</p>
                                            <p>Address: {{ $industry->address }}</p>
                                        </div>
                                        <ul  class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-envelope mr-2"></i>{{ $industry->email }}</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>{{ $industry->phone }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    <div class="img-holder">
                                        <a href="{{ route('industry', ['id' => $industry->id]) }}">
                                        @if(!empty($industry->path))
                                            <img src="{{ asset('/storage/industries/'.$industry->path) }}" alt="list">
                                        @else
                                            <img src="{{ asset('/images/jcurve3.png') }}" alt="list">
                                        @endif
                                        </a>
                                        <div class="rate-like centering justify-content-between">
                                            
                                        </div>
                                    </div>
                                    <div class="list-content p-2">
                                        <ul class="ctg-info py-2 mb-3">
                                            <li>
                                                <a href="#">
                                                    Category</a>
                                            </li>
                                            <li>
                                                <span class="c-theme"> 
                                                    
                                                        {{ $categories->name }}
                                                    
                                                </span>
                                            </li>
                                        </ul>
                                        <h5 class="mb-2">
                                            <a href="{{ route('industry', ['id' => $industry->id]) }}">{{ $industry->name }}</a>
                                        </h5>
                                        {{-- <p>{{ $industry->address }}</p> --}}
                                        <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-envelope mr-2"></i>
                                                    {{ $industry->email }}
                                                </a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="#">
                                                    <i class="fa fa-phone mr-2"></i>{{ $industry->phone }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @else
                    <h3 class="text-center">No Industries found</h3>

                    @endif
                    
                    {{-- pagination --}}
                    <div class="col-12 text-center mt-30">
                        {{ $industries->links() }}
                        {{-- <a href="#" class="btn btn-one btn-anim" style="background-color: #228ACA !important;color: #fff;">load more</a> --}}
                    </div>
                    {{-- end pagination --}}
                    {{-- Industry Listinf end --}}
                </div>
            </div>
            
        </div>
    </div>
    <!-- listings end -->

@include('front.layouts.footer')