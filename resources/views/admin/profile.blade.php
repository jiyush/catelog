@extends('admin.layouts.app')
@section('title', 'Admin Profile')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
          {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            
          </div> --}}
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('category.list') }}"> </a> Change Password            <!-- <div class="float-right">
                  <a href="#" class="btn btn-success btn-circle">
                        <i class="fas fa-plus-circle"></i>
                      </a>
              </div> -->
            </h5>
            </div>
            <div class="card-body">
              <form action="{{ route('user.password') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="name">Old Password</label>
                        <input type="password" id="name" name="old_password" class="form-control form-control-user" id="" placeholder="Password" required>
                      </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="name">New Password</label>
                    <input type="password" id="name" name="password" class="form-control form-control-user" id="" placeholder="Password" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="email">Confirm New Password</label>
                    <input type="password" id="email" name="password_confirm" class="form-control form-control-user" id="" placeholder="Confirm Password" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <button  class="btn btn-primary">Update</button>
                  </div>
                </div>
             
                
              </form>
              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
          {{-- <div class="row">
          	<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
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
                    
                    
                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                      Add
                    </a>
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      	<a href="{{ route('category.list') }}">
                      		Total Categories		
                      	</a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	@if(!empty($catCount))
                      		{{ $catCount }}
                      	@endif
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-list-alt fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>


        <!-- /.container-fluid -->

@endsection