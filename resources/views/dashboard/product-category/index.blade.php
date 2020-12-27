@include('dashboard.header')
<div class="container">
			@if(session()->has('status'))
		<div class="alert alert-success">
			
			<button class="close" data-dismiss="alert" aria-label="close">&times;</button>

			{{session()->get('status')}}
		</div>
		@endif
	<table class="table table-striped">
		<center>
			<h4>List of Products Category</h4>
			<small><a href="{{route('product-category.create')}}" class="btn btn-primary float-right">Create</a></small>
		</center>

		<thead>
			<tr>
				<th scope="col">S.N.</th>
				<th scope="col">Name</th>
				<th scope="col">Created Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $key => $value)
			<tr>
				<td>{{$data->firstItem() + $key}}</td>
				<td>{{$value->name}}</td>
				<td>{{date('M d, Y', strtotime($value->created_at))}}</td>
<td>
					<a href="{{route('product-category.edit', $value->id)}}" class="btn btn-info">Edit</a>
					<form action="{{route('product-category.destroy', $value->id)}}" method="post" class="d-inline">
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