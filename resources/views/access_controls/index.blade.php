@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Access Control'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">ACCESS CONTROL:All</div>
        <div class="col-md-12">

            <div class="row">
                <br>
                <form action="/access" method="POST" role="search">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for access control " name="search">
                    </div>
                </form>
                <div class="col-sm-12 text-right">
                    <a href="{{route('access_controls.create')}}" style="height: 50px;width: 200px;" class="btn
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

                @foreach ( $access_controls as $access_control)

                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <a href="{{action('AccessControlsController@show',$access_control->id)}}"><div
                                    class="panel-heading"><h3>{{$access_control->company_name}}</h3></div
                                ></a>
                            <div class="panel-body">
                                <h4><b>Company Bio:</b>  {{$access_control->bio}}</h4>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        </div>
    </div>

@endsection
