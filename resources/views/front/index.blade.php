<html lang="en">
  <head>
    <title>Vapi Industries</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('front/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    
    
    <link rel="stylesheet" href="{{ asset('front/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fl-bigmug-line.css') }}">
  
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/flaticon/font/flaticon.css') }}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Vapi<strong>Industries</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                {{-- <li class="has-children">
                  <a href="category.html">Category</a>
                  <ul class="dropdown">
                    @if(!empty($categories))
                        @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    @endif
                    
                  </ul>
                </li> --}}
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="new-post.html"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Add industries</span></a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <!-- <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"> -->
      <div class="site-blocks-cover" style="background-image: url({{ asset('front/images/industry1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
            <!-- <h1 class="mb-2 text-black w-75"><span class="font-weight-bold">Largest Job</span> Site On The Net</h1> -->
            <h1 class="mb-2 text-white w-75"><span class="font-weight-bold">Largest Industries</span> Details On The Site</h1>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Find A Industries</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">Find A Candidate</a>
                </li> -->
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Category</option>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                            {{-- <option value="fulltime">Full Time</option>
                            <option value="fulltime">Part Time</option>
                            <option value="freelance">Freelance</option>
                            <option value="internship">Internship</option>
                            <option value="internship">Termporary</option> --}}
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="eg. Carl Smith">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Category</option>
                            <option value="fulltime">Full Time</option>
                            <option value="fulltime">Part Time</option>
                            <option value="freelance">Freelance</option>
                            <option value="internship">Internship</option>
                            <option value="internship">Termporary</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    

   

    

    

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Industries  <strong>Category</strong> </h2>
          </div>
        </div>
        <div class="row hosting" >
          @if(!empty($categories))
            @foreach($categories as $category)
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-4 d-flex align-items-center" >
                    <table>
                        <tr>
                            <td>
                                <h2 class="h5">{{ $category->name }}</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset($category->path) }}" height="50" width="100">
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
          @endif
          {{-- <div class="col-md-4 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                </div>
                <h2 class="h5">ENGINEERING</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> --}}
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-big104"></span>
                </div>
                <h2 class="h5">ELECTRICAL-ELECTRONICS-INSTR</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> -->
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
                </div>
                <h2 class="h5">Transport</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> -->

          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">

            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
                </div>
                <h2 class="h5">TextTile</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> -->
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-clipboard68"></span>
                </div>
                <h2 class="h5">PAPER & PACKAGING</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> -->
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5">CHEMICALS - DYES - PHARMACEUTICALS</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div> -->

        </div>
      
      </div>
    </div>

    
    

    
    
    
    
  </div>

  <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('front/js/popper.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('front/js/aos.js') }}"></script>
  <script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>

  
 <!--  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
 -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="{{ asset('front/js/main.js') }}"></script>
    
  </body>
</html>