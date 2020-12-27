<!DOCTYPE html>
<html>
<head>
	<title>This is the page for category</title>
</head>
<body>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>description</th>
			<th>Created Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $d)
		<tr>
			<td>{{$d->id}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->description}}</td>
			<td>{{date('M d, Y',strtotime($d->created_at))}}</td>
		</tr>
		@endforeach
	</tbody>
</body>
</html>