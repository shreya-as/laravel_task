@include('dashboard.header')

<table class="table table-striped">
	<center><h4>List of Products Category</h4></center>
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Created Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td>{{$value->name}}</td>
			<td>{{date('M d, Y', strtotime($value->created_at))}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@include('dashboard.footer')

