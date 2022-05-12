<?php $__env->startSection('banner'); ?>
 <div class="bradcam_area breadcam_bg_2 bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Appointment</h3>
                        <p><a href="index.html">Home /</a> Appointment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Doctor Information'); ?>

<div class="content">
	<form method="post" action="">	

		<legend>Want to set an appointment ? <?php echo e(Session::get('name')); ?></legend>

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<select name  ="major" class="form-control" id="select_major">
					<option value="0">--choose major--</option>
					<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value ="<?php echo e($each->major_id); ?>" >
					<?php echo e($each->major_name); ?>

					</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				
			</div>
		</fieldset>

		<fieldset>
			<select class="select_doctor">
				
			</select>
		</fieldset>

		



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