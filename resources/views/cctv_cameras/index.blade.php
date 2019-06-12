@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'cctv_cameras'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">CCTV CAMERAS:All</div>

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

                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <a href="{{action('CctvCameraController@show',$cctv_camera->id)}}"><div
                                    class="panel-heading"><h3>{{$cctv_camera->company_name}}</h3></div
                                ></a>
                            <div class="panel-body">
                                <h4><b>Company Bio:</b>  {{$cctv_camera->bio}}</h4>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </div>

@endsection
