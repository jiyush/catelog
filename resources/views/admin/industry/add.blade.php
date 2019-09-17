@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('industry.list') }}"> Industry </a> / Add
             
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
              <form action="{{ route('industry.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="name">Company Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-user" id="" placeholder="Company Name" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Company Email</label>
                    <input type="text" id="email" name="email" class="form-control form-control-user" id="" placeholder="Company Email" required>
                  </div>
                </div>
              
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="category">Company Category</label>
                    <select id="category" name="category" class="form-control form-control-user" required>
                      <option>Select Category</option>
                      @if(!empty($categories))
                          @foreach($categories as $cat)
                              <option value="{{ $cat->id }}" >{{ $cat->name }}</option>
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="category">Company SubCategory</label>
                    <select id="subcategory" name="subcategory" class="form-control form-control-user" required>
                      <option>Select  SubCategory</option>
                      {{-- @if(!empty($sub))
                          @foreach($sub as $s)
                              <option value="{{ $s->id }}" >{{ $s->name }}</option>
                          @endforeach
                      @endif --}}
                    </select>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="phone">Company Phone</label>
                    <input type="number" name="phone" class="form-control form-control-user" id="phone" placeholder="Company Phone" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="street" >Address</label>
                    <input type="text"  id="street" name="street" class="form-control form-control-user" id="" placeholder="Street" required>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    
                    <input type="text"  id="street" name="city"  class="form-control form-control-user" id="" placeholder="City" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    
                    <input type="text"  id="street" name="state" class="form-control form-control-user" id="" placeholder="State" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Products</label>
                    <textarea name="products" class="form-control form-control-user" required></textarea>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Description</label>
                    <textarea name="description" class="form-control form-control-user" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="type">Listing Type</label>
                    <select id="type" name="type" class="form-control form-control-user" required>
                          <option selected value="">Select Type</option>
                          <option value="free">Free</option>
                          <option value="paid">Paid</option>
                    </select>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Website</label>
                    <input type="text" class="form-control" name="website"  >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="products" >Image</label>
                    <input type="file"  name="image[]" multiple>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Add</button>
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
  });
</script>
@endsection
@endsection