@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('sub.list') }}"> Categories </a> / Edit
              <!-- <div class="float-right">
	              <a href="#" class="btn btn-success btn-circle">
	                    <i class="fas fa-plus-circle"></i>
	                  </a>
              </div> -->
          </h5>
            </div>
            <div class="card-body">
              <form action="{{ route('sub.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $subcategory->id }}">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="name" value="{{ $subcategory->name }}" class="form-control form-control-user"  placeholder="Category Name">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" name="category_id">
                      <option value="">Select</option>
                      @if(!empty($categories))
                          @foreach($categories as $category)
                              @if($category->id === $subcategory->category_id)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                              @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endif
                          @endforeach
                      @endif
                    </select>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Update</button>
                  </div>
                </div>
                
                
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Add
                </a> -->
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection