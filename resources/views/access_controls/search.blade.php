@extends('layouts.master')
@section('content')

    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2> Access Control </h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Company Name</th>
                    <th>Access Control type</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $access)
                    <tr>
                        <td>{{$access->location}}</td>
                        <td>{{$access->company_name}}</td>
                        <td>{{$access->access_control}}</td>
                        <td>{{$access->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
