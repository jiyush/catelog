@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('apruval.list') }}">Apruve Industry </a> / Details
             
          </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>{{ $industry->name }}</th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>{{ $industry->email }}</th>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <th>{{ $industry->phone }}</th>
                    </tr> 
                    <tr>
                        <th>Listing Type</th>
                        <th>{{ $industry->type }}</th>
                    </tr> 
                    <tr>
                        <th>Website</th>
                        <th>{{ $industry->website }}</th>
                    </tr> 
                    <tr>
                        <th>Category</th>
                        <th>{{ $category->name }}</th>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <th>{{ $industry->address }}</th>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <th>{{ $industry->description }}</th>
                    </tr>
                    <tr>
                        <th>Products</th>
                        <th>{{ $industry->products }}</th>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <th>
                           @if(!empty($images))
                                @foreach($images as $image)
                                    <div class="list-slide" >
                                        <img style="height: 200px; width: 400px;" src="{{ asset('/storage/industries/'.$image->path) }}" alt="listing">
                                    </div>
                                @endforeach
                            @endif 
                        </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection