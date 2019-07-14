@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Company'])

@endsection


@section('content')

    <div class="panel panel-default">
        @foreach($services as $service)
            <div class="panel-heading">{{$service->name}}</div>



            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="#" style="height: 50px;width: 200px;" class="btn
                    btn-success
                    text-right "
                           type="button">
                            Back
                        </a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h2><b>Bio:</b>{{$service->bio}}</h2></div>
                            @endforeach
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>


                </div>
            </div>


    </div>


@endsection

@
