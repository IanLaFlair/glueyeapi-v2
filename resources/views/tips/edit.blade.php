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
                <form role="form" method="POST" action="{{ url('/edit_tips/'.$data->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{$data->title}}" required="" placeholder="Ubah judul tips">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <a class="btn btn-sm btn-info" data-toggle="modal" data-target=".bs-example-modal-center"><i class="mdi mdi-eye"></i></a>
                                <input class="form-control" accept="image/*" name="thumbnail" id="thumbnail" type="file" placeholder="Ubah thumbnail">
                            </div>
                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0">Thumbnail</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="card-img-top img-fluid" src="{{ url($data->folder.'/'.$data->image) }}" alt="Card image cap">
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail" id="detail" required="required" class="summernote">{{ $data->detail }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn-toolbar form-group mb-0">
                        <div class="">
                            <button type="button" class="btn btn-danger waves-effect waves-light m-r-5"> <span>Hapus</span> <i class="far fa-trash-alt"></i></button>
                            <button class="btn btn-primary waves-effect waves-light"> <span>Post</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
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
