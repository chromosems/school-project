@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Cctv Camera'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$cctv_cameras->company_name}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('cctv_cameras.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button">
                        Back
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h2><b>Company Name:</b>{{$cctv_cameras->company_name}}</h2></div>
                        <div class="panel-body">
                            <h4><b>Location: </b>{{$cctv_cameras->location}}</h4>
                            <h4><b>Date: </b>{{$cctv_cameras->date}}</h4>
                            <h4><b>Email: </b>{{$cctv_cameras->email}}</h4>
                            <h4><b>Phone number: </b>{{$cctv_cameras->phone_number}}</h4>
                            <h4><b>Camera Type: </b>  {{$cctv_cameras->cameras}}</h4>
                            <h4><b>Company Bio: </b>  {{$cctv_cameras->bio}}</h4>




                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>


@endsection

@
