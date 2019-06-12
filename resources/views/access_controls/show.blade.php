@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Access Control'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$access_controls->company_name}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('access_controls.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button">
                        Back
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h2>{{$access_controls->company_name}}</h2></div>
                        <div class="panel-body">
                            <h4><b>Date: </b>{{$access_controls->date}}</h4>
                            <h4><b>Access control type: </b>{{$access_controls->access_control}}</h4>
                            <h4><b>Location: </b>{{$access_controls->location}}</h4>
                            <h4><b>Phone Number: </b>{{$access_controls->phone_number}}</h4>
                            <h4><b>Problem Description: </b>{{$access_controls->bio}}</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h2></h2></div>
                        <div class="panel-body">
                            The last of the existing sales wil be executed here
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
