<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>
        @yield('title', 'Ayu Nindya Ariesta')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/html/assets/media/image/favicon.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/assets/html/vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('/assets/html/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('/assets/html/vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- App css -->
        <link rel="stylesheet" href="{{ asset('/assets/html/assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')
</head>
<body class="dark">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
@include('layout/sidebar')
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    @include('layout/header')
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        @include('layout/navigator')
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            @yield('body')

        <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> “Sesi akan berakhir, apakah anda ingin memperpanjang sesi?”</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close">Close</button>
                    <button type="button" class="btn btn-primary" id="ok">Ok</button>
                </div>
                </div>
            </div>
        </div>

            <!-- ./ Content -->

            <!-- Footer -->
            @include('layout/footer')
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="{{ asset('/assets/html/vendors/bundle.js') }}"></script>

    <!-- Apex chart -->
    <script src="{{ asset('/assets/html/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('/assets/html/vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ asset('/assets/html/vendors/dataTable/datatables.min.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ asset('/assets/html/assets/js/examples/pages/dashboard.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ asset('/assets/html/assets/js/app.min.js') }}"></script>

    <script src="{{ asset('/assets/html/js/jquery.idle.js') }}"></script>

    <script src="{{ asset('/assets/html/js/session.js') }}"></script>

    @yield('script')
</body>
</html>
