<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/template_admin')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"
        rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" />
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/apexcharts-bundle/css/apexcharts.css"
        rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/template_admin')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('assets/template_admin')}}/assets/js/pace.min.js"></script>
    <!-- HighCharts CSS-->
    <link href="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/template_admin')}}/assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/template_admin')}}/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/template_admin')}}/assets/css/app.css" />
    <link rel="stylesheet" href="{{ asset('assets/template_admin')}}/assets/css/dark-sidebar.css" />
    <link rel="stylesheet" href="{{ asset('assets/template_admin')}}/assets/css/dark-theme.css" />
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        @include('layouts_admin.sidebar')
        <!--end sidebar-wrapper-->

        <!-- Topbar -->
        @include('layouts_admin.topbar')
        <!-- Topbar End -->

        <!-- Page Content -->
        <div class="page-wrapper">

            <!-- Content -->
            @yield('content')
            <!-- End Content -->

        </div>
        <!-- End Page Content -->

        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Data Sektoral @2020 | Developed By : <a href=""
                    target="_blank">mutia & nizza</a>
            </p>
        </div>
        <!-- end footer -->
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/template_admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/js/popper.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/js/bootstrap.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- highcharts js -->
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/highcharts.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/highcharts-more.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/variable-pie.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/solid-gauge.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/highcharts-3d.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/cylinder.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/funnel3d.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/exporting.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/export-data.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/accessibility.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/highcharts/js/highcharts-custom.script.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js">
    </script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/js/index2.js"></script>
    <!--Data Tables js-->
    <script src="{{ asset('assets/template_admin')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
        //Default data table
        $('#example').DataTable();
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });
        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
    </script>
    <!-- App JS -->
    <script src="{{ asset('assets/template_admin')}}/assets/js/app.js"></script>
</body>

</html>
