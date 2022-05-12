<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Add patient'); ?>
<div class="content">
	<form method="post" action="<?php echo e(route('check_patient_exits')); ?>">	

		<legend>Add a Patient</legend>

		<?php if($errors->any()): ?>
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		<?php endif; ?>
		

		
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
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
					type="email"
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
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date of Birth</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="age"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>

		<fieldset>
			<label class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="male" name="gender" value="1">
			<label for  ="male">Male</label>
			<input type ="radio" id="female" name="gender" value="0">
			<label for  ="female">Female</label><br>
		</div>



			
		</fieldset>



		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="address"
					/>
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					name="phone_numb"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>

		

		

		

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
		
	</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>