@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('category.list') }}"> Categories </a> / Add
              <!-- <div class="float-right">
	              <a href="#" class="btn btn-success btn-circle">
	                    <i class="fas fa-plus-circle"></i>
	                  </a>
              </div> -->
          </h5>
            </div>
            <div class="card-body">
              <form action="{{ route('category.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="category" class="form-control form-control-user"  placeholder="Category Name">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" name="category_logo"   placeholder="Category Name">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Add</button>
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