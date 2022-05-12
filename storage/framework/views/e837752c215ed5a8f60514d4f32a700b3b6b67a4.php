<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update new'); ?>
<h1>Update New</h1>
<form method="post" action="<?php echo e(route('process_update_new',['new_id'=>$array_new[0]->new_id])); ?>">
	
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
	<?php $__currentLoopData = $array_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">subject</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="subject"
					value="<?php echo e($each->subject); ?>"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Content</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="content"
					value="<?php echo e($each->content); ?>"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="content"
					value="<?php echo e($each->date); ?>"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<select name  ="new_category_id" class="form-control">
					<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value ="<?php echo e($each->new_category_id); ?>">
					<?php echo e($each->new_category_name); ?>

					</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>
	<button>Update</button>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>