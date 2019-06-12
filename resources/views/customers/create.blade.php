@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'customers'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Customer:Add</div>

        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <a href="{{route('customer.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                               type="button">
                                View
                            </a>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
                        <!-- form begins here -->
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Date </label>
                                    <input type="date" class="form-control" placeholder="date"
                                           name="date">
                                </div>

                                <div class="form-group has-success">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First name">
                                </div>

                                <div class="form-group has-success">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name">
                                </div>

                                <div class="form-group has-success">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number"
                                           placeholder="phone number">
                                </div>

                                <div class="form-group has-success">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="location">

                                </div>

                                <div class="form-group has-success d-flex flex-column">
                                    <label class="col-sm-6 text-right">Select Profile Image</label>
                                    <input type="file" name="image" class="py-3">
                                </div>

                            </div>


                            <div class="col-sm-6">


                                <div class="form-group has-success">
                                    <label>Select Service</label>
                                    <select class="form-control" name="service">
                                        <option value="select(default)">select</option>
                                        <option value="Fire alarm">fire alarm</option>
                                        <option value="CCTV camera">cctv camera</option>
                                        <option value="Access control">access control</option>
                                        <option value="Broker">House To Rent</option>
                                    </select>
                                </div>


                                <div class="form-group has-success">
                                    <label>Problem Description</label>
                                    <textarea type="text" name="problem_description" id="problem_description"
                                              class="form-control"
                                              rows="20" cols="30" ;></textarea>
                                </div>
                            </div>


                            <br>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>

                    </form><!-- form close --->
                </div>
            </div>
        </div>
    </div>
@endsection
