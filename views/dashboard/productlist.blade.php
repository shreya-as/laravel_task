@include('dashboard.index')

<!DOCTYPE html>
<html>
<head>
	<title>Product list</title>
	<link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap.min.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<table class="table">
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