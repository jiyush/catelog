@extends('admin.layouts.app')
@section('title', 'Admin Categories')


@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary"> <a href="{{ route('industry.list') }}"> Industry </a> / Images



              {{-- <div class="float-right">
              <a href="{{ route('image.list', ['id' => $industry->id]) }}">Manage Images</a>
              </div> --}}
             
          </h5>
            <div class="float-right">
                  <form action="{{ route('image.add', ['id' => $industry->id]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{ $industry->id }}">
                      <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="products" >Image</label>
                        <input type="file"  name="image[]" multiple>
                      </div>
                    </div>
                      <div class="form-group row">
                          <div class="col-sm-6">
                            <button  class="btn btn-primary">Add</button>
                          </div>
                        </div>
                  </form>
              </div>  
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   @if(!empty($images))
                        @foreach($images as $image)
                        <tr>
                            <th>
                                        <div class="list-slide" >
                                            <img style="height: 200px; width: 400px;" src="{{ asset('/storage/industries/'.$image->path) }}" alt="listing">
                                        </div>
                            </th>
                            <th>
                                <form method="post" action="{{ route('image.remove', ['id' => $industry->id]) }}">
                                        <input type="hidden" name="id" value="{{ $industry->id }}">
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <input type="hidden" name="path" value="{{ $image->path }}">
                                        @csrf
                                       <button href="#" class="btn btn-danger btn-icon-split specialButton">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-trash-alt"></i>
                                        Delete
                                        </span>
                                        <!-- <span class="text">Delete</span> -->
                                      </button>
                                    </form>
                            </th>
                        </tr>
                        @endforeach
                    @endif 
                  </thead>
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
            return confirm("Do you want to delete this Image?");
        });
    </script>
@endsection