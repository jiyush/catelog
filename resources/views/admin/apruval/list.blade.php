@extends('admin.layouts.app')
@section('title', 'Admin Industries')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Apruve Industries</h1>
            
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                                        
              
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
                                    <a href="{{ route('apruval.show', ['id' => $ind->id]) }}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                        </span>
                                       <!--  <span class="text">View</span> -->
                                    </a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('apruval.add', ['id' => $ind->id]) }}">
                                        <input type="hidden" name="id" value="{{ $ind->id }}">
                                        @csrf
                                       <button href="#" class="btn btn-danger btn-icon-split specialButtonadd">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                        </span>
                                        <!-- <span class="text">Delete</span> -->
                                      </button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('industry.delete') }}">
                                        <input type="hidden" name="id" value="{{ $ind->id }}">
                                        @csrf
                                       <button href="#" class="btn btn-danger btn-icon-split specialButton">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-times-circle"></i>
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
                @if(!empty($industries))
                {{ $industries->links() }}
                @endif
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
        $(".specialButtonadd").click(function(){
            return confirm("Do you want to Add this ?");
        });
    </script>
@endsection