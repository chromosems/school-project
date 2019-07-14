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
                    <a href="{{route('technician.index')
                        }}">
                        <button class="btn btn-info text-right" type="button"><i class="fa
                            fa-backward"></i></button>
                    </a>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-success">
                            <center>
                                <div class="panel-heading"><h2><b>Last
                                            Name:</b>{{$techicians->last_name}}</h2></div>
                            </center>
                            <div class="panel-body">
                                <center>

                                    <img src="{{URL::to('/')}}/images/{{$techicians->image}}" class="img-thumbnail"
                                         width="250px"></center>
                                <br>
                                <br>
                                <br>

                                <div class="col-sm-4">
                                    <h4><b>Date: </b>{{$techicians->date}}</h4>
                                    <h4><b>First name: </b>{{$techicians->first_name}}</h4></div>
                                <div class="col-sm-4">
                                    <h4><b>Last Name: </b>{{$techicians->last_name}}</h4>
                                    <h4><b>position:</b>{{$techicians->position}}</h4>
                                    <h4><b>Phone Number: </b>{{$techicians->phone_number}}</h4></div>
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

