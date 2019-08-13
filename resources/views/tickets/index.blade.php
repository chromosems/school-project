@extends('layouts.layout')
@section('header')
@section('content')

    <div class="container col-md-12 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Tickets</h5>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('tickets.create')}}" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus-circle"></i>
                        create ticket
                    </a>
                </div>
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
                            <th>TITLE</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{$ticket->id}}</td>
                                <td><a href="{{action('TicketController@show', $ticket->slug)}}">{{$ticket->title}}</a>
                                </td>
                                <td>{{$ticket->status ?'Pending' :'Answered' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

@endsection
