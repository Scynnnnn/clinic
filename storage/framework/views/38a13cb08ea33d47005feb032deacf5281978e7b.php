<?php $__env->startSection('title','Get stat by day'); ?>
<?php $__env->startSection('content'); ?>
<form action="">
	<?php if(Session::has('success')): ?>
        <h4><?php echo e(Session::get('success')); ?></h4>
    <?php endif; ?>

	
	<table class="table table-hover table-striped" >
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="record_date"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Customer Per Day</td>
			
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->doctor_id); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><a href="<?php echo e(route('get_stat_this_doctor',['doctor_id'=>$each->doctor_id])); ?>">Get stat</a></td>
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>