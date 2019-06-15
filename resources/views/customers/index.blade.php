@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customers'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Customers:All</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('customer.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Register Complain
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <!-- <th></th> -->
                        <th>Date</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Location</th>
                        <th>Service</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->date}}</td>
                            <td><img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-thumbnail"
                                     width="100px"></td>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->location}}</td>
                            <td>{{$customer->service}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{action('CustomerController@show',$customer->id)}}">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#edit-modal">
                                            <i class="fa fa-book">
                                            </i>
                                        </button>
                                    </a>

                                </div>
                            </td>


                @endforeach

            </div>
        </div>
        <center> <?php echo $customers->render();?></center>
@endsection
