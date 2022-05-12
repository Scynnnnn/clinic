<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Doctor Information'); ?>

hello, <?php echo e(Session::get('name')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage.homepage_after_login.layout_homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>