
<?php if(Session::has('primary')): ?>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<strong>Note to User:</strong> <?php echo e(Session::get('primary')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('secondary')): ?>
	<div class="alert alert-secondary alert-dismissible fade show" role="alert">
		<strong>Note to User:</strong> <?php echo e(Session::get('secondary')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('success')): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success:</strong> <?php echo e(Session::get('success')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('danger')): ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Error:</strong> <?php echo e(Session::get('danger')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('warning')): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Something Went Wrong!</strong>
		<br>
		<?php echo e(Session::get('warning')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('info')): ?>
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<strong>Heads Up!</strong> <?php echo e(Session::get('info')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('light')): ?>
	<div class="alert alert-light alert-dismissible fade show" role="alert">
		<strong>Note to User:</strong> <?php echo e(Session::get('light')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(Session::has('dark')): ?>
	<div class="alert alert-dark alert-dismissible fade show" role="alert">
		<strong>Note to User:</strong> <?php echo e(Session::get('dark')); ?>


		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php if(session('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Note to User:</strong> <?php echo e(session('status')); ?>


	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif; ?>


<?php if(count($errors) > 0): ?>

	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Errors:</strong>

		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<li><?php echo e($error); ?></li>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>

		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

<?php endif; ?>