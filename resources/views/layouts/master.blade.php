<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('vendors/css/vendor.bundle.base.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=" {{ asset('vendors/font-awesome/css/font-awesome.min.css') }} " />
    <link rel="stylesheet" href=" {{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" {{asset('css/style.css') }} ">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{asset('images/favicon.png') }} " />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.inc.navigation')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        @include('backend.inc.sidebar')

        @yield('main')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('backend.inc.footer')
        <!-- partial -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@yield('modal')
<!-- container-scroller -->
<!-- plugins:js -->
<script src=" {{ asset('vendors/js/vendor.bundle.base.js') }} "></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=" {{ asset('vendors/chart.js/Chart.min.js') }} "></script>
<script src=" {{ asset('vendors/jquery-circle-progress/js/circle-progress.min.js') }} "></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=" {{ asset('js/off-canvas.js') }} "></script>
<script src=" {{ asset('js/hoverable-collapse.js') }} "></script>
<script src=" {{ asset('js/misc.js') }} "></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
@yield('js')
</body>
</html>
