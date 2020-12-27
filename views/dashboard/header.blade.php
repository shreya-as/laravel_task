<!DOCTYPE html>
<html>
<head>
	<title>My dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('resources/assets/js/jquery-3.4.1.slim.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('dashboard')}}">MyDashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.product-category')}}">Product Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Products</a>
      </li>
  </ul>
      <ul class="navbar-nav ml-auto">
      	<li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
     	 </li>

  	</ul>
      
   
    
  </div>
</nav>

