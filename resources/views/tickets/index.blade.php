@extends('layouts.layout')
@section('header')
@section('content')

    <div class="container col-md-12 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Tickets</h5>
                <div class="clearfix"></div>
            </div>

            
            <div class="card-body mt-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                @if ($tickets->isEmpty())
                    <p>There are no Tickets</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>DEPARTMENT</th>
                            <th>SERVICE</th>
                            <th>DESCRIPTION</th>
                            <th>STATUS</th>
                            <th>LAST UPDATE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{$ticket->id}}</td>
                                <td><strong>{{$ticket->department}}</strong></td>
                                 <td><a href="{{action('TicketController@show', $ticket->slug)}}">{{$ticket->title}}</a> 
                                </td>
                                <td>{{$ticket->description}}</td>
                                <td><span style="color:lime">{{$ticket->status ?'Pending' :'Answered' }}</td>
                                <td>{{$ticket->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
                

        </div>

@endsection
