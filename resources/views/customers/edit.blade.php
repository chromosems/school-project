                            @extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'customers'])

@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
    <div class="card">
        <div class="card-header">Customer:Add</div>

        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br/>
                    @endif

                    <div class="row">

                        <div class="col-sm-12 text-right">
                            <a href="{{route('customers.index')}}" class="btn btn-info
                        text-right "
                               type="button"><i class="fa fa-book"></i>
                                View
                            </a>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('customers.update' ,$customer->id)}}" method="post"
                          enctype="multipart/form-data">
                        <!-- form begins here -->
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Date </label>
                                    <input type="date" class="form-control" placeholder="date"
                                           name="date" value="{{$customer->date}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First
                                    name" value="{{$customer->first_name}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name"
                                           value="{{$customer->last_name}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number"
                                           placeholder="phone number" value="{{$customer->phone_number}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="location"
                                           value="{{$customer->location}}">

                                </div>

                                <div
                                    class="form-group has-success d-flex flex-column">
                                    <label class="col-sm-6 text-right">Select
                                        Profile Image</label>
                                    <img src="{{URL::to('/')}}/images/{{$customer->image}}"
                                         class="img-thumbnail" width="100">
                                    <input type="file" name="image" class="py-3">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Select Service</label>
                                    <select class="form-control" name="service">
                                        <option
                                            value="{{$customer->id}}">{{$customer->service}}</option>
                                    </select>
                                </div>


                                <div class="form-group has-success">
                                    <label>Problem Description</label>
                                    <textarea type="text"
                                              name="problem_description"
                                              class="form-control"
                                              rows="20" cols="30" ;
                                    >{{$customer->problem_description}}
                                                                        </textarea>
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
