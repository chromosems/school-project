@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customer Details'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$customer->service}}</div>
        <div class="col-md-12">
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-success" type="button">Get help</button>
                </div>
                <div class="col-sm-6 text-right">

                    <div class="col-sm-12">
                        <a href="{{route('customer.index')
                        }}">
                            <button class="btn btn-info text-right" type="button"><i class="fa
                            fa-backward"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h2><b>Service:</b>{{$customer->service}}</h2>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-thumbnail"
                                         width="200px">
                                    <h4><b>Date: </b>{{$customer->date}}</h4>
                                    <h4><b>First name: </b>{{$customer->first_name}}</h4>
                                    <h4><b>Last Name: </b>{{$customer->last_name}}</h4>
                                    <h4><b>Location:</b>{{$customer->location}}</h4>
                                    <h4><b>Phone Number: </b>{{$customer->phone_number}}</h4></div>
                                <div class="col_sm_8">
                                    <h4><b>Problem Description: </b>{{$customer->problem_description}}</h4></div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-danger" type="button">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="col-sm-6 text-right">

                                    <div class="col-sm-12">
                                        <!-- Modal -->

                                        <button class="btn btn-info text-right" type="button" data-toggle="modal"
                                                data-target="#exampleModalLong"><i class="fa
                                            fa-edit"></i>
                                        </button>
                                    </div>
                                    <!-- Modal content-->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                        Customer Details for: {{$customer->first_name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <form action="{{route('customer.update','$id')}}"
                                                              method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group has-success">
                                                                        <label>Date </label>
                                                                        <input type="date" class="form-control"
                                                                               placeholder="date"
                                                                               name="date" value="{{$customer->date}}">
                                                                    </div>

                                                                    <div class="form-group has-success">
                                                                        <label>First Name</label>
                                                                        <input type="text" class="form-control"
                                                                               name="first_name" placeholder="First
                                                                               name" value="{{$customer->first_name}}">
                                                                    </div>

                                                                    <div class="form-group has-success">
                                                                        <label>Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                               name="last_name" placeholder="Last
                                                                               name" value="{{$customer->last_name}}">
                                                                    </div>

                                                                    <div class="form-group has-success">
                                                                        <label>Phone Number</label>
                                                                        <input type="text" class="form-control"
                                                                               name="phone_number"
                                                                               placeholder="phone number"
                                                                               value="{{$customer->phone_number}}">
                                                                    </div>

                                                                    <div class="form-group has-success">
                                                                        <label>Location</label>
                                                                        <input type="text" class="form-control"
                                                                               name="location" placeholder="location"
                                                                               value="{{$customer->location}}">

                                                                    </div>

                                                                    <div
                                                                        class="form-group has-success d-flex flex-column">
                                                                        <label class="col-sm-6 text-right">Select
                                                                            Profile Image</label>
                                                                        <img src="{{URL::to('/')
                                                                        }}/images/{{$customer->image}}"
                                                                             class="img-thumbnail" width="100">
                                                                        <input type="file" name="image" class="py-3">
                                                                    </div>

                                                                </div>


                                                                <div class="col-sm-6">


                                                                    <div class="form-group has-success">
                                                                        <label>Select Service</label>
                                                                        <select class="form-control" name="service"
                                                                                value="{{$customer->service}}">
                                                                            <option value="select">select</option>
                                                                            <option value="Fire alarm">fire alarm
                                                                            </option>
                                                                            <option value="CCTV camera">cctv camera
                                                                            </option>
                                                                            <option value="Access control">access
                                                                                control
                                                                            </option>
                                                                            <option value="Broker">House To Rent
                                                                            </option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group has-success">
                                                                        <label>Problem Description</label>
                                                                        <textarea type="text"
                                                                                  name="problem_description"
                                                                                  value="{{$customer->problem_description}}"
                                                                                  class="form-control"
                                                                                  rows="20" cols="30" ;>

                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary btn-block">Update
                                                        Customer
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>



@endsection


