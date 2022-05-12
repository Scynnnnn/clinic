<?php $__env->startSection('title','Doctors management'); ?>
<?php $__env->startSection('content'); ?>

<div class="content">
<form>
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<select name  ="major_id" class="form-control" id="select_major">
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

	<table class="table" >
		<tr>
			<td>Name</td>
		</tr>
		
		<tr >
			<td >
				<div id="select_doctor"></div>
			</td>
			
		</tr>
		

</form>
</table>

</form>
</div>


<?php $__env->startPush('ajax'); ?>
		<script type="text/javascript">
			$('document').ready(function(){

				$("#select_major").change(function(){
					var values_select_major = $(this).val();
					// alert(values_select_major);

					$.ajax({
						url:'<?php echo e(route('get_doctor_by_major2')); ?>',
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>