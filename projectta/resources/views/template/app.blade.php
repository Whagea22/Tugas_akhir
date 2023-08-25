<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SI Moring</title>

    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="{{ url('public/template2') }}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ url('public/template2') }}/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="{{ url('public/template2') }}/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet"
        href="{{ url('public/template2') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
        href="{{ url('public/template2') }}/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ url('public/template2') }}/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">
    <!-- loader Start -->
    {{-- <div id="loading">
		<div id="loading-center">
		</div>
	</div> --}}
    <!-- loader END -->
    <!-- Wrapper Start -->

    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default ">
            @include('template.saction.sidebar')
            @include('template.saction.header')
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('template.saction.footer')
    </div>

    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ url('public/template2') }}/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ url('public/template2') }}/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ url('public/template2') }}/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ url('public/template2') }}/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="{{ url('public/template2') }}/assets/js/app.js"></script>


</body>

</html>
