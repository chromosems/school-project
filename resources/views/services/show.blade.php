@extends('layouts.layout')

@section('content')

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
