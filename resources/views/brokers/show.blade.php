@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Brokers'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$brokers->brokers_name}}</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('brokers.index')}}" style="height: 50px;width: 200px;" class="btn
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
                        <div class="panel-heading"><h2><b>Brokers Name:</b>{{$brokers->brokers_name}}</h2></div>
                         <div class="panel-body">
                             <span class="btn btn-sm btn-primary float-right" id="open-edit-details-modal">Edit</span></div>

                        <h4><b>Contact: </b>{{$brokers->contact}}</h4>
                            <h4><b> House Location: </b>{{$brokers->location}}</h4>
                            <h4><b>Date: </b>{{$brokers->date}}</h4>
                            <h4><b>Price: </b>{{$brokers->price}}</h4>
                            <h4><b>House Address: </b>{{$brokers->address}}</h4>
                            <h4><b>Address: </b>  {{$brokers->address}}</h4>
                            <h4><b>District: </b>  {{$brokers->district}}</h4>
                            <h4><b>House Description: </b> {{$brokers->description}}</h4>



                        </div>
                    </div>
                </div>


             </div>
        </div>
        </div>

    </div>
    @endsection

<div id="edit-details-modal" class="modal-content">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card mt-5">
                <div class="card-header"><h5>Edit the details for :{{$brokers->brokers_name}} <span class="float-right"
                                                                                         id="close-edit-details-modal"
                                                                                         style="cursor: pointer;
                                                                                             color: #ff0d21;
"><b>X</b></span>
                    </h5></div>

                <div class="card-body">
                    <form action="{{route('brokers.update')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <h3>Broker Information</h3>
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Date </label>
                                    <input type="date" class="form-control" name="date"  placeholder="date"
                                           value="{{$brokers->date}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Brokers Name</label>
                                    <input type="text" class="form-control" name="brokers_name" placeholder="Names"
                                           value="{{$brokers->brokers_name}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact" placeholder="contact"
                                           value="{{$brokers->contact}}">
                                </div>

                                <div class="form-group has-success">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="@info.com"
                                           value="{{$brokers->address}}">
                                </div>

                                <h3>House Details</h3>

                            </div>


                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="location"
                                           value="{{$brokers->location}}">

                                </div>


                                <div class="form-group has-success">
                                    <label>District</label>
                                    <input type="text" name="district" class="form-control" placeholder="District"
                                           value="{{$brokers->district}}">
                                </div>


                                <div class="form-group has-success">
                                    <label>Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="price"
                                           value="{{$broker->price}}">
                                </div>


                                <div class="form-group has-success">
                                    <label>House Description</label>
                                    <textarea type="text" name="description" id="description"
                                              class="form-control"
                                              rows="15  " cols="20" ; value="{{$brokers->description}}"></textarea>
                                </div>
                            </div>


                            <button class="btn btn-primary btn-block">Update User Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('admin.layouts.scripts.scripts')
    <script src="{{asset('js/brokers.js')}}"></script>
@endpush
@push('admin.layouts.styles')
    <link rel="stylesheet" href="{{asset('css/brokers.css')}}">

@endpush





