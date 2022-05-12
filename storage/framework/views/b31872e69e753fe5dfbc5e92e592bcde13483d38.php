<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Add admin'); ?>
<h1>Add an new admin</h1>
<div class="content">
	<form method="post" action="<?php echo e(route('check_admin_exits')); ?>" enctype="multipart/form-data">		

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
		<?php if(Session::has('error')): ?>
              <h4><?php echo e(Session::get('error')); ?></h4>
        <?php endif; ?>
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="email"
					email="true"
					value="<?php echo e(old('email')); ?>" 
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
				<label class="col-sm-2 control-label" >Full name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					number="true"
					value="<?php echo e(old('name')); ?>" 
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
					name="dob"
					value="<?php echo e(old('dob')); ?>" 
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
					value="<?php echo e(old('phone_numb')); ?>" 
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
					value="<?php echo e(old('address')); ?>" 
					/>
				</div>
				
			</div>
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Profile image</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="file"
					name="profile_image"
					accept="image/*" 
					/>
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<label class="col-sm-2 control-label">Level</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="super_admin" name="level" value="1">
			<label for  ="super_admin">Super admin</label>
			<input type ="radio" id="admin" name="level" value="0">
			<label for  ="admin">Admin</label><br>
		</div>



			
		</fieldset>
		<button class="btn btn-primary btn-fill btn-wd">Add</button>
		
	</form>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>