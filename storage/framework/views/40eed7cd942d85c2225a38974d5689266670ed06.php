<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Admins management'); ?>
<form action="">
	<h1>Admin management</h1>
	<h5><a href="<?php echo e(route('add_admin')); ?>"><i class="pe-7s-add-user"></i>Add user</a></h5>
	<table class="table" style="" >
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Age</td>
			<td>Address</td>
			<td>Phone number</td>
			<td>Admin level</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->admin_id); ?></td>
			<td><?php echo e($each->name); ?></td>
			<td><?php echo e($each->email); ?></td>
			<td><?php echo e($each->age); ?></td>
			<td><?php echo e($each->address); ?></td>
			<td><?php echo e($each->phone_numb); ?></td>
			<td><?php if($each->level==1): ?>
				Super Admin
			<?php else: ?>
				Admin
			<?php endif; ?></td>
			<td><a href="<?php echo e(route('view_update_admin',['admin_id'=>$each->admin_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route ('delete_admin',['admin_id'=>$each->admin_id])); ?>">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>




</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>