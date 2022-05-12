<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','New categories management'); ?>

<form action="">
	<?php if(Session::has('success')): ?>
        <h4><?php echo e(Session::get('success')); ?></h4>
    <?php endif; ?>
	<a href="<?php echo e(route('add_new_category')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Category name</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->new_category_id); ?></td>
			<td><?php echo e($each->new_category_name); ?></td>
			<td><a href="<?php echo e(route('view_update_new_category',['new_category_id'=>$each->new_category_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route ('delete_new_category',['new_category_id'=>$each->new_category_id])); ?>">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>