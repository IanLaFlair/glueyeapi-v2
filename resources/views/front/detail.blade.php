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
                    <img class="card-img-top img-fluid" src="{{ url($data->folder.'/'.$data->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-16 mt-0">{{ $data->title }}</h4>
                        <br>
                        {!! $data->detail !!}
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>

@stop
