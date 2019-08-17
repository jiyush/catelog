@extends('admin.layouts.app')
@section('title', 'Admin Inquires')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inquires</h1>
            
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                      <form id="logout-form" action="{{ route('inquiry.list') }}" method="Get" >
                            @csrf
                            <div class="form-group row">
                              <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" id="name" name="filters[name]" value="{{ Request::old('filters[name]') }}" class="form-control form-control-user" id="" placeholder="Company Name">
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
                      <th>Phone</th>
                      <th>Category</th>
                      <th>Address</th>
                      <th>Description</th>
                      <th>Web Site</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($inquires))
                        @foreach($inquires as $inq)
                            <tr>
                                <td>{{ $inq->name }}</td>
                                <td>{{ $inq->email }}</td>
                                <td>{{ $inq->phone }}</td>
                                <td>{{ $inq->category }}</td>
                                <td >
                                    {{ $inq->address }}
                                </td>
                                <td>
                                    {{ $inq->description }}
                                </td>
                                <td>
                                  {{ $inq->website }}
                                </td>
                                
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
                {{ $inquires->links() }}
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

@endsection

@section('externaljs')
@endsection