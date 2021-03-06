@extends('admin.layouts.app')
@section('title', 'Admin Dashboard')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>
          <div class="row">
          	<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      	<a href="{{ route('industry.list') }}">
                      		Total Industries		
                      	</a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	@if(!empty($indCount))
                      		{{ $indCount }}
                      	@endif
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-building fa-2x"></i>
                    </div>
                  </div>
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
          </div>
        </div>


        <!-- /.container-fluid -->

@endsection