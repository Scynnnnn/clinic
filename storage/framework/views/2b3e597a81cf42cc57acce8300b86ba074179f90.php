<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update doctor'); ?>
<form method="post" action="<?php echo e(route('process_update_patient',['patient_id'=>$array_patient[0]->patient_id])); ?>">
	<?php $__currentLoopData = $array_patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					value="<?php echo e($each->name); ?>"
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
					value="<?php echo e($each->email); ?>"
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
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Age</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					name="age"
					number="true"
					value="<?php echo e($each->age); ?>"
					/>
				</div>
				
			</div>


			
		</fieldset>

		<fieldset>
			<label class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="female" name="gender" value="0">
			<label for  ="female">Female</label><br>
			<input type ="radio" id="male" name="gender" value="1" checked="">
			<label for  ="male">Male</label>
			
		</div>



			
		</fieldset>



			
		



		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="address"
					value="<?php echo e($each->address); ?>"
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
					value="<?php echo e($each->phone_numb); ?>"
					/>
				</div>
				
			</div>


			
		</fieldset>


		

		
		<button class="btn btn-primary btn-fill btn-wd">Update</button>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</form>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>