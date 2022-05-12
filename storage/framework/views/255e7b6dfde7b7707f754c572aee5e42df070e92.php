<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Add major'); ?>
<form method="post" action="<?php echo e(route('check_major_exits')); ?>">
	<h1>Create new major</h1>
	
	 <?php if(Session::has('error')): ?>
        <h4><?php echo e(Session::get('error')); ?></h4>
     <?php endif; ?>

     <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
	<?php endif; ?>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="major_name"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>add</button>
</form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>