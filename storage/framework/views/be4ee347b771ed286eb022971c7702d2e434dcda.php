<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Patients management'); ?>
<form action="">

	<a href="<?php echo e(route('view_add_patient')); ?>">Add</a>
	<table class="table" >

		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Age</td>
			<td>Gender</td>
			<td>Address</td>
			<td>Phone number</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->patient_id); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->email); ?></td>
			<td><?php echo e($each->age); ?></td>
			<td><?php if($each->gender==1): ?>
				Male
			<?php else: ?>
				Female
			<?php endif; ?></td>
			<td><?php echo e($each->address); ?></td>
			<td><?php echo e($each->phone_numb); ?></td>
			<td><a href="<?php echo e(route('view_update_patient',['patient_id'=>$each->patient_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route ('delete_patient',['patient_id'=>$each->patient_id])); ?>">Delete</a></td>
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>