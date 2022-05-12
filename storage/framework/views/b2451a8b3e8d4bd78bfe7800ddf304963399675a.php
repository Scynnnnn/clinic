<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Add new category'); ?>
<form method="post" action="<?php echo e(route('check_new_category_exits')); ?>">
	<h1>Create new category</h1>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	 <?php if(Session::has('error')): ?>
        <h4><?php echo e(Session::get('error')); ?></h4>
     <?php endif; ?>
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="new_category_name"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>add</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>