@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customer Details'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$customer->service}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('customer.index')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button">
                        Back
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h2><b>Service:</b>{{$customer->service}}</h2></div>
                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-thumbnail"
                                         width="200px"></div>
                                <h4><b>Date: </b>{{$customer->date}}</h4>
                                <h4><b>First name: </b>{{$customer->first_name}}</h4>
                                <h4><b>Last Name: </b>{{$customer->last_name}}</h4>
                                <h4><b>Location:</b>{{$customer->location}}</h4>
                                <h4><b>Phone Number: </b>{{$customer->phone_number}}</h4>
                                <h4><b>Problem Description: </b>{{$customer->problem_description}}</h4>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

