<?php $__env->startSection('add_patient'); ?>
<?php $__env->startSection('title','Add patient'); ?>
<div class="content">
	<form method="post" action="<?php echo e(route('process_add_patient')); ?>">	

		<legend>Add a Patient</legend>

		
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
				<label class="col-sm-2 control-label">Age</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					name="age"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					name="gender"
					number="true"
					/>
				</div>
				
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
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>