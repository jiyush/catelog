@extends('admin.layouts.app')
@section('title', 'Admin Industries')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Industries</h1>
            
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                      <form id="logout-form" action="{{ route('industry.list') }}" method="Get" >
                            @csrf
                            <div class="form-group row">
                              <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" id="name" name="filters[name]" value="{{ Request::old('filters[name]') }}" class="form-control form-control-user" id="" placeholder="Company Name">
                              </div>
                              <div class="col-sm-3 mb-3 mb-sm-0">
                                <select class="form-control form-control-user" name="filters[type]">
                                  <option  value="">Select Type</option>
                                  
                                  <option value="free"  @if( $filters['type'] == 'free') selected  @endif  >Free</option>
                                  <option value="paid" @if( $filters['type'] == 'paid') selected  @endif >Paid</option>
                                </select>
                                {{-- <input type="text" id="name" name="filters[name]" value="{{ Request::old('filters[name]') }}" class="form-control form-control-user" id="" placeholder="Company Name"> --}}
                              </div>
                              
                              <button  class="btn btn-warning">Search</button>
                              <a style="margin-left: 10px;" href="{{ route('industry.list') }}" class="btn btn-primary"> Reset</a>
                              <div class="float-right" style="margin-left: auto;">
                                <a href="{{ route('industry.add') }}"  class="btn btn-success btn-circle">
                                      <i class="fas fa-plus-circle"></i>
                                    </a>
                              </div>
                            </div>

                        </form>
                  
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Category</th>
                      <th>Phone</th>
                      <!-- <th>Category</th> -->
                      <th colspan="3">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($industries))
                        @foreach($industries as $ind)
                            <tr>
                                <td>{{ $ind->name }}</td>
                                <td>{{ $ind->email }}</td>
                                <td>{{ $ind->category_name }}</td>
                                <td>{{ $ind->phone }}</td>
                                <!-- <td>{{ $ind->email }}</td> -->
                                <td colspan="">
                                    <a href="{{ route('industry.view', ['id' => $ind->id]) }}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                        </span>
                                       <!--  <span class="text">View</span> -->
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('industry.edit', ['id' => $ind->id]) }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                        </span>
                                        <!-- <span class="text">Edit</span> -->
                                    </a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('industry.delete') }}">
                                        <input type="hidden" name="id" value="{{ $ind->id }}">
                                        @csrf
                                       <button href="#" class="btn btn-danger btn-icon-split specialButton">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-trash-alt"></i>
                                        </span>
                                        <!-- <span class="text">Delete</span> -->
                                      </button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
                {{ $industries->links() }}
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

@endsection

@section('externaljs')
<script>
        $(".specialButton").click(function(){
            return confirm("Do you want to delete this ?");
        });
    </script>
@endsection