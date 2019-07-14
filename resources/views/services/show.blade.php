@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => $service->name])

@endsection

@section('content')

    <div class="panel panel-default">
        @foreach($service->customers as $ticket)
            <div class="panel-heading">{{ $ticket->first_name }}</div>

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
                            <div class="panel-heading"><h2><b>Description:</b>{{ $ticket->problem_description }}</h2></div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
