<!doctype html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/medical-logo-1-1.jpg')}}">
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

     <!--     Calendar      -->
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css ')}}"/>
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" /> --}}
    

    <!--     Fonts and icons     -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>

</head>
<body class="sidebar-mini">


<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="{{asset('homepage_asset/assets/asset/img/full-screen-image-3.jpg')}}">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a  class="simple-text logo-mini">
               <img src="{{asset('img/logo_clinic.png')}}" />
            </a>

            <a href="{{ route('index') }}" class="simple-text logo-normal">
                Medico
            </a>
        </div>

        <div class="sidebar-wrapper">

            <div class="user">
                <a href="{{ route('login_patient') }}">
                    <button class="btn btn-success btn-fill btn-wd" style="
    margin-left: 10px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 70px;
    padding-right: 70px;
    font-size: 30px;">
                            Login</button>
            </a>
             </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('index')}}" style="padding-right: 155px;">
                        <i class="pe-7s-home"></i>
                        <p>Homepage</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="#" style="padding-right: 150px;">
                        <i class="pe-7s-graph"></i>
                        <p>Single Link</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    


        <div class="main-content">
            <div class="container-fluid">


                    <!--      here you can write your content for the main area                     -->
                    @yield('frontpage')


            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                           
                        </li>

                        <!--        here you can add more links for the footer                       -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                  
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
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
    <script src="{{asset('js/Chart.bundle.min.js')}}"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('js/demo.js')}}"></script>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>

</html>
