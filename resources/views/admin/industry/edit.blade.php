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
              <form action="{{ route('industry.update') }}" method="POST" >
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
                  <div class="col-sm-6 mb-3 mb-sm-0">
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
                  <div class="col-sm-6 mb-3 mb-sm-0">
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
                    
                    <input type="text"  id="street" name="city" value="{{ $industry->city }}"  class="form-control form-control-user" id="" placeholder="City">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    
                    <input type="text"  id="street" name="state" value="{{ $industry->state }}" class="form-control form-control-user" id="" placeholder="State">
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
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Update</button>
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection