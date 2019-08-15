@extends('layouts.layout')



@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>


    <div class="card">
        <div class="card-header">{{$customer->service->name}}</div>
        <div class="col-md-12">
            <br>
            <div class="row">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2 text-right">

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
                    <div class="col-md-12">

                        <div class="panel panel-success">
                            <center>
                                <div class="panel-heading"><h2><b>Last
                                            Name:</b>{{$customer->last_name}}</h2></div>
                            </center>
                        </div>
                            <div class="card-body">
                                <center>

                                    <img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-thumbnail"
                                         width="250px"></center>
                                <br>
                                <br>
                                <br>
                                 <div class="row">
                                <div class="col-sm-6">
                                    <h4><b>Date: </b>{{$customer->date}}</h4>
                                    <h4><b>First name: </b>{{$customer->first_name}}</h4>
                            
                               
                                    <h4><b>Last Name: </b>{{$customer->last_name}}</h4></div>
                                     <div class="col-sm-6">
                                    <h4><b>location:</b>{{$customer->location}}</h4>
                                    <h4><b>Phone Number: </b>{{$customer->phone_number}}</h4>


                            </div>
                        </div>

                    </div>


            
            </div>
        </div>


        </div>


    </div>


    
@endsection


