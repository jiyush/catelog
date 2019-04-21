@extends('front.layouts.nav')
@section('content')
      <div class="site-blocks-cover" style="background-image: url({{ asset('front/images/industry1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
            
            <h1 class="mb-2 text-white w-75"><span class="font-weight-bold">Largest Industries</span> Details On The Site</h1>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Find A Industries</a>
                </li>
                
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="{{ route('industry.all') }}" method="GET">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" name="filters[name]" class="form-control" placeholder="Search">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="filters[category]" id="" class="form-control">
                            <option value="">Category</option>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" name="filters[address]" class="form-control form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
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
        <div class="row hosting col-md-12" >
          @if(!empty($categories))
            @foreach($categories as $category)
                <div class="align-items-center" style="border: 1px black ; margin: 20px;" >
                    <table>
                        <form action="{{ route('industry.all') }}" method="GET">
                        <tr>
                            <td>
                                <h2 class="h5">
                                    @csrf
                                    <input type="hidden" name="filters[category]" value="{{ $category->id }}">
                                  {{ $category->name }}
                                </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <button class="btn">
                                <img src="{{ asset($category->path) }}" height="50" width="100">
                              </button>
                            </td>
                        </tr>
                      </form>
                    </table>
                </div>
            @endforeach
          @endif
        </div>
        <div class="align-items-center" style="margin-left: 500px; margin-top: 50px;">
          <center>
            {{ $categories->links() }}
        </center>
        </div>
      </div>
    </div>
@endsection
    
    

    
    
    
    
 