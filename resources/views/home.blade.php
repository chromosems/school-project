@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Dashboard'])

@endsection


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

@endsection

