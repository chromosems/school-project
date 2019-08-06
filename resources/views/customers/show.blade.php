@extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customer Details'])

@endsection


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">


    <div class="card">
        <div class="card-header">{{$customer->service->name}}</div>
        <div class="col-md-12">
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-success" type="button">Get help</button>
                </div>
                <div class="col-sm-6 text-right">

                    <div class="col-sm-12">
                        <a href="{{route('customers.index')
                        }}">
                            <button class="btn btn-info text-right" type="button"><i class="fa
                            fa-backward">Back</i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-success">
                            <div class="card-header"><h2><b>Service:</b>{{$customer->service->name}}</h2>
                            </div>

                            <div class="card-body">
                                <div class="col-sm-8">
                                    <img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-thumbnail"
                                         width="200px">
                                    <h4><b>Date: </b>{{$customer->date}}</h4>
                                    <h4><b>First name: </b>{{$customer->first_name}}</h4>
                                    <h4><b>Last Name: </b>{{$customer->last_name}}</h4>
                                    <h4><b>Location:</b>{{$customer->location}}</h4>
                                    <h4><b>Phone Number: </b>{{$customer->phone_number}}</h4></div>
                                    <div class="col-sm-8">
                                    <h4><b>Problem Description: </b>{{$customer->problem_description}}</h4></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>



@endsection


