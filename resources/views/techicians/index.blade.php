@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Technicians'])

@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Technicians:All</div>
        <div class="col-md-12">
            <div class="row">
                <br>
                <form action="/technician" method="POST" role="search">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for house location and prices "
                               name="search">
                    </div>
                </form>
                <div class="col-sm-12 text-right">
                    <a href="{{route('technician.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Add A technician
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($techicians as $techician)
                    <div class="col-sm-3 ">
                        <div class="panel panel success">
                            <a href="{{action('TechicianController@show',$techician->id)}}">
                                <div
                                    class="panel-heading"><h3>First Name
                                        <i> {{$techician->first_name}}</i></h3></div>
                            </a>

                            <div class="panel-body">
                                <h4><b></b><img src="{{URL::to('/')}}/images/{{$techician->image}}" class="thumbnail"
                                                height="300px" width="350px"></h4>
                                <h3>Company Name</h3>: {{$techician->company_name}}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection
