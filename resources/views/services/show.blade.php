@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">


    @foreach($service->tickets as $ticket)
        <div class="card">
            <div class="card-header">{{ $ticket->title }}</div>

            <div class="card">
                <div class="card-body">
                    <h2>
                        <b>Description:</b>
                        {{ $ticket->description }}
                    </h2>
                </div>
                            
            </div>
        </div>
                                
    @endforeach
    
@endsection
