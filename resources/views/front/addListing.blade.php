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
    <!-- page-banner ends-->

    <!-- add-list start-->
    <section class="bg-w sp-100">
        <div class="container">
        <form class="listing-form" action="{{ route('listing.submit') }}" method="POST">
            @csrf
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        basic info
                    </h4>
                </div>
                <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <label>Industry Name</label>
                                <input type="text" id="name" name="indName" class="form-control" placeholder="Industry Name">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>category</label>
                                <select class="form-control custom-select" name="indCat" id="categories">
                                    <option>select categories</option>
                                    @if(!empty($categories))
                                    	@foreach($categories as $category)
                                    		<option value="{{ $category->name }}" >{{ $category->name }}</option>
                                    	@endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>keywords</label>
                                <input type="text" id="keywords" class="form-control" placeholder="Keywords Here">
                            </div>
                        </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        location
                    </h4>
                </div>
                <div class="col-12">
                    
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>address</label>
                                <input type="text" id="adress" name="street" class="form-control" placeholder="address here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>City</label>
                                <input type="text" id="adress" name="city" class="form-control" placeholder="City here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>state</label>
                                <input type="text" id="state" name="state" class="form-control" placeholder="State Here">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>zip code</label>
                                <input type="text" id="code" name="pincode" class="form-control" placeholder="Zip Here">
                            </div>
                        </div>
                    
                </div>
                {{-- <div class="col-12">
                    <div class="map mb-30">
                        <div id="theme-map"></div>
                    </div>
                </div> --}}
            </div>
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        details
                    </h4>
                </div>
                <div class="col-12">
                    
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>Products Description</label>
                                <textarea rows="10" name="description" class="form-control" placeholder="write here" id="comment"></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label>phone</label>
                                        <input type="text" name="phone" id="phn" class="form-control" placeholder="phone no">
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <label>e mail</label>
                                        <input type="text" name="email" id="mail" class="form-control" placeholder="e mail">
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <label>website</label>
                                        <input type="text" name="website" id="website" class="form-control" placeholder="website">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-6 col-12 mb-60">
                    <h4 class="title-sep3 mb-30">
                        gallery
                    </h4>
                    <div class="drop-file">
                        <a href="#" class="w-100">
                            <i class="far fa-plus-square"></i>
                            <p class="mb-0">Drop files here to upload</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-60">
                    <h4 class="title-sep3 mb-30">
                        cover image
                    </h4>
                    <div class="drop-file">
                        <a href="#" class="w-100">
                            <i class="far fa-plus-square"></i>
                            <p class="mb-0">Drop files here to upload</p>
                        </a>
                    </div>
                </div>
            </div>
             --}}
            
                
            
	            <div class="row">
	                <div class="col-12">
	                    <div class="listing-submit">
	                        <button type="submit" class="btn btn-one " style="background-color: #228ACA !important;color: #fff;">save listing</button>
	                    </div>
	                </div>
	            </div>
        	{{-- </div> --}}
    </form>
    </div>
    </section>
    <!-- add-list end -->
    

@include('front.layouts.footer')