@extends('header')

@section('content')
<div class="container">
	<form action="{{ url('updateProduct/'.$id) }}" method="post" enctype="multipart/form-data">
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
			<input type="text" class="form-control" id="productName" value="{{$allUsers->productName}}" name="productName" required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" value="{{$allUsers->description}}" name="description" required>
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" class="form-control" id="price" value="{{$allUsers->price}}" name="price" required>
		</div>
		<div class="form-group">
			<label for="Image">Image</label>
			<input type="file" id="Image" name="Image">
		</div>
		<img src="{{ asset('public/images/'.$allUsers->Image) }}">
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
@endsection