<!DOCTYPE html>
<html>
<head>
	<title>laravel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
	<header>
		<nav class="">
			<div class="container-fluid navbar navbar-default">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			      	</button>
			      	<a class="navbar-brand" href="#">Tomrain</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
			        		<li><a href="{{ url('adminlogin') }}">Admin login</a></li>
			      	</ul>
			      	<ul class="nav navbar-nav navbar-right">
			        		<li><a href="{{ url('adminlogout') }}">Logout</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
			    <div class="collapse navbar-collapse">
				    <ul class="nav navbar-nav">
				    	<li>
				          	<a href="{{ url('adminhome') }}">Home</a>
				        </li>	
						@if($categories->all() !== null)
							@foreach($categories as $categorie)
		            			<li><a href="#">{{ $categorie->categoriesName }}</a></li>
		            		@endforeach
		            	@endif
				    </ul>
			    </div>
				    <ul class="">
				    	<li class="btn btn-success">
				          	<a href="{{ url('addcategories') }}">ADD CATEGORIES</a>
				        </li>
				        <li class="btn btn-success">
				          	<a href="{{ url('addproduct') }}">ADD PRODUCTS</a>
				        </li>
				    </ul>
		  	</div><!-- /.container-fluid -->
		</nav>
	</header>
	@yield('content')
	<script>
		$(document).ready(function(){
					jQuery.validator.addMethod("lettersonly", function(value, element) {
	  				return this.optional(element) || /^[a-z\-\s]+$/i.test(value);
					}, "Letters only please"); 

		$('#form').validate(
			{
				rules:{
					name:{
						lettersonly:true
					},
					productName:{
						lettersonly:true
					},
					description:{
						lettersonly:true
					},
					price:{
						lettersonly:false
					}
				}
			});
		});
	</script>
</body>
</html>