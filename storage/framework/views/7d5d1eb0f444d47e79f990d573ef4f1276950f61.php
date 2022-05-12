<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Doctor Information'); ?>
<form action="">
	

	<a href="<?php echo e(route('view_update_doctor',['doctor_id'=>Session::get('doctor_id')])); ?>">Update</a>

	<?php foreach ($result as $each): ?>
	<table class="table" >

		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Name</td>
			<td>Phone number</td>
			<td>Major</td>
			
			
			

		</tr>
		
		<tr>
			<td><?php echo e($each->doctor_id); ?></td>
			<td><?php echo e($each->email); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->phone_numb); ?></td>
			<td><?php echo e($each->major_id); ?></td>
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('doctor.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>