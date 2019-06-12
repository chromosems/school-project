@extends('layouts.master')
@section('content')

    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2> Brokers </h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Brokers Name</th>
                    <th>price</th>
                    <th>contact</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $search)
                    <tr>
                        <td>{{$search->location}}</td>
                        <td>{{$search->brokers_name}}</td>
                        <td>{{$search->price}}</td>
                        <td>{{$search->contact}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
