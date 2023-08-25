<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project TA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/template')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public/template')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('public/template')}}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public/template')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('public/template')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    @include('template.saction.header')
    <!-- End Header Top Area -->
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard One</a></li>
                                            <li><a href="index-2.html">Dashboard Two</a></li>
                                        </ul>
                                    </li>

                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Data Suhu Air</a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="animations.html">Animations</a></li>
                                            <li><a href="google-map.html">Google Map</a></li>
                                            <li><a href="data-map.html">Data Maps</a></li>
                                            <li><a href="code-editor.html">Code Editor</a></li>
                                            <li><a href="image-cropper.html">Images Cropper</a></li>
                                            <li><a href="wizard.html">Wizard</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Pemberian Pakan</a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="flot-charts.html">Flot Charts</a></li>
                                            <li><a href="bar-charts.html">Bar Charts</a></li>
                                            <li><a href="line-charts.html">Line Charts</a></li>
                                            <li><a href="area-charts.html">Area Charts</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="normal-table.html">Normal Table</a></li>
                                            <li><a href="data-table.html">Data Table</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-components.html">Form Components</a></li>
                                            <li><a href="form-examples.html">Form Examples</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="notification.html">Notifications</a>
                                            </li>
                                            <li><a href="alert.html">Alerts</a>
                                            </li>
                                            <li><a href="modals.html">Modals</a>
                                            </li>
                                            <li><a href="buttons.html">Buttons</a>
                                            </li>
                                            <li><a href="tabs.html">Tabs</a>
                                            </li>
                                            <li><a href="accordion.html">Accordion</a>
                                            </li>
                                            <li><a href="dialog.html">Dialogs</a>
                                            </li>
                                            <li><a href="popovers.html">Popovers</a>
                                            </li>
                                            <li><a href="tooltips.html">Tooltips</a>
                                            </li>
                                            <li><a href="dropdown.html">Dropdowns</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <!-- Main Menu area start-->
        <div class="main-menu-area mg-tb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                            <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Dashboard </a>
                            </li>
                            <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-bar-chart"></i> Indikator Suhu Air </a>
                            </li>
                            <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-bar-chart"></i> Indikator pH Air </a>
                            </li>
                            <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-form"></i> Jumlah Pakan Ikan </a>
                            </li>
                            <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-support"></i> Data User </a>
                            </li>
                            <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Logout </a>
                            </li>
                            {{-- <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
                            </li>
                            <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
                            </li> --}}
                        </ul>
                        <div class="tab-content custom-menu-content">
                            <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="{{url('admin/front-and/dashboard')}}">Dashboard One</a>
                                    </li>
                                    <li><a href="index-2.html">Dashboard Two</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="inbox.html">Tambah Data</a>
                                    </li>
                                    <li><a href="view-email.html">Edit Data</a>
                                    </li>
                                    <li><a href="compose-email.html">Lihat Data</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="inbox.html">Tambah Data</a>
                                    </li>
                                    <li><a href="view-email.html">Edit Data</a>
                                    </li>
                                    <li><a href="compose-email.html">Lihat Data</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="inbox.html">Tambah Data</a>
                                    </li>
                                    <li><a href="view-email.html">Edit Data</a>
                                    </li>
                                    <li><a href="compose-email.html">Lihat Data</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="normal-table.html">Normal Table</a>
                                    </li>
                                    <li><a href="data-table.html">Data Table</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="form-elements.html">Form Elements</a>
                                    </li>
                                    <li><a href="form-components.html">Form Components</a>
                                    </li>
                                    <li><a href="form-examples.html">Form Examples</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="notification.html">Notifications</a>
                                    </li>
                                    <li><a href="alert.html">Alerts</a>
                                    </li>
                                    <li><a href="modals.html">Modals</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="accordion.html">Accordion</a>
                                    </li>
                                    <li><a href="dialog.html">Dialogs</a>
                                    </li>
                                    <li><a href="popovers.html">Popovers</a>
                                    </li>
                                    <li><a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li><a href="dropdown.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                    <li><a href="color.html">Color</a>
                                    </li>
                                    <li><a href="login-register.html">Login Register</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="sale-statistic-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                    </div>
                </div>
                @yield('content')
            </div>
        </div> --}}
        {{-- <div class="content-wrapper">
            <div class="container">
              <div class="row">

              </div>
            </div>
            @yield('content')
        </div> --}}
        <div class="sale-statistic-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Hallo, Welcome to Sistem !!</h2>
                                    <p2>Monitoring & Pemberian Pakan Otomatis pada Kolam Ikan</p2>
                                </div>
                            </div>
                            <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                            <div class="email-statis-inner notika-shadow">
                                <div class="email-ctn-round">
                                    <div class="email-rdn-hd text-center">
                                        <h2>Statistic pH Air</h2>
                                    </div>
                                    <div
                                    style="border-radius: 50%; margin: 0 auto; width: 150px; height: 150px; border: 6px solid #0D99FF; color: #000000; text-align: center; font: 32px Arial, sans-serif; display: flex; flex-direction: column; justify-content: center;">

                                    <h4 style="margin: 0; font-size: 18px; font-weight: bold; color: #0D99FF;">pH</h4>
                                    <div
                                        style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 50%;">
                                        <span id="suhu" style="font-size: 35px;">76°</span>
                                        <span style="font-size: 16px; font-weight: bold;">Celsius</span>
                                    </div>
                                </div>
                                    <div class="email-round-gp">
                                        <div class="email-round-pro">
                                            <div class="email-signle-gp">
                                                <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                            </div>
                                            <div class="email-ctn-nock">
                                                <p>pH Tertinggi</p>
                                            </div>
                                        </div>
                                        <div class="email-round-pro">
                                            <div class="email-signle-gp">
                                                <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                            </div>
                                            <div class="email-ctn-nock">
                                                <p>pH Terendah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                            <div class="email-statis-inner notika-shadow">
                                <div class="email-ctn-round">
                                    <div class="email-rdn-hd">
                                        <h2>Statistic Suhu Air</h2>
                                    </div>
                                    <div
                                    style="border-radius: 50%; margin: 0 auto; width: 150px; height: 150px; border: 6px solid #0D99FF; color: #000000; text-align: center; font: 32px Arial, sans-serif; display: flex; flex-direction: column; justify-content: center;">

                                    <h4 style="margin: 0; font-size: 18px; font-weight: bold; color: #0D99FF;">Suhu</h4>
                                    <div
                                        style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 50%;">
                                        <span id="suhu" style="font-size: 35px;">76°</span>
                                        <span style="font-size: 16px; font-weight: bold;">Celsius</span>
                                    </div>
                                </div>
                                    <div class="email-round-gp">
                                        <div class="email-round-pro">
                                            <div class="email-signle-gp">
                                                <input type="text" class="knob" value="0" data-rel="60" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                            </div>
                                            <div class="email-ctn-nock">
                                                <p>Bounce Rate</p>
                                            </div>
                                        </div>
                                        <div class="email-round-pro">
                                            <div class="email-signle-gp">
                                                <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                            </div>
                                            <div class="email-ctn-nock">
                                                <p>Total Opened</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-5 col-xs-12">
                        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                                <div
                                    style="border-radius: 50%; margin: 0 auto; width: 150px; height: 150px; border: 6px solid #0D99FF; color: #000000; text-align: center; font: 32px Arial, sans-serif; display: flex; flex-direction: column; justify-content: center;">

                                    <h4 style="margin: 0; font-size: 18px; font-weight: bold; color: #0D99FF;">Suhu</h4>
                                    <div
                                        style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 50%;">
                                        <span id="suhu" style="font-size: 35px;">76°</span>
                                        <span style="font-size: 16px; font-weight: bold;">Celsius</span>
                                    </div>
                                </div>
                                <div
                                    style="border-radius: 50%; margin: 0 auto; width: 150px; height: 150px; border: 6px solid #0D99FF; color: #000000; text-align: center; font: 32px Arial, sans-serif; display: flex; flex-direction: column; justify-content: center;">

                                    <h4 style="margin: 0; font-size: 18px; font-weight: bold; color: #0D99FF;">Suhu</h4>
                                    <div
                                        style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 50%;">
                                        <span id="suhu" style="font-size: 45px;">76°</span>
                                        <span style="font-size: 24px; font-weight: bold;">Celcius</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sale Statistic area-->
        <!-- Start Email Statistic area-->

        <!-- End Email Statistic area-->
        <!-- Start Realtime sts area-->

        <!-- End Realtime sts area-->
        <!-- Start Footer area-->


    @include('template.saction.footer')

    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{url('public/template')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('public/template')}}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{url('public/template')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{url('public/template')}}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{url('public/template')}}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('public/template')}}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('public/template')}}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{url('public/template')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{url('public/template')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{url('public/template')}}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('public/template')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{url('public/template')}}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{url('public/template')}}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('public/template')}}/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{url('public/template')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/template')}}/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{url('public/template')}}/js/flot/jquery.flot.js"></script>
    <script src="{{url('public/template')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{url('public/template')}}/js/flot/curvedLines.js"></script>
    <script src="{{url('public/template')}}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{url('public/template')}}/js/knob/jquery.knob.js"></script>
    <script src="{{url('public/template')}}/js/knob/jquery.appear.js"></script>
    <script src="{{url('public/template')}}/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{url('public/template')}}/js/wave/waves.min.js"></script>
    <script src="{{url('public/template')}}/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{url('public/template')}}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{url('public/template')}}/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="{{url('public/template')}}/js/chat/moment.min.js"></script>
    <script src="{{url('public/template')}}/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('public/template')}}/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="{{url('public/template')}}/js/tawk-chat.js"></script>
</body>

</html>
