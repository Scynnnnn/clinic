<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Patient records management'); ?>
<form action="">

	<a href="<?php echo e(route('view_add_patient_record')); ?>">Add</a>

<div class="container">
      <div id="calendar"></div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('ajax'); ?>
<script type="text/javascript">
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar();
 });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>