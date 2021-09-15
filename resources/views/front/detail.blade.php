@extends('front')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="{{ url('upload/thumbnail/thumbnail_20210915_124315/thumbnail_20210915_124315_view.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-16 mt-0">Title</h4>
                        <br>
                        <p class="card-text">Some quick example text to build on the card title and make
                            up the bulk of the card's content.</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>

@stop
