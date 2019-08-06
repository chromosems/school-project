@extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => $service->name])

@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="card">
        @foreach($service->customers as $ticket)
        <div class="row">
          <div class="col-sm-12">
            <div class="card-header">{{ $ticket->first_name }}</div>


                        <div class="card">
                            <div class="card-body"><h2><b>Description:</b>{{ $ticket->problem_description }}</h2></div>
                           
                    </div>
                </div>
            </div>
                
            
        @endforeach
    
 </div>
@endsection
