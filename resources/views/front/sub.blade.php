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
                {{-- <form method="get" action="{{ route('industries', ['id' => $categories->id]) }}">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <input type="text" name="filters[name]" 
                            @if(!empty($filters['name']))
                                value="{{$filters['name']}}"        
                            @endif
                             class="form-control"  placeholder="Search by industy">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                           
                                <input type="text" name="filters[products]" 
                                @if(!empty($filters['products']))
                                    value="{{$filters['products']}}"        
                                @endif
                                class="form-control"  placeholder="Search By Produsts">
                           
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
                </form> --}}
            </div>
            <div class="justify-content-center">
                
                    <h3>Sub Categories</h3>
            </div>
              
            {{-- <div class="listing-list-view show-list"> --}}
            <div class="list-grid-view show-list">
                <div class="row">
                    {{-- Industry Listinf start --}}
                    @if($subcategory->count() > 0)
                        @foreach($subcategory as $sub)
    

                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="listing-item p-2">
                                    
                                    <div class="list-content p-2">
                                        <h5 class="mb-2">
                                            <a href="{{ route('industries', ['id' => $sub->id]) }}">{{ $sub->name }}</a>
                                        </h5>
                                        {{-- <p>{{ $industry->address }}</p> --}}
                                        
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @else
                    <h3 class="text-center">No sub category found</h3>

                    @endif
                    
            
                </div>
            </div>
            
        </div>
    </div>
    <!-- listings end -->

@include('front.layouts.footer')