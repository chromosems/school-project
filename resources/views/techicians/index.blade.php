@extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Technicians'])

@endsection


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Technicians</h1>
    </div>

    <div class="card">
        <div class="card-header">Technicians:All</div>
        <div class="col-md-12">
                <br>
               
                <div class="col-sm-12 text-right">
                    <a href="{{route('technicians.create')}}"  class="btn
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
                                    class="panel-heading"><h3>
                                        <i>View Technician Details Here {{$techician->first_name}}</i></h3></div>
                            </a>

                            <div class="panel-body">
                                <h6><b></b><img src="{{URL::to('/')}}/images/{{$techician->image}}" class="thumbnail"
                                                height="100px" width="150px"></h6>
                                <h6>Company Name</h6>{{$techician->company->name}}
                            </div>
                        </div>
                    </div>

                @endforeach
        
        </div>
    </div>

@endsection
