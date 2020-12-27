@include('dashboard.header')
<div class="container">
	<h2>Create Product Category</h2>
	<form action="{{route('product-category.store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name" required="">
		</div>

		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control" placeholder="Enter description" required="">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
</div>

@include('dashboard.footer')