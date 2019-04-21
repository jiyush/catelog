@extends('front.layouts.nav')

@section('content')
<div class="col-md-10" style="margin-left: 120px; " >
	@if($industries->count() > 0)
		@foreach($industries as $ind)
			<div class="card col-md-12" style="margin-bottom: 10px;">
				 <div class="card-header">
				 	<h4>{{  $ind->name }}</h4>
				 </div>
				 <div class="card-body">
				 	<table class="table">
				 		<tr>
				 			<td>Address:-</td>
				 			<td>{{ $ind->address }}</td>
				 		</tr>
				 		<tr>
				 			<td>Products:- </td>
				 			<td>{{ $ind->products }}</td>
				 		</tr>
				 		<tr>
				 			<td>Description:- </td>
				 			<td> {{  $ind->description }} </td>
				 		</tr>
				 	</table>
				 	
				 </div>	
			</div>
		@endforeach
	@else
		<div class="card">
			<div class="card-header">
				<h3>No Record Found</h3>
				
			</div>
			
		</div>
	@endif
</div>
@endsection