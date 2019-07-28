@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customers'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Customers:All</div>
        <div class="col-md-12">
            <br>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('customer.create')}}" class="btn
                        btn-primary
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus-circle"></i>
                        Register Complain
                    </a>
                </div>
            </div>
            <br>
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
                                        <button type="button" class="btn btn-block" data-toggle="modal"
                                                data-target="#edit-modal">
                                            <i class="fa fa-book">
                                            </i>
                                        </button>
                                    </a>

                                </div>
                                <a href="{{route('customer.edit',$customer->id)}}">
                                    <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                </a>

                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>


                            </td>

                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <center> <?php echo $customers->render();?></center>
    </div>
@endsection