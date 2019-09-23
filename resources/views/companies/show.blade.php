@extends('layouts.layout')
@section('content')

<div class="col-12 pt-5">

    <div class="card mb-2">
        <div class="card-body">
            <p><strong>Company Description</strong></p>
            {{$companies->bio}}
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
        <p><strong>Company contact / telephone</strong></p>
            {{$companies->contact}}
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
        <p><strong>Location</strong></p>
            {{$companies->location}}
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
        <p><strong>Service</strong></p>
            {{$companies->offer}}
        </div>
    </div>

    
@endsection