@extends('layouts.master')
@section('content')

    <div class="container">
        @if(isset($cctv))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2> Users </h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Company Name</th>
                    <th>Fire Alarm Type</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cctv as $cctvs)
                    <tr>
                        <td>{{$cctvs->location}}</td>
                        <td>{{$cctvs->company_name}}</td>
                        <td>{{$cctvs->fire_alarm_type}}</td>
                        <td>{{$cctvs->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
