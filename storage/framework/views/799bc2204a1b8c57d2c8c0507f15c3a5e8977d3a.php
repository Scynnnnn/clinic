<?php $__env->startSection('title','Doctors management'); ?>
<?php $__env->startSection('content'); ?>
<form action="">
	<?php if(Session::has('success')): ?>
        <h4><?php echo e(Session::get('success')); ?></h4>
    <?php endif; ?>

	<a href="<?php echo e(route('add_doctor')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Name</td>
			<td>Phone number</td>
			<td>Major</td>
			<td>Image</td>
			
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->doctor_id); ?></td>
			<td><?php echo e($each->email); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->phone_numb); ?></td>
			<td><?php echo e($each->major_name); ?></td>
			<td>
				<img height="200" src="<?php echo e(asset('storage/'.$each->profile_image)); ?>">

			</td>
			
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>