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
            <div class="col-3">
                <div class="card m-b-30">
                    <a href="{{ url('/create_tips') }}" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-bookmark-plus-outline"></i> Create New Tips</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="table_tips" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Act</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>

@stop
@section('scriptJS')
@include('tips.index_js')
@stop
