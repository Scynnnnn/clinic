<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','Update your information'); ?>

<div class="table">


	<form id="allInputsFormValidation" class="form-horizontal"  method="post" action="<?php echo e(route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id])); ?>" novalidate="novalidate">
		
	

		<legend>Update an Admin</legend>

		<?php $__currentLoopData = $array_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<div class="col-md">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control"  name="password" value="<?php echo e($each->password); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control"  name="phone_numb" value="<?php echo e($each->phone_numb); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address"  value="<?php echo e($each->address); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</form>
</div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>