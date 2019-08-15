@extends('layouts.layout')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="card">
    <div class="card-header card-title">Section title</div>
    <div class="card-body">
       
        <p> Welcome A board, to begin Register as a customer for record purposes <a href="{{route('customers.create')}}">Here
            </a></p>

        <p> <span class="text-green">If you already have A customer account please proceed and create a ticket briefly decscribing the challange <a href="/services">Create a ticket from the services</a></span></p>
    </div>
</div>

@endsection