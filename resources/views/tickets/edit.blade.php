@extends('layouts.layout')
@section('title','Edit a ticket')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header">
            <h5 class="float-left">Edit ticket</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
             <form  action="{{route('tickets.update' , $ticket->id)}}"  method="POST">
                @csrf
                @method('PUT')

                @foreach($errors->all() as $error)
                <p class=" alert alert-danger">{{$error}}</p>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-12" control-label>title</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{$ticket->title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-12" control-label>location</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="location" name="location" placeholder="location" value="{{$ticket->location}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-12" control-label>Description</label>
                        <div clas="col-lg-12">
                            <textarea class="form-control" row="3" id="description" name="description">{{$ticket->description}}</textarea>
                            <span class="help-block">feel free to ask us any questions</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="status"{{$ticket->status?"":"checked"}}>close this ticket?
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection