@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('industry.list') }}"> Industry </a> / Edit
             
          </h5>
            </div>
            <div class="card-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="{{ route('industry.update') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="id" value="{{ $industry->id }}">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="name">Company Name</label>
                    <input type="text" id="name" name="name" value="{{ $industry->name }}" class="form-control form-control-user" id="" placeholder="Company Name">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Company Email</label>
                    <input type="text" id="email" name="email" value="{{ $industry->email }}" class="form-control form-control-user" id="" placeholder="Company Name">
                  </div>
                </div>
              
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="category">Company Category</label>
                    <select id="category" name="category" class="form-control form-control-user">
                      <option>Select Category</option>
                      @if(!empty($categories))
                          @foreach($categories as $cat)
                              @if($cat->id == $category->id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                              @else
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                              @endif
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="category">Company SubCategory</label>
                    <select id="subcategory" name="subcategory" class="form-control form-control-user">
                      <option>Select SubCategory</option>
                      @if(!empty($sub))
                          @foreach($sub as $s)
                              @if($s->id == $industry->subcategory)
                                <option value="{{ $s->id }}" selected>{{ $s->name }}</option>
                              @else
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                              @endif
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="phone">Company Phone</label>
                    <input type="number" name="phone" value="{{ $industry->phone }}" class="form-control form-control-user" id="phone" placeholder="Company Phone">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="street" >Address</label>
                    <input type="text"  id="street" name="street" value="{{ $industry->street }}" class="form-control form-control-user" id="" placeholder="Street">
                  </div>
                  
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    
                    <select class="form-control" name="state" id="state">
                        <option value="" required> Select State</option>
                        @if(!empty($state))
                            @foreach($state as $s)
                              @if($s->id == $industry->state)
                                <option value="{{ $s->id }}" selected>{{ $s->name }}</option>
                              @else
                                <option value="{{ $s->id }}" >{{ $s->name }}</option>
                              @endif
                            @endforeach
                        @endif
                    </select>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    
                    <select class="form-control" name="city" id="city" required>
                          <option value=""> Select City</option>
                          @if(!empty($city))
                            @foreach($city as $c)
                              @if($c->id == $industry->city)
                                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                              @else
                                <option value="{{ $c->id }}" >{{ $c->name }}</option>
                              @endif
                            @endforeach
                          @endif              
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Products</label>
                    <textarea name="products" class="form-control form-control-user">{{$industry->products}}</textarea>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Description</label>
                    <textarea name="description" class="form-control form-control-user">{{$industry->description}}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="type">Listing Type</label>
                    <select id="type" name="type" class="form-control form-control-user" required>
                          <option selected value="">Select Type</option>
                          <option value="free" {{ $industry->type = 'free' ? 'selected' : ''  }}>Free</option>
                          <option value="paid" {{ $industry->type = 'paid' ? 'selected' : ''  }}>Paid</option>
                    </select>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Website</label>
                    <input type="text" value="{{ $industry->website }}" class="form-control" name="website"  >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Image</label>
                    <input type="file" name="image">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Update</button>
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@section('externaljs')
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
@endsection
@endsection