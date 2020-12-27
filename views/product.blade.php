<!DOCTYPE html>
<html>
<head>
	<title>Product list</title>
</head>
<body>
	<table border="2">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Created date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				
				<td>{{ $d->id   }}</td>
				<td>{{ $d->name }}</td>
				<td>{{ $d->price }}</td>
				<td>{{ $d->qty  }}</td>
				<td>{{  date('M d, Y',strtotime($d->created_at))   }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>