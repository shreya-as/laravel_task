@include('dashboard.header')
@include('dashboard.footer')

<table class="table" border='1'>
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Price</th>
			<th scope="col">Quantity</th>
			<th scope="col">Created date</th>
		</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
		<tr>
			<td>{{ $d -> id}}</td>
			<td>{{ $d -> name}}</td>
			<td>{{ $d -> price}}</td>
			<td>{{ $d -> qty}}</td>
			<td>{{ date('M d, Y',strtotime($d->created_at)) }}</td>
		</tr>
		@endforeach
		</tbody>

	</table>