<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Wavy login form</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('homepage_asset/login/style.css')); ?>">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="login" method="post" action="<?php echo e(route('process_login_admin')); ?>"> 
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <?php if(Session::has('error')): ?>
                                           <h4><?php echo e(Session::get('error')); ?></h4>
                                        <?php endif; ?>

                                        <?php if(Session::has('success')): ?>
                                           <h4><?php echo e(Session::get('success')); ?></h4>
                                        <?php endif; ?>
                                        <?php if($errors->any()): ?>
                                        <div class="alert alert-danger">
                                        <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        </div>
                                        <?php endif; ?>
  <input type="text" placeholder="Email" name="email">
  <input type="password" placeholder="Password" name="password">
  <button>Login</button>
</form>


  
</body>
</html>
