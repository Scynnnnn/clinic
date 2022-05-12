<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/icon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.1')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    {{-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> --}}


    <!--     Fonts and icons     -->
    {{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
        <div class="sidebar" data-color="black" data-image="{{asset('img/doctor_sidebar.jpg')}}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                DO
            </a>

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
               {{Session::get('name')}}
            </a>
        </div>

        <div class="sidebar-wrapper"  >
            <ul class="nav">
                

                 <li class="active">
                    <a href="{{route('doctors')}}">
                        <i class="pe-7s-add-user"></i>
                        <p>doctors Info</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('view_update_doctor',['doctor_id'=>Session::get('doctor_id')])}}">
                        <i class="pe-7s-add-user"></i>
                        <p>Manage Information</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('patient_record_mgt')}}">
                        <i class="pe-7s-note2"></i>
                        <p>patient record</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('view_todo_list')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Todo list</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('demo')}}">
                        <i class="pe-7s-note2"></i>
                        <p>demo</p>
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
                   
                    <a class="navbar-brand" href="">Doctor</a>


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('logout_doctor')}}">
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

                
                    
                    @yield('content')
                
             </div>
                        
                 
               



               

       

    </div>
</div>


</body>
    @stack('ajax')
    <!--   Core JS Files  -->
    <script src="{{asset('js/jquery.min.js')}}"  type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js ')}}" type="text/javascript"></script>
    <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>


    <!--  Forms Validations Plugin -->
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset('js/moment.min.js')}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
        <script src="{{asset('js/bootstrap-switch-tags.min.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{asset('js/sweetalert2.js')}}"></script>

    <!-- Vector Map plugin -->
    <script src="{{asset('js/jquery-jvectormap.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

    <!-- Wizard Plugin    -->
    <script src="{{asset('js/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{asset('js/bootstrap-table.js')}}"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="{{asset('js/jquery.datatables.js')}}"></script>


    <!--  Full Calendar Plugin    -->
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    {{-- <script src="{{asset('js/demo.js')}}"></script> --}}

    



</html>
