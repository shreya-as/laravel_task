<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
		<link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('resources/assets/js/jquery-3.4.1.slim.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<div class="container"></div>
	<h2>Registration Form </h2>
  <form method="post" action="{{route('register')}}">
  	@csrf
  	<div class="form-group">
<label>Name </label>
<input type="text" name="name" class="form-control">


  	 </div>
  	   	<div class="form-group">
<label>Email </label>
<input type="email" name="email" class="form-control">
  	 </div>
  	   	<div class="form-group">
<label>Password  </label>
<input type="password " name="password" class="form-control">


  	 </div>
  	 <div class="form-group">
  	 	<button class="btn btn-primary">Submit</button>
  	 </div>
  </form>
</body>
</html>