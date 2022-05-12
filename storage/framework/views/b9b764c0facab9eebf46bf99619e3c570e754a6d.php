<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update major'); ?>
<h1>Update major name</h1>

<form method="post" action="<?php echo e(route('check_major_exits_for_update',['major_id'=>$array_major[0]->major_id])); ?>">
	<?php if(Session::has('error')): ?>
        <h4><?php echo e(Session::get('error')); ?></h4>
    <?php endif; ?>

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

	<?php $__currentLoopData = $array_major; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="major_name"
					value="<?php echo e($each->major_name); ?>"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>Update</button>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>