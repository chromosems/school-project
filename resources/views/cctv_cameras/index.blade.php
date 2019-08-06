@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'cctv_cameras'])

@endsection


@section('content')\

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2">Cctv cameras</h3>
    </div>

    <div class="card">
        <div class="card-header">CCTV CAMERAS:All</div>

        <div class="col-md-12">
            <br>
            <form action="/observe" method="POST" role="search">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search for Cctv cameras " name="search">
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('cctv_cameras.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Add A service
                    </a>
                </div>
            </div>
            <div class="row">

                @foreach ( $cctv_cameras as $cctv_camera)

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <a href="{{action('CctvCameraController@show',$cctv_camera->id)}}">
                                <div
                                    class="card-header"><h3>{{$cctv_camera->company_name}}</h3></div
                                >
                            </a>
                            <div class="card-body">
                                <div class="col-sm-2">
                                    <img src="{{URL::to('/')}}/images/{{$cctv_camera->image}}" class="img-thumbnail"
                                         width="100px"></div>
                                <div class="col-sm-10">
                                    <h4><b>Company Bio:</b> {{$cctv_camera->bio}}</h4></div>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </div>

@endsection




