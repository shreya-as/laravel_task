<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
			<?php if(session()->has('status')): ?>
		<div class="alert alert-success">
			
			<button class="close" data-dismiss="alert" aria-label="close">&times;</button>

			<?php echo e(session()->get('status')); ?>

		</div>
		<?php endif; ?>
	<table class="table table-striped">
		<center>
			<h4>List of Products Category</h4>
			<small><a href="<?php echo e(route('product-category.create')); ?>" class="btn btn-primary float-right">Create</a></small>
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($data->firstItem() + $key); ?></td>
				<td><?php echo e($value->name); ?></td>
				<td><?php echo e(date('M d, Y', strtotime($value->created_at))); ?></td>
<td>
					<a href="<?php echo e(route('product-category.edit', $value->id)); ?>" class="btn btn-info">Edit</a>
					<form action="<?php echo e(route('product-category.destroy', $value->id)); ?>" method="post" class="d-inline">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>

	<div class="justify-content-center">
		<?php if(class_basename($data) !== 'Collection'): ?>
		<?php echo e($data->links()); ?>

		<?php endif; ?>
	</div>

</div>

<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mysite\resources\views/dashboard/product-category/index.blade.php ENDPATH**/ ?>