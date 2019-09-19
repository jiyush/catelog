@include('front.layouts.head')
@include('front.layouts.header')
    
    <!-- banner start -->
    <section class="main-banner-2">
        <div class="banner-image2">
            <!-- <div class="tilt-anim" data-tilt> -->
                <div class="banner-content">
                    
                    <h2>Find Any Thing In Your City</h2>
                </div>
            <!-- </div> -->
            
        </div>
    </section>
    <!-- banner end -->

    <!-- listing start -->
    <section class="bg-w tri-bg sp-100-70 o-hide">
        <div class="container">
            {{-- <div class="list-category-slider owl-carousel owl-theme mb-60">
                @if(!empty($categories))
                    @foreach($categories as $category)
                        <div class="list-items2 btn-anim">
                            <div class="icon-box"  >
                                <img src="{{ asset($category->path) }}" style="height: 100px" >
                            </div>
                            <h5 class="mb-0 mt-3">
                                <a href="#">{{ $category->name }}</a>
                            </h5>
                        </div>
                    @endforeach
                @endif
                
            </div> --}}
            
            <form method="get" action="{{ route('industries') }}">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <input type="text" name="filters[name]" 
                            @if(!empty($filters['name']))
                                value="{{$filters['name']}}"        
                            @endif
                             class="form-control" style="border-radius: 25px;" placeholder="Search by industy">
                        </div>
                        {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="input-wrap">
                        
                                <input type="text" name="filters[products]" 
                                @if(!empty($filters['products']))
                                    value="{{$filters['products']}}"        
                                @endif
                                class="form-control" style="border-radius: 25px;"  placeholder="Search By Produsts">
                            </div>
                        </div> --}}
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <select class="form-control" name="category" id="category" style="border-radius: 25px;" required>
                                <option value="">all categories</option>
                                @if(!empty($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <select class="form-control" name="subcategory" id="subcategory" style="border-radius: 25px;" required>
                                <option value="">Subcategory</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <button type="submit" class="btn btn-one btn-anim w-100" style="background-color: #228ACA !important;color: #fff;">
                                filter now</button>
                        </div>
                    </div>
                </form>
            {{-- <form method="get" action="{{ route('industry.all') }}">
            <div class="row justify-content-md-center">
                    <div class="col-lg-3 col-md-3">
                        <input type="text" name="filters[name]"  class="form-control"  placeholder="Search by industy">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <input type="text" name="filters[address]" class="form-control"  placeholder="Search By Location">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control custom-select" name="filters[category]" id="service2">
                            <option value="">all categories</option>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>

                    </div>
                    <div class="col-lg-2 col-md-2">
                        {{-- <button type="submit" class="btn btn-one btn-anim br-5 w-100 mb-30">
                            <i class="fa fa-search"></i> search</button> --}}
                          {{--   <button type="submit" class="btn btn-one" style="background-color: #228ACA !important;color: #fff;">
                            <i class="fa fa-search"></i> search</button>
                    </div>
            </div> --}}
        {{-- </form>  --}}
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
                        <h2 class="count c-theme" data-count="{{ $count['indCount'] }}">{{ $count['indCount'] }}</h2>
                        <p>total listing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <h2 class="count c-theme" data-count="{{ $count['paidCount'] }}">0</h2>
                        <p>Certified Listing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">

                            <i class="flaticon-team"></i>
                        </div>
                        <h2 class="count c-theme" data-count="{{ $count['catCount'] }}">0</h2>
                        <p>Categories</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="flaticon-appointment"></i>
                        </div>
                        <h2 class="count c-theme" data-count="4">0</h2>
                        <p>Packages</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter ends -->

    <!-- features start-->
    <section class="features sp-100-70 bg-w">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            Why We Are The Best
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                        <p>
                            Get Listed with us and improve your local marketing and be a part of our family to get everything in your pocket!
                            Promote your business online, securely and conveniently from the comfort of your home or office
                            in leading local business search engine and get the J Curve in your business!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="feature-item type-2">
                        <div class="icon-box">
                            <i class="flaticon-rising"></i>
                        </div>
                        <h5>our vision</h5>
                        <p>To provide fast, free & reliable information to our users and connect buyers to sellers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="feature-item type-2" style="width: 350px; height: 237px;">
                        <div class="icon-box">
                            <i class="flaticon-list"></i>
                        </div>
                        <h5>mission</h5>
                        <p>To organise all genuine information and make it useful in growing your business.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="feature-item type-2">
                        <div class="icon-box">
                            <i class="flaticon-find-1"></i>
                        </div>
                        <h5>find your listing</h5>
                        <p>If you are thinking of expanding your business; get registered for FREE and Updrade to Premium any time!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->
    
    

   


    <!-- cta-one start-->
   
    <!-- cta-one end -->
    

    <!-- app start-->
    <div class="app-section bg-red tri-bg-w sp-100">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6 d-none d-lg-block">
                    <div class="app-img mr-5">
                        <img src="assets/img/home/app-phn.png" alt="lister-app">
                    </div>
                </div> --}}
                <div class="col-lg-6">
                    <div class="app-content text-lg-left text-center">
                        <h3>Coming Soon on Android!</h3>
                        <p class="mb-4">We are planning to launch Android App soon so that we can give
our service more faster and easier!</p>
                        <div class="app-icon">
                            <a href="#" class="mr-4">
                                <img src="assets/img/home/google-play.png" alt="google-play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- app end -->
@include('front.layouts.footer')
<script type="text/javascript">
  $(document).ready(function(){
      $("#category").change(function() {
        var id = this.value;
        var path = '{{route('getsub')}}'
        $.ajax({
           type:'GET',
           url : path+'/'+id,
           data: '',
           success:function(data) {
              $("#subcategory").attr('disabled', false);
              $("#subcategory option").remove();
              $.each(data,function(key, value)
              {
                // console.log('key', key);
                // console.log('value', value.id);
                  $("#subcategory").append('<option value=' + value.id + '>' + value.name + '</option>');
              });
              console.log(data);
           }
        });
        // console.log(path);
    });
  });
</script>    
   