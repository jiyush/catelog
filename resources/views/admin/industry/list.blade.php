@extends('admin.layouts.app')
@section('title', 'Admin Industries')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Industries
              <div class="float-right">
	              <a href="{{ route('industry.add') }}" class="btn btn-success btn-circle">
	                    <i class="fas fa-plus-circle"></i>
	                  </a>
              </div>
          </h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
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
                                <td>{{ $ind->phone }}</td>
                                <!-- <td>{{ $ind->category }}</td> -->
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