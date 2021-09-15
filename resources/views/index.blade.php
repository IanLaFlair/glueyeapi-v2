<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Glu Eye Dashboard</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset ('images/favicon.ico') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset ('plugins/morris/morris.css') }}">

    <!-- DataTables -->
    <link href="{{ asset ('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset ('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Summernote css -->
    <link href="{{ asset ('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" />

    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation Section -->
    @include('layout.menu')

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

    <!-- Required datatable js -->
    <script src="{{ asset ('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset ('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset ('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset ('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset ('pages/datatables.init.js') }}"></script>

    <!--Summernote js-->
    <script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset ('js/app.js') }}"></script>

     <!-- Custom JS -->
     @yield('scriptJS')
</body>

</html>
