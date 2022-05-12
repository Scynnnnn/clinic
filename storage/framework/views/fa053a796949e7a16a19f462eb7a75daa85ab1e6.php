<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Doctors management'); ?>
<form action="">

	<a href="<?php echo e(route('add_doctor')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Name</td>
			<td>Phone number</td>
			<td>Major</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->doctor_id); ?></td>
			<td><?php echo e($each->email); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->phone_numb); ?></td>
			<td><?php echo e($each->major_name); ?></td>
			<td><a href="<?php echo e(route('view_update_doctor',['doctor_id'=>$each->doctor_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route ('delete_doctor',['doctor_id'=>$each->doctor_id])); ?>">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>