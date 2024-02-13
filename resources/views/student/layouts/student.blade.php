<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Glan School of Arts and Trade</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('admin/images/favicon.png')}}"/>
    <!-- Bootstrap -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/admin/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/admin/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/admin/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets/admin/css/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{asset('assets/admin/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('assets/admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/admin/css/custom.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('assets/admin/css/select2.min.css')}}" rel="stylesheet">
    <style>
        .VoteRow{
            width: 100%;
            margin: 16px auto;
            border: 5px solid #eee;
            box-shadow: 5px 2px 3px #ccc;
            padding: 16px;
        }
        .VoteRow strong{
            font-size: 14px;

        }
        .position{
            justify-content: space-between;
            width:80%;
        }
        
    </style>

   
  
</head>

<body onclick="javascript:countdown('Jan 28, 2019 12:00:00')" class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-user"></i> <span>Student</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{asset('assets/admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->usercode->personal_information->firstname }} </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{route('student.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                                <li><a href="{{route('student.candidates.index')}}"><i class="fa fa-user"></i> Apply COC </a></li>
                                <li><a href="{{route('student.votes.index')}}"><i class="fa fa-pencil"></i> Vote </a></li>
                                <li><a href="{{route('student.students.voteResult')}}"><i class="fa fa-tv"></i> Vote's Result </a></li>
                      
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                  
                    <!-- /menu footer buttons -->
                </div>
            </div>

             <!-- top navigation -->
            <div class="top_nav">
            <div class="nav_menu">
                <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
               
               
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="">
                    
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/admin/images/img.jpg')}}" alt="">{{ Auth::user()->usercode->personal_information->firstname }} {{ Auth::user()->usercode->personal_information->lastname }} 
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                       
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                    </a>  
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                        <a>
                            <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li>
                        <a>
                            <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li>
                        <div class="text-center">
                            <a>
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        </li>
                    </ul>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- @include('admin.partials.alerts') -->
                @include('student.partials.alerts')
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Glan School of Arts and Trades
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>




    <!-- jQuery -->
    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/admin/js/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/admin/js/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/admin/js/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('assets/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('assets/admin/js/select2.min.js')}}"></script>

 
    <!-- Datatables -->
    <script>
        $(document).ready(function() {
           //COUNTDOWN TIMER FOR COC
           //Date Start
           start_coc_countdown("{{$coc_timer->date_started}}");
           function start_coc_countdown(date){
                // Set the date we're counting down to
                var countDownDate = new Date(date).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("start_coc_demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                   
                    clearInterval(x);
                    document.getElementById("start_coc_demo").innerHTML = "FILING OF COC HAS NOW STARTED";
                }
                }, 1000);

            }
            //Date Ended
            end_coc_countdown("{{$coc_timer->date_ended}}");
            function end_coc_countdown(date){
                // Set the date we're counting down to
                var countDownDate = new Date(date).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("end_coc_demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("end_coc_demo").innerHTML = "FILING OF COC HAS NOW ENDED";
                }
                }, 1000);

            }
            //END
           

           //COUNTDOWN TIMER FOR ELECTION
           //Date Start
           start_e_countdown("{{$e_timer->date_started}}");
           function start_e_countdown(date){
                // Set the date we're counting down to
                var countDownDate = new Date(date).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("start_e_demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                   
                    clearInterval(x);
                    document.getElementById("start_e_demo").innerHTML = "VOTING HAS NOW STARTED";
                }
                }, 1000);

            }
            //Date Ended
            end_e_countdown("{{$e_timer->date_ended}}");
            function end_e_countdown(date){
                // Set the date we're counting down to
                var countDownDate = new Date(date).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("end_e_demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("end_e_demo").innerHTML = "VOTING HAS NOW ENDED";
                }
                }, 1000);

            }
            //END


         $("#position").select2({
                
            });


            $("#schoolyear").select2({
            });
            $("#semester").select2({
            });
            $("#studentlist").select2({
            }); 
            $("#rolelist").select2({
            });
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        sort: false,
                        buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
                'order': [[ 1, 'asc' ]],
                'columnDefs': [
                { orderable: false, targets: [0] }
                ]
            });
            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });


        $('#submitBtn').click(function() {
        /* when the button in the form, display the entered values in the modal */
        $('#lname').text($('#lastname').val());
        $('#fname').text($('#firstname').val());
        });

        $('#submit').click(function(){
            /* when the submit button in the modal is clicked, submit the form */
          
            $('#formfield').submit();
        });
    </script>
    <!-- /Datatables -->
</body>
</html>
