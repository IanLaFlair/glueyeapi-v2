<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Glu Eye Dashboard</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- DataTables -->
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="css/icons.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>

        <div class="wrapper-page">
                <div class="card card-pages shadow-none">

                    <div class="card-body">
                        <!-- <h5 class="font-18 text-center"><img src="assets/images/fire-login.png" height="18"> Fire Alarm System Monitoring</h5> -->
                        <h5 class="font-18 text-center">Glu Eye Dashboard</h5>

                        <form class="form-horizontal m-t-30" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            @if (Session::has('error_login'))
                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-account-alert"></i> {{ Session::get('error_login') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Email</label>
                                    <input class="form-control" type="text" required="required" name="email" id="email" placeholder="Masukan Email Anda">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" type="password" name="password" id="password" required="required" placeholder="Masukan Password Anda">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block btn-lg waves-effect waves-light" type="submit">Login</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-7">
                                    <!-- <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/metismenu.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/waves.min.js"></script>

        <!-- App js -->
        <script src="js/app.js"></script>

    </body>

</html>
