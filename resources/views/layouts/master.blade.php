<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('image/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @yield('nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        @yield('main')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @yield('footer')
        <!-- partial -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=" {{ asset('js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=" {{ asset('js/Chart.min.js') }} "></script>
<script src=" {{ asset('js/circle-progress.min.js') }} "></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=" {{ asset('js/off-canvas.js') }} "></script>
<script src=" {{ asset('js/hoverable-collapse.js') }} "></script>
<script src=" {{ asset('js/misc.js') }} "></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src=" {{ asset('js/dashboard.js') }} "></script>
 <!--End custom js for this page -->
</body>
</html>
