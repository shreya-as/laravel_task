<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
	<h2>Create Product</h2>
	<form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<div class="form-group col-md-6">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Select Category</option>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mysite\resources\views/dashboard/product/create.blade.php ENDPATH**/ ?>