<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update admin'); ?>




<div class="table">


	<form id="allInputsFormValidation" class="form-horizontal"  method="post" action="<?php echo e(route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id])); ?>" novalidate="novalidate">
		
	

		<legend>Update an Admin</legend>

		<?php $__currentLoopData = $array_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<div class="content">
		

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="password"
					name="password"
					value="<?php echo e($each->password); ?>"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>
		<button class="btn btn-primary btn-fill btn-wd">Update</button>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>