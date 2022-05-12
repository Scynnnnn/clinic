<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Majors management'); ?>
<form action="">
	<?php if(Session::has('success')): ?>
        <h4><?php echo e(Session::get('success')); ?></h4>


    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        <h4><?php echo e(Session::get('error')); ?></h4>


    <?php endif; ?>

	<a href="<?php echo e(route('add_major')); ?>">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Major</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo e($each->major_id); ?></td>
			<td><?php echo e($each->major_name); ?></td>
			<td><a href="<?php echo e(route('view_update_major',['major_id'=>$each->major_id])); ?>">Update</a></td>
			<td><a href="<?php echo e(route('check_major_for_delete',['major_id'=>$each->major_id])); ?>">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>