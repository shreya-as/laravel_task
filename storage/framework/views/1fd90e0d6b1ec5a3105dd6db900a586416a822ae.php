<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('resources/assets/css/bootstrap.min.css')); ?>">

	<script type="text/javascript" src="<?php echo e(asset('resources/assets/js/jquery-3.3.1.slim.min.js')); ?>"></script>

	<script type="text/javascript" src="<?php echo e(asset('resources/assets/js/popper.min.js')); ?>"></script>

	<script type="text/javascript" src="<?php echo e(asset('resources/assets/js/bootstrap.bundle.min.js')); ?>"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">My Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('admin.product-category')); ?>">Categories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('admin.product')); ?>">Product</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)" onclick="$('#logout-form').submit();">Logout</a>
				</li>
			</ul>
			
		</div>
	</nav>
	                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

<?php /**PATH C:\xampp\htdocs\mysite\resources\views/dashboard/header.blade.php ENDPATH**/ ?>