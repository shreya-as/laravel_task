<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
	<h2>Update Product</h2>
	<form action="<?php echo e(route('product.update', $value->id)); ?>" method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
		<div class="form-group col-md-6">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
				<option value="">Choose</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo e($value->name); ?>" required="">
		</div>
		<div>
			<label>Upload Image</label>
			<input type="file" name="image">
			<input type="hidden" name="image_url" value="<?php echo e($value->image); ?>">
		<?php if($value->image): ?>
					<img src="<?php echo e(asset($value->image)); ?>" height="50" width="50">
					<?php endif; ?>
		</div>
		<div class="form-group col-md-6">
			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" value="<?php echo e($value->quantity); ?>" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Price</label>
			<input type="number" name="price" class="form-control" placeholder="Enter Price" value="<?php echo e($value->price); ?>" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Enter description" required=""><?php echo e($value->description); ?></textarea>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>

	</form>
</div>

<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mysite\resources\views/dashboard/product/edit.blade.php ENDPATH**/ ?>