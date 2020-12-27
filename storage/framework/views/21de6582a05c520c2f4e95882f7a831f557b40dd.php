<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
	<h2>Create Product Category</h2>
	<form action="<?php echo e(route('product-category.store')); ?>" method="post">
		<?php echo csrf_field(); ?>
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

<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mysite\resources\views/dashboard/product-category/create.blade.php ENDPATH**/ ?>