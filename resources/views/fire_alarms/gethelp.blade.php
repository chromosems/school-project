@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Customer Details'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$customer->service}}</div>
        <div class="col-md-12">
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-success" type="button">Get help</button>
                </div>
                <div class="col-sm-6 text-right">

                    <div class="col-sm-12">
                        <a href="{{route('customer.index')
                        }}">
                            <button class="btn btn-info text-right" type="button"><i class="fa
                            fa-backward"></i></button>
                        </a>
                    </div>
                </div>
            </div>
</div>
@endsection
