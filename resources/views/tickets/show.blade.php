@extends('layouts.layout')
@section('header')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">{{ $ticket->title }}</h5>
                <div class="clearfix"></div>
            </div>


            <div class="card-body">
                <p><strong>status</strong>:{{$ticket->status ? 'Pending' : 'Answered'}}</p>
                <p>{{$ticket->description}}</p>
                <img src="{{URL::to('/')}}/images/{{$ticket->image}}" class="img-thumbnail" width="200px">
<br>
                <a href="{{action('TicketController@edit',$ticket->slug)}}"
                   class="btn btn-info float-left mr-2">Edit</a>
                <form method="post" action="{{action('TicketController@destroy', $ticket->slug)}}" class="float-left">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>

        @foreach($comments as $comment)
            <div class="card mt-3">
                <div class="card-body">
                    {{$comment->content}}
                </div>
            </div>
        @endforeach
        <div class="card mt-2">
            <form method="post" action="/comments">

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{error}}</p>
                @endforeach
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                @csrf

                <input type="hidden" name="post_id" value="{{$ticket->id}}"></input>
                <fieldset>
                    <legend class="ml-3">Reply</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" row="3" id="content" name="content"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
@endsection
