@extends('header')

@section('content')

@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
@endif
@if(Session::has('message'))
	<div class="alert alert-danger">
		{{ Session::get('message') }}
	</div>
@endif
<div class="container">
	<form id="form" action="{{ url('authadmincontroller') }}" method="post">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
@endsection
