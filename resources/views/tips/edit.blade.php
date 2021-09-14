@extends('index')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Create Tips</h4>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="card m-b-30">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" required="" placeholder="Masukan judul tips">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input class="form-control" type="file" required="" placeholder="Masukan thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Detail</label>
                            <div class="summernote"></div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar form-group mb-0">
                    <div class="">
                        <button type="button" class="btn btn-danger waves-effect waves-light m-r-5"> <span>Hapus</span> <i class="far fa-trash-alt"></i></button>
                        <button class="btn btn-primary waves-effect waves-light"> <span>Post</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end container-fluid -->
</div>

@section('scriptJS')
@include('tips.create_js')
@stop
