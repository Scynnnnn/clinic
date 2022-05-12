<?php $__env->startSection('content'); ?>

    
     <div class="col-md-10 col-md-offset-1">
        
        <div class="card card-calendar">
            <div class="content">
                <div id="fullCalendar"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('ajax'); ?>
    
    <script>
        $(document).ready(function(){
            demo.initFullCalendar();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>