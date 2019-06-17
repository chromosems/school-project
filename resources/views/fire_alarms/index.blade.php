@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'FireAlarm|Companies|All'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Fire Alarm:All</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('fire_alarms.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Register A service
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($fire_alarms as $fire_alarm)
                    <div class="col-sm-6">

                        <div class="panel panel-success">
                            <a href="{{action('FireAlarmController@show',$fire_alarm->id)}}">
                                <div
                                    class="panel-heading"><h3><b>Company
                                            name:</b>{{$fire_alarm->company_name}}</h3></div
                                >
                            </a>
                            <div class="panel-body">
                                <div class="col-sm-2">
                                    <img src="{{URL::to('/')}}/images/{{$fire_alarm->image}}" class="img-thumbnail"
                                         width="100px"></div>
                                <div class="col-sm-10">
                                    <h4><b>Bio:</b>{{$fire_alarm->bio}}</h4></div>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </div>

@endsection
