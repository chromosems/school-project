@extends('layouts.layout')

@section('content')

    <div class="col-12 pt-5">
        @foreach ($services as $service)
            <div class="card mb-2">
                <div class="card-body">
                    <p><a href="/services/{{ $service->slug }}">{{ $service->name }}</a></p>
                    <span>8 Tickets</span>
                </div>
            </div>    
        @endforeach
    </div>

@endsection

