<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Add new'); ?>
<div class="table">
<form method="post" action="<?php echo e(route('process_add_new')); ?>">
	<h1>Create news</h1>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

		
		<div class="content">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">subject</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="subject"
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
					<textarea class="form-control"> 
						
					</textarea>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
		<input type="hidden" name="admin_id" value="<?php echo e(Session::get('admin_id')); ?>">

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category</label>
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
	
	
	<button>add</button>
</form>
<?php $__env->stopSection(); ?>
</div>




<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>