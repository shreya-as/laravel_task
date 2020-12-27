@include('dashboard.header')
<div class="container">
	<h3 class="mt-3 md-3">Product Available
		<!-- .create le automatically create garx use resource -->
<small> <a href="{{route('product.create')}}" class="btn btn-primary float-right">create</a>
</small>
	</h3>
<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Created At</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($data as $key=>$d)
			<tr>
				<td>{{$data->firstItem()+$key}}</td>
				<td>{{$d->name}}</td>
				<td>{{$d->description}}</td>
				<td>{{$d->price}}</td>
				<td>{{$d->quantity}}</td>

				<td>{{date('M d, Y',strtotime($d->created_at))}}</td>
				<td>
						<a href="{{route('product.edit',$d->id)}}" class="btn btn-info">Edit</a>
						<form action ="{{route('product.destroy',$d->id)}}" method="POST" class="d-inline">
							@csrf
							@method('DELETE')

							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
				</td>
				

			</tr>
			@php $i++; @endphp
			@endforeach
		</tbody>
	</table>	
<div class="justify-content-center">
	<!-- if their exists a data or not  -->
	@if(class_basename($data) !== 'collection')
	{{$data->links()}}
	@endif
	


</div>

</div>
@include('dashboard.footer')