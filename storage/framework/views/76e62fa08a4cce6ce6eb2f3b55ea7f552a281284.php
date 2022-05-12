<?php $__env->startSection('add_doctor'); ?>
<div class="content">
	<form method="post" action="<?php echo e(route('process_add_doctor')); ?>">	

		<legend>Add an Doctor</legend>

		
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
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
					<input class="form-control"
					type="number"
					name="major_id"
					number="true"
					/>
				</div>
				
			</div>
		</fieldset>

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
		
	</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>