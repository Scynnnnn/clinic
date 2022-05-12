<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Clinic</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo e(asset('css/light-bootstrap-dashboard.css?v=1.4.1')); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="<?php echo e(asset('img/full-screen-image-3.jpg')); ?>">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                AD
            </a>

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Admin
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="<?php echo e(route('admins')); ?>">
                        <p>Admins mgt</p>
                    </a>
                </li>
            
                <li class="active">
                    <a href="<?php echo e(route('majors')); ?>">
                        <p>Majors mgt</p>
                    </a>
                </li>

                

                <li class="active">
                    <a href="<?php echo e(route('patients')); ?>">
                        <p>Patients mgt</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('news')); ?>">
                        <p>news mgt</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('new_categories')); ?>">
                        <p>new categories mgt</p>
                    </a>
                </li>

                 <li class="active">
                    <a href="<?php echo e(route('doctors')); ?>">
                        <p>doctors mgt</p>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin management</a>
                </div>
                
            </div>
        </nav>

        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    
                    <?php echo $__env->yieldContent('admins'); ?>
                    <?php echo $__env->yieldContent('add_admin'); ?>
                    <?php echo $__env->yieldContent('update_admin'); ?>
                    
                    <?php echo $__env->yieldContent('majors'); ?>
                    <?php echo $__env->yieldContent('add_major'); ?>
                    <?php echo $__env->yieldContent('update_major'); ?>
                    
                    <?php echo $__env->yieldContent('new_categories'); ?>
                    <?php echo $__env->yieldContent('add_new_category'); ?>
                    <?php echo $__env->yieldContent('update_new_category'); ?>
                    
                    <?php echo $__env->yieldContent('news'); ?>
                    <?php echo $__env->yieldContent('add_new'); ?>
                    <?php echo $__env->yieldContent('update_new'); ?>
                    
                    <?php echo $__env->yieldContent('patients'); ?>
                    <?php echo $__env->yieldContent('add_patient'); ?>
                    <?php echo $__env->yieldContent('update_patient'); ?>
                    
                    <?php echo $__env->yieldContent('doctors'); ?>
                    <?php echo $__env->yieldContent('add_doctor'); ?>
                    <?php echo $__env->yieldContent('update_doctor'); ?>
                </div>
             </div>
                        
                 
               



               

        <footer class ="footer" style=" position:absolute;bottom:0;width:100%;height:10px;">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <!--   Core JS Files  -->
    <script src="<?php echo e(asset('js/jquery.min.js" type="text/javascript')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js" type="text/javascript')); ?>"></script>
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

    <!-- Vector Map plugin -->
    <script src="<?php echo e(asset('js/jquery-jvectormap.js')); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Wizard Plugin    -->
    <script src="<?php echo e(asset('js/jquery.bootstrap.wizard.min.js')); ?>"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="<?php echo e(asset('js/bootstrap-table.js')); ?>"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="<?php echo e(asset('js/jquery.datatables.js')); ?>"></script>


    <!--  Full Calendar Plugin    -->
    <script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="<?php echo e(asset('js/light-bootstrap-dashboard.js?v=1.4.1')); ?>"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initDashboardPageCharts();
            demo.initVectorMap();

            $.notify({
                icon: 'pe-7s-bell',
                message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });

        });
    </script>

</html>
