<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Records Information'); ?>
<form action="">
	<?php if(Session::has('success')): ?>
        <h4><?php echo e(Session::get('success')); ?></h4>
    <?php endif; ?>
	<table class="table" >

		<tr>
			<td>Record ID</td>
			<td>Date</td>
			<td>Doctor ID</td>
			<td>Doctor Name</td>
			<td>Begin</td>
			<td>End</td>
			<td>Delete</td>
			
			
			
			

		</tr>
		<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if(Session::get('patient_id')==$each->patient_id): ?>
		<tr>
			<td><?php echo e($each->record_id); ?></td>
			<td><?php echo e($each->date); ?></td>

			<td><?php echo e($each->doctor_id); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->begin); ?></td>
			<td><?php echo e($each->end); ?></td>

			
			<td><a href="<?php echo e(route ('delete_appointment',['record_id'=>$each->record_id])); ?>">Delete</a></td>
			
		</tr>
		<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		

</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('patient.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>