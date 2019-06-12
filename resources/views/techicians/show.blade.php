@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Technicians Details'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$techicians->first_name}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('technician.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button">
                        Back
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h2><b>Last Name:</b>{{$techicians->last_name}}</h2></div>
                        <div class="panel-body">
                            <div class="col-sm-4">
                                <img src="{{URL::to('/')}}/images/{{$techicians->image}}" class="img-thumbnail"
                                     width="500px"></div>
                            <div class="col-sm-6">
                                <h4><b>Date: </b>{{$techicians->date}}</h4>
                                <h4><b>First name: </b>{{$techicians->first_name}}</h4>
                                <h4><b>Last Name: </b>{{$techicians->last_name}}</h4>
                                <h4><b>position:</b>{{$techicians->position}}</h4>
                            </div>
                            <div class="col-sm-4">
                                <h4><b>Phone Number: </b>{{$techicians->phone_number}}</h4>
                                <h4><b>Job Type: </b>{{$techicians->job_type}}</h4>
                                <h4><b>Company Name: </b>{{$techicians->company_name}}</h4>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

