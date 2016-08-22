@extends('header')

@section('content')
@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message') }}
	</div>
@endif
<div class="container">
	<form id="form" action="{{ url('postaddcategories') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="categoriesName">Add Catgories</label>
			<input type="text" class="form-control" id="categoriesName" placeholder="Categories Name" name="categoriesName" required>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
@endsection