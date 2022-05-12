<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo e(asset('img/icon.ico')); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo e(asset('css/light-bootstrap-dashboard.css?v=1.4.1')); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="register.html">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="black" data-image="<?php echo e(asset('img/doctor.jpg')); ?>">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                       <form method="post" action="<?php echo e(route('process_login_doctor')); ?>"> 
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">Login as Doctor</div>
                                <div class="content">
                                    <div class="form-group">
                                        <?php if(Session::has('error')): ?>
                                           <h4><?php echo e(Session::get('error')); ?></h4>
                                        <?php endif; ?>

                                        <?php if(Session::has('success')): ?>
                                           <h4><?php echo e(Session::get('success')); ?></h4>
                                        <?php endif; ?>
                                        <label>Email address</label>
                                        <input type="email" name="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" 
                                        name="password" 
                                        placeholder="Password" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    	

    </div>

</div>


</body>

    <!--   Core JS Files  -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('js/perfect-scrollbar.jquery.min.js')); ?>" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="<?php echo e(asset('js/bootstrap-datetimepicker.min.js')); ?>"></script>

    <!--  Select Picker Plugin -->
    <script src="<?php echo e(asset('js/bootstrap-selectpicker.js')); ?>"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
		<script src="<?php echo e(asset('js/bootstrap-switch-tags.min.js')); ?>"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo e(asset('js/chartist.min.js')); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('js/bootstrap-notify.js')); ?>"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>

    Vector Map plugin
	<script src="<?php echo e(asset('js/jquery-jvectormap.js')); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Wizard Plugin    -->
    <script src="<?php echo e(asset('js/jquery.bootstrap.wizard.min.js')); ?>"></script>

    <!--  Datatable Plugin    -->
    <script src="<?php echo e(asset('js/bootstrap-table.js')); ?>"></script>

    <!--  Full Calendar Plugin    -->
    <script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="<?php echo e(asset('js/light-bootstrap-dashboard.js?v=1.4.1')); ?>"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo e(asset('js/demo.js')); ?>"></script>

    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

</html>
