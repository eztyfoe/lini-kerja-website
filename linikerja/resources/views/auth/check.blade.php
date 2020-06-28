<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adminty - Premium Admin Template by Colorlib</title>

        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#" />
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
        <meta name="author" content="#" />

        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="assets/bower_components/bootstrap/css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css" />

        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css" />

        <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css" />

        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css" />
        <script type="text/javascript" src="assets/bower_components/jquery/js/jquery.min.js"></script>
    </head>
    <body>
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

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-header">
                                            <div class="row align-items-end">
                                                <div class="col-lg-8">
                                                    <div class="page-header-title">
                                                        <div class="d-inline">
                                                            <h4>Verifikasi Email</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            {{--
                                                            <h5>Register Here</h5>
                                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                                        </div>
                                                        <div class="card-block">
                                                            @if(\Session::has('message'))
                                                            <div class="alert alert-danger">
                                                                <div>{{Session::get('message')}}</div>
                                                            </div>
                                                            @endif @if(\Session::has('alert-success'))
                                                            <div class="alert alert-success">
                                                                <div>{{Session::get('alert-success')}}</div>
                                                            </div>
                                                            @endif
                                                            <form action="{{ url('/sendEmailReq') }}" method="post">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 text-right">
                                                                        <!--  <button type="submit" class="btn btn-primary m-r-10">Submit Details</button> -->
                                                                        <input id="btn_submit" type="submit" name="submit" id="submit" class="btn btn-primary text-right btn-sm" value="Kirim">
                                                                        <!-- <button type="submit" class="btn btn-default">Reset</button> -->
                                                                        {{ csrf_field() }}
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="styleSelector"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <img src="assets/images/browser/chrome.png" alt="Chrome" />
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox" />
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera" />
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari" />
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="" />
                                <div>IE (9 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <script type="text/javascript" src="assets/bower_components/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="assets/pages/j-pro/js/jquery.ui.min.js"></script>
        <script type="text/javascript" src="assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="assets/pages/j-pro/js/jquery.j-pro.js"></script>

        <script type="text/javascript" src="assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        <script type="text/javascript" src="assets/bower_components/modernizr/js/modernizr.js"></script>
        <script type="text/javascript" src="assets/bower_components/modernizr/js/css-scrollbars.js"></script>

        <script type="text/javascript" src="assets/bower_components/i18next/js/i18next.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

        <script src="assets/js/pcoded.min.js" type="text/javascript"></script>
        <script src="assets/js/vartical-layout.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "UA-23581568-13");
        </script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>
    </body>
</html>
