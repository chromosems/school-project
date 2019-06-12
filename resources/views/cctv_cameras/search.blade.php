@extends('layouts.master')
@section('content')

    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2> Cctv cameras </h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Company Name</th>
                    <th>Cameras Type</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $search)
                    <tr>
                        <td>{{$search->location}}</td>
                        <td>{{$search->company_name}}</td>
                        <td>{{$search->cameras}}</td>
                        <td>{{$search->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
