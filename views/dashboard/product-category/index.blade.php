@include('dashboard.header')
<div class="container">
	<h2>Product Categories </h2>
	<small><a href="{{route('product-category.create')}}"
		class="btn btn-priimary float-right">Create</a></small>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Created at</th>
				<th scope="col">operation</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{$d->id}}</td>
				<td>{{$d->name}}</td>
				<td>{{$d->created_at}}</td>
				<td>
					<a href="{{route('product-category.edit',$d->id)}}" class="btn btn-info">Edit</a>
					<a href="" class="btn btn-info">Delete</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>

</div>
@include('dashboard.footer')