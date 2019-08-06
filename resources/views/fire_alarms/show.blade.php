@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Fire Alarms'])

@endsection


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2">Fire Alarm</h3>
    </div>

    <div class="card">
        <div class="card-header">{{$fire_alarms->company_name}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('fire_alarms.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button">
                        Back
                    </a>
                </div>
            </div>

          {{--<div class="container">--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="card-header"><h2><b>Company Name:</b>{{$fire_alarms->company_name}}</h2></div>
                        <div class="card-body">
                            <div class="col-sm-3">
                            <img src="{{URL::to('/')}}/images/{{$fire_alarms->image}}" class="img-thumbnail"
                                 width="200px"></div>
                            <div class="col-sm-3">
                            <h4><b>Location: </b>{{$fire_alarms->location}}</h4>
                            <h4><b>Fire alarm type: </b>{{$fire_alarms->fire_alarm_type}}</h4>
                            <h4><b>Email: </b>{{$fire_alarms->email}}</h4>
                            <h4><b>Phone number: </b>{{$fire_alarms->phone_number}}</h4></div>
                            <div class="col-sm-6">
                                <h4><b>Company Bio: </b>{{$fire_alarms->bio}}</h4></div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{--</div>--}}

@endsection


