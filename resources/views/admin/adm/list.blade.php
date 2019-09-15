@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Categories
              <div class="float-right">
	              <a href="{{ route('category.add') }}" class="btn btn-success btn-circle">
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
                      <th>Logo</th>
                      <th>Background Images</th>
                      <th >Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($categories))
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                  <img src="{{ asset($category->path) }}" height="50" width="100">
                                </td>
                                <td>
                                  <img src="{{ asset($category->bpath) }}" height="50" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                </td>
                                {{-- <td> --}}
                                    {{-- <form method="post" action="{{ route('category.delete') }}">
                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                        @csrf
                                       <button href="#" class="btn btn-danger btn-icon-split specialButton">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-trash-alt"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                      </button>
                                    </form> --}}
                                {{-- </td> --}}
                                
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
                @if(!empty($categories))
                  {{  $categories->links() }}
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
    </script>
@endsection