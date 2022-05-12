<?php $__env->startSection('title','Update doctor'); ?>
<?php $__env->startSection('content'); ?>

<form method="post" action="<?php echo e(route('process_update_doctor',['doctor_id'=>Session::get('doctor_id')])); ?>">
	
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	
			<?php if($errors->any()): ?>
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		<?php endif; ?>

	
	<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="<?php echo e($each->name); ?>"
					name="name"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

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


		

		
		<button class="btn btn-primary btn-fill btn-wd">Update</button>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</form>
	
<?php $__env->stopSection(); ?>




<?php echo $__env->make('doctor.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>