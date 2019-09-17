@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Subcategories
              <div class="float-right">
	              <a href="{{ route('sub.add') }}" class="btn btn-success btn-circle">
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
                      <th>Category</th>
                      <th >Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($subcategories))
                        @foreach($subcategories as $sub)
                            <tr>
                                <td>{{ $sub->name }}</td>
                                <td>
                                  {{ $sub->catName }}
                                </td>
                                <td>
                                    <a href="{{ route('sub.edit', ['id' => $sub->id]) }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                </td>
                                {{-- <td> --}}
                                    {{-- <form method="post" action="{{ route('sub.delete') }}">
                                        <input type="hidden" name="id" value="{{ $sub->id }}">
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
                @if(!empty($subcategories))
                  {{  $subcategories->links() }}
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