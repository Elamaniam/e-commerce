@extends('header')

@section('content')
@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message') }}
	</div>
@endif
	@if(auth()->check() && auth()->user()->name)
		<p class="alert alert-info">
			Hi {{ auth()->user()->name }}
		</p>
		@if($allUsers->all() == null)
			<div class="alert alert-success">
				<p>No data in the database</p>
			</div>
		@endif
		@if($allUsers->all() !== null)
			@foreach($allUsers as $allUser)
				<div class="jumbotron">
					<img src="{{ asset('public/images/'.$allUser->Image) }}" class="product_image">
					<div class="container">
						<p>Product Name:{{ $allUser->productName }}</p>
						<p>Description:{{ $allUser->description }}</p>
						<p>Price:{{ $allUser->price }}</p>
						<li class="btn btn-success">
						   	<a href="{{ url('updateProductView/'.$allUser->id) }}">Update</a>
						</li>
						<li class="btn btn-danger">
						   	<a href="{{ url('updateProductView/'.$allUser->id) }}">Delete</a>
						</li>
					</div>
				</div>
			@endforeach
		@endif
	@endif
@endsection