<!DOCTYPE html>
<html>
<head>
	<title>hello project </title>
</head>
<body>
	<!--<h1>This is my project</h1>-->
	<!--<?php echo $title; ?>-->
	<h1>{{$title}}</h1>
	
	@foreach($data as $d)
	<h3>{{$d}}</h3>
	@endforeach

</body>
</html>