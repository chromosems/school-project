@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Brokers'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Brokers:All</div>
        <div class="col-md-12">
            <div class="row">
                <br>
                <form action="/broker" method="POST" role="search">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for house location and prices "
                               name="search">
                    </div>
                </form>
                <div class="col-sm-12 text-right">
                    <a href="{{route('brokers.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Add A service
                    </a>
                </div>
            </div>
            <div class="row">

                @foreach ( $brokers as $broker)

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <a href="{{action('BrokersController@show',$broker->id)}}">
                                <div
                                    class="panel-heading"><h3><b>Broker
                                            name:</b>{{$broker->brokers_name}}</h3></div
                                >
                            </a>
                            <div class="panel-body">
                                <h4><b>description:</b>{{$broker->description}}</h4>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </div>



@endsection
