@include('front.layouts.head')
@include('front.layouts.header')

<!-- page-banner start-->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Listing Detail</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('industry.all') }}">Category</a>
                        </li>
                        <li>
                            <a href="{{ route('industries', ['id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                        <li>
                            <span class="active">Listing Detail</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}
     <!-- listing slider start-->
    <div class="bg-w sp-100">
        <div class="container-fluid">
            <div class="listing-detail-slider owl-carousel owl-theme px-4">
                @if(!empty($images))
                    @foreach($images as $image)
                        <div class="list-slide">
                            <img src="{{ asset('/storage/industries/'.$image->path) }}" alt="listing">
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
    <!-- listing slider end -->

    <div class="bg-w sp-100 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="listing-detail mb-60">
                        <h3 class="mb-30">{{ $industry->name }}</h3>
                        <div class="abt-listing">
                            <ul class="ctg-info centering justify-content-start">
                                <li>
                                    <a target="_blank" href="http://maps.google.com/?q={{$industry->address}}">
                                        <i class="fa fa-map-marker-alt mr-2"></i>
                                    {{ $industry->address }}</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">
                                        <i class="fa fa-phone mr-2"></i> {{ $industry->phone }}</a>
                                </li>
                                
                                <li class="my-1">
                                    <a href="#">
                                        <i class="fa fa-envelope mr-2"></i> {{ $industry->email }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-60">
                        <h4 class="title-sep3 mb-30">
                            description
                        </h4>
                        <p>{{ $industry->description }}</p>
                    </div>
                    <div class="mb-60">
                        <h4 class="title-sep3 mb-30">
                            Products
                        </h4>
                        <p>{{ $industry->products }}</p>
                    </div>
                    
                    
                    
                    
                    
                    <div class="mb-0">
                        <h4 class="title-sep3 mb-30">
                            add review
                        </h4>
                        
                        <form class="comment-form" id="commentform" method="post" action="#">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <span class="fa fa-user"></span>
                                    <input type="text" id="name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <span class="fa fa-envelope"></span>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="Ented email" id="email">
                                </div>
                                <div class="col-12">
                                    <textarea rows="5" name="comment" class="form-control" placeholder="Your Message" id="comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-one btn-anim" id="submit" name="submit">
                                        <i class="fa fa-paper-plane"></i> submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <aside class="sidebar">
                        
                        <div class="widget">
                            <h4 class="title-sep2 mb-30">business info</h4>
                            <ul class="contact-info mt-4">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    {{ $industry->phone }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    {{ $industry->email }}
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    {{ $industry->address }}
                                </li>
                                <li>
                                    <i class="fa fa-globe-asia"></i>
                                    {{ $industry->website }}
                                </li>
                            </ul>
                            
                        </div>
                        
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>

    

@include('front.layouts.footer')