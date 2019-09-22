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
                            <a href="{{ route('root') }}">Home</a>
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
        <form class="listing-form" action="{{ route('listing.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-30">
                <div class="col-12">
                    <h4 class="title-sep3 mb-30">
                        Listing info
                    </h4>
                </div>
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <input type="hidden" name="type" value="free">
                <input type="hidden" name="status" value="0">
                <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <label>Business Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ Request::old('name') }}" placeholder="Industry Name" required>
                            </div>
                            <div class="col-md-3 col-12">
                                <label>category</label>
                                <select class="form-control custom-select" name="category" id="category" required>
                                    <option value="">select categories</option>
                                    @if(!empty($categories))
                                    	@foreach($categories as $category)
                                    		<option value="{{ $category->id }}" >{{ $category->name }}</option>
                                    	@endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-3 col-12">
                                <label>Sub Categories</label>
                                <select class="form-control custom-select" name="subcategory" id="subcategory" required>
                                    <option value="">select Sub Categories</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Description</label>
                                <input type="text" name="description" id="keywords" class="form-control" placeholder="Keywords Here" value="{{ Request::old('description') }}" required>
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
                                <input type="text" id="adress" name="street" class="form-control" value="{{ Request::old('street') }}" placeholder="address here" required> 
                            </div>
                            <div class="col-md-6 col-12">
                                <label>City</label>
                                <select class="form-control" name="city" id="city" required>
                                    <option value="" > Select City</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label>state</label>
                                <select class="form-control" name="state" id="state" required>
                                    <option value="" required> Select State</option>
                                    @if(!empty($state))
                                        @foreach($state as $s)
                                            <option value="{{ $s->id }}" >{{ $s->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                {{-- <input type="text" id="state" name="state" class="form-control" value="{{ Request::old('state') }}" placeholder="State Here" required> --}}
                            </div>
                            <div class="col-md-6 col-12">
                                <label>zip code</label>
                                <input type="text" id="code" name="pincode" class="form-control" placeholder="Zip Here" value="{{ Request::old('pincode') }}" required>
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
                                <textarea rows="10" name="products" class="form-control" placeholder="write here" id="comment" value="{{ Request::old('products') }}" required></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label>phone</label>
                                        <input type="text" name="phone" id="phn" class="form-control" value="{{ Request::old('phone') }}" placeholder="phone no" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <label>e mail</label>
                                        <input type="text" name="email" id="mail" class="form-control" value="{{ Request::old('email') }}" placeholder="e mail" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <label>website</label>
                                        <input type="text" name="website" value="{{ Request::old('website') }}" id="website" class="form-control" placeholder="website" >
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>Upload Images</label>
                                <input type="file"  name="image[]" multiple >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="checkbox"  name="term" >
                                <label style="color: black !important;">i Agree to all term & Conditions</label>
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

    $("#state").change(function() {
        var id = this.value;
        var path = '{{route('city')}}'
        $.ajax({
           type:'GET',
           url : path+'/'+id,
           data: '',
           success:function(data) {
              $("#city").attr('disabled', false);
              $("#city option").remove();
              $.each(data,function(key, value)
              {
                // console.log('key', key);
                // console.log('value', value.id);
                  $("#city").append('<option value=' + value.id + '>' + value.name + '</option>');
              });
              console.log(data);
           }
        });
        // console.log(path);
    });


  });
</script>    
