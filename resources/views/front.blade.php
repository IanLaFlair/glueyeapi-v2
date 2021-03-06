<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Glu Eye</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="plugins/morris/morris.css">

    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation Section -->
    @include('layout.front')

    <!-- Content Section -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <span class="d-none d-sm-inline-block">Crafted by Tim PKM-KI Politeknik Negeri Jakarta - Glu Eye © 2021</span>.
    </footer>
    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset ('js/waves.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset ('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset ('plugins/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset ('pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset ('js/app.js') }}"></script>

     <!-- Custom JS -->
     @yield('scriptJS')
</body>

</html>
