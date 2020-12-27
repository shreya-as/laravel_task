@include('dashboard.header')
<div class="container">
	<h2>Create Product</h2>
	<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group col-md-6">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Select Category</option>
				@foreach($data as $value)
				<option value="{{$value->id}}">{{$value->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter name" required="" placeholder="Enter name">
		</div>
		<div class="form-group">
			
			<label>Upload Image</label>
			<input type="file" name="image">
			
		</div>

		<div class="form-group col-md-6">
			<label>Quantity</label>
			<input type="text" name="quantity" class="form-control" placeholder="Enter Quantity" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Price</label>
			<input type="number" name="price" class="form-control" placeholder="Enter Price" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Enter description" required=""></textarea>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>

	</form>
</div>

@include('dashboard.footer')