<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update doctor'); ?>
<form method="post" action="<?php echo e(route('process_update_doctor',['doctor_id'=>$array_doctor[0]->doctor_id])); ?>">
	<?php $__currentLoopData = $array_doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="<?php echo e($each->email); ?>"
					name="email"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="password"
					name="password"
					value="<?php echo e($each->password); ?>"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Full name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					value="<?php echo e($each->name); ?>"
					number="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					value="<?php echo e($each->phone_numb); ?>"
					name="phone_numb"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<select name  ="major_id" class="form-control">
					<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value ="<?php echo e($each->major_id); ?>" >
					<?php echo e($each->major_name); ?>

					</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				
			</div>
		</fieldset>

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>