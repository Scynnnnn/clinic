<?php $__env->startSection('title','Chart'); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('get_todo_list',['doctor_id'=>Session::get('doctor_id')])); ?>">
	
	<fieldset>
					<div class="form-group">
						<label class="col-sm-2 control-label">Date</label>
						<div class="col-sm-6">
                            <select name="month" class="form-control" id="select_month" >
                                <option value="0">--Chon thang--</option>
                                <?php for($i = 1; $i <=12 ; $i++): ?>
                                    <option value="<?php echo e($i); ?>"
                                        <?php if($i == date('m')): ?>
                                            selected="" 
                                        <?php endif; ?>
                                    ><?php echo e($i); ?></option>
                                <?php endfor; ?>
                            </select>
                            <select name="year" class="form-control" id="select_year">
                                <option value="0">--Chon nam--</option>
                                <?php for($i = 2100; $i >=1900 ; $i--): ?>
                                    <option value="<?php echo e($i); ?>"
                                        <?php if($i == date('Y')): ?>
                                            selected="" 
                                        <?php endif; ?>
                                    ><?php echo e($i); ?></option>
                                <?php endfor; ?>   
                            </select>
						</div>
                    </div>
						
					</div>
				</fieldset>
			<button>sad</button>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('doctor.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>