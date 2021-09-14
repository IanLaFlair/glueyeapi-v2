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
                <form role="form" method="POST" action="{{ url('/store_tips') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" type="text" required="required" placeholder="Masukan judul tips">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input class="form-control" accept="image/*" name="thumbnail" type="file"  required="required" placeholder="Masukan thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail" id="detail" required="required" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn-toolbar form-group mb-0">
                        <div class="">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> <span>Post</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- end container-fluid -->
</div>

@stop
@section('scriptJS')
@include('tips.create_js')
@stop
