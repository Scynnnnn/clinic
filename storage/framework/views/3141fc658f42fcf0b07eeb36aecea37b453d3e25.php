<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update new category'); ?>


<?php if($errors->any()): ?>
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		<?php endif; ?>
		
<form method="post" action="<?php echo e(route('process_update_new_category',['new_category_id'=>$array_new_category[0]->new_category_id])); ?>">
	<h1>Update new category</h1>
	<?php $__currentLoopData = $array_new_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="<?php echo e($each->new_category_name); ?>"
					name="new_category_name"
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