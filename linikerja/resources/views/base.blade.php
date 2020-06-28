<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LINIKERJA - Mitra Perusahaan Anda</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#" />
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
        <meta name="author" content="#" />
        <!-- Favicon icon -->
        <link rel="icon" href="assets\images\favicon.ico" type="image/x-icon" />
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets\bower_components\bootstrap\css\bootstrap.min.css" />
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="assets\icon\feather\css\feather.css" />
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets\css\style.css" />
        <link rel="stylesheet" type="text/css" href="assets\css\jquery.mCustomScrollbar.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    {{-- @if (Session::get('id') == null)
        <script>
            window.onload = function() {
                // similar behavior as clicking on a link
                window.location.href = "login";
            }
        </script>
    @else
        
    @endif --}}

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div class="contain">
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu"></i>
                            </a>
                            <a href="index-1.htm">
                                <img class="img-fluid" src="assets\images\logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="feather icon-maximize full-screen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <!-- <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-bell"></i>
                                            <span class="badge bg-c-pink">5</span>
                                        </div>
                                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="assets\images\avatar-4.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">John Doe</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="assets\images\avatar-3.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Joseph William</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="assets\images\avatar-4.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Sara Soudein</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image" />
                                            <span>{{Session::get('username')}}</span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="{{ url('/myProfile') }}"> <i class="feather icon-user"></i> Profil Saya </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/accLogOut') }}"> <i class="feather icon-log-out"></i> Keluar </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Sidebar inner chat end-->
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigatio-lavel">Navigation</div>
                                @if (Session::get('id_admin') == '')
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="">
                                            <a href="/dashboard">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Home</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/lowongan">
                                                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                                <span class="pcoded-mtext">Lowongan</span>
                                            </a>
                                        </li>
                                    </ul>                                    
                                @else
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="">
                                            <a href="/admin">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Home</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                                <span class="pcoded-mtext">Permintaan Baru</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="{{url('adminSertifikat')}}">
                                                        <span class="pcoded-mtext">Sertifikat</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{url('adminNilai')}}">
                                                        <span class="pcoded-mtext">Nilai</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{url('adminPengalaman')}}">
                                                        <span class="pcoded-mtext">Pengalaman Kerja</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="{{url('adminPerusahaan')}}">
                                                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                                <span class="pcoded-mtext">Perusahaan</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                                <span class="pcoded-mtext">Data Diri Pelamar</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="{{url('adminSertifikatAll')}}">
                                                        <span class="pcoded-mtext">Sertifikat</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{url('adminNilaiAll')}}">
                                                        <span class="pcoded-mtext">Nilai</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{url('adminPengalamanAll')}}">
                                                        <span class="pcoded-mtext">Pengalaman Kerja</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                @endif
                                
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 10]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>
                    You are using an outdated version of Internet Explorer, please upgrade <br />
                    to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="../files/assets/images/browser/chrome.png" alt="Chrome" />
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="../files/assets/images/browser/firefox.png" alt="Firefox" />
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="../files/assets/images/browser/opera.png" alt="Opera" />
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="../files/assets/images/browser/safari.png" alt="Safari" />
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="../files/assets/images/browser/ie.png" alt="" />
                                <div>IE (9 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
        <script type="text/javascript" src="assets\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="assets\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="assets\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="assets\bower_components\modernizr\js\modernizr.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="assets\bower_components\chart.js\js\Chart.js"></script>
        <!-- amchart js -->
        <script src="assets\pages\widget\amchart\amcharts.js"></script>
        <script src="assets\pages\widget\amchart\serial.js"></script>
        <script src="assets\pages\widget\amchart\light.js"></script>
        <script src="assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="assets\js\SmoothScroll.js"></script>
        <script src="assets\js\pcoded.min.js"></script>
        <!-- custom js -->
        <script src="assets\js\vartical-layout.min.js"></script>
        <script type="text/javascript" src="assets\pages\dashboard\custom-dashboard.js"></script>
        <script type="text/javascript" src="assets\js\script.min.js"></script>

        <script src="assets/pages/form-masking/inputmask.js" type="text/javascript"></script>
        <script src="assets/pages/form-masking/jquery.inputmask.js" type="text/javascript"></script>
        <script src="assets/pages/form-masking/autoNumeric.js" type="text/javascript"></script>
        <script src="assets/pages/form-masking/form-mask.js" type="text/javascript"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    </body>
</html>
