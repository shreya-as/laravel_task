@include('dashboard.header')
<div class="container">
	<table class="table table-striped">
		<center>
			<h4>List of Products Category</h4>
			<small><a href="{{route('product.create')}}" class="btn btn-primary float-right">Create</a></small>
		</center>
		<thead>
			<tr>
				<th scope="col">S.N.</th>
				
				<th scope="col">Name</th>
				<th scope="col">Image</th>

				<th scope="col">Quantity</th>
				<th scope="col">Price</th>
				<th scope="col">Category Name</th>
				<th scope="col">Created Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $key => $value)
			<tr>
				<td>{{$data->firstItem() + $key}}</td>
				<td>{{$value->name}}</td>

				<td>
					@if($value->image)
					<img src="{{asset($value->image)}}" height="50" width="50">
					@endif
				</td>
				<td>{{$value->description}}</td>
				<td>{{$value->price}}</td>
				<td>{{$value->quantity}}</td>
				<td>{{date('M d, Y', strtotime($value->created_at))}}</td>
				<td>
					<a href="{{route('product.edit', $value->id)}}" class="btn btn-info">Edit</a>
					<form action="{{route('product.destroy', $value->id)}}" method="post" class="d-inline">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="justify-content-center">
		@if(class_basename($data) !== 'Collection')
		{{$data->links()}}
		@endif
	</div>

</div>

@include('dashboard.footer')