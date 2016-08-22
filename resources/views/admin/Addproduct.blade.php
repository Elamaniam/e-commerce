@extends('header')

@section('content')
@if(Session::has('message'))
	<div class="alert alert-success">
		{{ Session::get('message') }}
	</div>
@endif
<div class="container">
	<form id="form" action="{{ url('postaddproduct') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="dropdown">
			<label>Catgories Name:</label>
	  	 	<select name="categories_id">
	  	 		@foreach($categories as $categorie)
	  	 			<option value="{{ $categorie->id }}">{{ $categorie->categoriesName }}</option>
		        @endforeach
		    	
		 	</select>
		</div>
		<div class="form-group">
			<label for="productName">Product Name</label>
			<input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" class="form-control" id="price" placeholder="Price" name="price" required>
		</div>
		<div class="form-group">
			<label for="Image">Image</label>
			<input type="file" id="Image" name="Image" required>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
@endsection