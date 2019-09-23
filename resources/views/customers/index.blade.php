@extends('layouts.layout')

@section('header')

@include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customers'])

@endsection


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customers</h1>
</div>

<div class="card">
    <div class="card-header">Customers:All</div>
    <div class="card-body">
        <div class="col-md-12">
            <br>
            <!-- <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('tickets.create')}}" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus-circle"></i>
                        Create A ticket
                    </a>
                </div>
            </div> -->
            <br>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
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
                            <td><img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-rounded"
                                     width="50px"></td>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->location}}</td>
                            <td>{{$customer->service->name}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{action('CustomerController@show',$customer->id)}}">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">
                                            <i class="fa fa-book">View
                                            </i>
                                        </button></a>
                                    &nbsp;
                                <form method="post" action="{{action('CustomerController@destroy',$customer->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                </form>
                                </div>
                            </td>

                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<center> <?php echo $customers->render();?></center>
</div>
@endsection
