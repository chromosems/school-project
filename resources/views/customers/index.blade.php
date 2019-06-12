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
                <div class="row">
                @foreach($customers as $customer)
                   

                            <div class="col-md-4">
                <div class="panel panel-success">
                    <a href="{{action('CustomerController@show',$customer->id)}}"><div
                            class="panel-heading"><h3><b>Service:</b>{{$customer->service}}</h3></div></a>
                    <div class="panel-body">
                        <h4><b></b><img src="{{URL::to('/')}}/images/{{$customer->image}}" class="img-circle"
                                        width="100px"></h4>

                        <h4><b>Problem Description:</b>{{$customer->problem_description}}</h4>

                    </div>
                </div>
            </div>


            @endforeach
                </div>

                </div>
        </div>
       <center> <?php echo $customers->render();?></center>
@endsection
