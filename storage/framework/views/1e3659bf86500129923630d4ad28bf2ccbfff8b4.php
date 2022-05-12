<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','News management'); ?>
<form action="">

	<a href="<?php echo e(route('add_new')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Subject</td>
			<td>Content</td>
			<td>Date</td>
			<td>Admin ID</td>
			<td>Category</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->new_id); ?></td>
			<td><?php echo e($each->subject); ?></td>
			<td><?php echo e($each->content); ?></td>
			<td><?php echo e($each->date); ?></td>
			<td><?php echo e($each->admin_id); ?></td>
			<td><?php echo e($each->new_category_name); ?></td>
			<td><a href="<?php echo e(route('view_update_new',['new_id'=>$each->new_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route ('delete_new',['new_id'=>$each->new_id])); ?>">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>