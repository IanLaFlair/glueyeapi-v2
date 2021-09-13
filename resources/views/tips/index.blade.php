@extends('index')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">List Tips Gula Darah</h4>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Act</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button">
                                        <i class="mdi mdi-content-save-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-primary" href="#" role="button">
                                        <i class="mdi mdi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button">
                                        <i class="mdi mdi-content-save-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-primary" href="#" role="button">
                                        <i class="mdi mdi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button">
                                        <i class="mdi mdi-content-save-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-primary" href="#" role="button">
                                        <i class="mdi mdi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button">
                                        <i class="mdi mdi-content-save-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-primary" href="#" role="button">
                                        <i class="mdi mdi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
