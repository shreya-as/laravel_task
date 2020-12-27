@include('dashboard.header')

<div class="container">
	<h2>Update Product Category</h2>
	<form action="{{route('product-category.update', $data->id)}}" method="post">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{$data->name}}">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Enter description" required="">{{$data->description}}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
</div>

@include('dashboard.footer')