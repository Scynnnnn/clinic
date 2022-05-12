<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Doctor Information'); ?>

<div class="content">
	<form method="post" action="">	

		<legend>Want to set an appointment ? <?php echo e(Session::get('name')); ?></legend>

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


	<!-- expert_doctors_area_start -->
    <div class="expert_doctors_area doctor_page">
        <div class="container">
            <div class="row">
            	<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="<?php echo e(asset('docmed/img/experts/9.png')); ?>" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3><?php echo e($each->name); ?></h3>
                            <span><?php echo e($each->major_name); ?></span>
                        </div>
                    </div>
                </div>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->



	</form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('ajax'); ?>
	<script type="text/javascript">
			$('document').ready(function(){

				$("#select_major").change(function(){
					var values_select_major = $(this).val();
					// alert(values_select_major);

					$.ajax({
						url:'<?php echo e(route('get_doctor_by_major')); ?>',
						type: 'GET',
					    data: {
					        doctor_id: $(this).val()
					    },
					    success:function(data){
					    	$("#select_doctor").html(data);
					    }
					});
				});

			});
		</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('patient.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>