<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Patient records management'); ?>
<form action="">

	<a href="<?php echo e(route('view_add_patient_record')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Date</td>
			<td>Time</td>
			<td>Doctor</td>
			<td>Patient</td>
			<td>Result</td>
			
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->record_id); ?></td>
			<td><?php echo e($each->date); ?></td>
			<td></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->result); ?></td>
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>