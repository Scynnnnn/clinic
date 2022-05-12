<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/icon.ico')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo e(asset('css/light-bootstrap-dashboard.css?v=1.4.1')); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    

     <!--     Calendar      -->
    <link rel="stylesheet" href="<?php echo e(asset('css/fullcalendar.css ')); ?>"/>
    
    

    <!--     Fonts and icons     -->
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" />

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
</head>
<body>

<div class="wrapper">
        <div class="sidebar" data-color="black" data-image="<?php echo e(asset('img/doctor_sidebar.jpg')); ?>">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->
        <div class="user">
            <div class="info">
                <div class="logo">
                    <div class="photo">
                        
                        <img  src="<?php echo e(asset('storage/'.Session::get('profile_image'))); ?>">
                    </div>

                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                     <?php echo e(Session::get('name')); ?>

                 </a>
             </div>
         </div>
     </div>

        <div class="sidebar-wrapper"  >
            <ul class="nav">
                <li class="active">
                    <a href="<?php echo e(route('your_informations',['patient_id'=>Session::get('admin_id')])); ?>">
                        <i class="pe-7s-culture"></i>
                        <p>Your information</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('admins')); ?>">
                        <i class="pe-7s-culture"></i>
                        <p>Admins mgt</p>
                    </a>
                </li>
            
                <li class="active">
                    <a href="<?php echo e(route('majors')); ?>">
                        <i class="pe-7s-id"></i>
                        <p>Majors mgt</p>
                    </a>
                </li>

                

                <li class="active">
                    <a href="<?php echo e(route('patients')); ?>">
                        <i class="pe-7s-users"></i>
                        <p>Patients mgt</p>
                    </a>
                </li>
                
                <li class="active">
                    <a href="<?php echo e(route('new_categories')); ?>">
                        <i class="pe-7s-folder"></i>
                        <p>new categories mgt</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('news')); ?>">
                        <i class="pe-7s-browser"></i>
                        <p>news mgt</p>
                    </a>
                </li>


                 <li class="active">
                    <a href="<?php echo e(route('doctors_mgt')); ?>">
                        <i class="pe-7s-add-user"></i>
                        <p>doctors mgt</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('patient_records')); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>patient record</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo e(route('get_chart')); ?>">
                        <i class="pe-7s-display1"></i>
                        <p>Appointment by day</p>
                    </a>
                </li>



                <li class="active">
                    <a href="<?php echo e(route('get_chart_monthly')); ?>">
                        <i class="pe-7s-display1"></i>
                        <p>Appointment by month</p>
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
                         <i class="pe-7s-note2"></i>
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
                         <i class="pe-7s-note2"></i>
                    </button>
                   
                    <a class="navbar-brand" href="">Admin</a>


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo e(route('logout_admin')); ?>">
                                <i class="fa fa-line-chart"></i>
                                <p>Log out</p>
                            </a>
                        </li>

                        
                    </ul>


                </div>
                
            </div>
        </nav>

        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
             </div>
                        
                 
               



               

       

    </div>
</div>


</body>
    <!--   Core JS Files  -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"  type="text/javascript"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js ')); ?>" type="text/javascript"></script>
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
    <script src="<?php echo e(asset('js/Chart.bundle.min.js')); ?>"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>


    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('ajax'); ?>



</html>
