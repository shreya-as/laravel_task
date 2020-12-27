@include('dashboard.header')
<div class="container">
	<h2>Update Product</h2>
	<form action="{{route('product.update', $value->id)}}" method="post" enctype="multipart/form-data">
		@csrf
				@method('PUT')
		<div class="form-group col-md-6">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
				<option value="">Choose</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$value->name}}" required="">
		</div>
		<div>
			<label>Upload Image</label>
			<input type="file" name="image">
			<input type="hidden" name="image_url" value="{{$value->image}}">
		@if($value->image)
					<img src="{{asset($value->image)}}" height="50" width="50">
					@endif
		</div>
		<div class="form-group col-md-6">
			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" value="{{$value->quantity}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Price</label>
			<input type="number" name="price" class="form-control" placeholder="Enter Price" value="{{$value->price}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Enter description" required="">{{$value->description}}</textarea>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>

	</form>
</div>

@include('dashboard.footer')