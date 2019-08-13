@extends('layouts.layout')
@section('header')

@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ticket</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif
    <!-- <hr>
    <div class="container col-md-12 col-md-offset-2" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html"> -->
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Create a Ticket</h5>
                <div class="clearfix"></div>
            </div>


            <div class="card-body">
                <form action="{{route('tickets.store')}}" method="post"   enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="title" class="col-lg-12" control-label>Title</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title" class="col-lg-12" control-label>location</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="location" name="location" placeholder="location">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-lg-12" control-label>Description</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                                <span class="help-block">Feel free to ask more Questions</span>
                            </div>
                        </div>
                        
                        <div class="form-group has-success d-flex flex-column">
                                    <label class="col-sm-6 text-right"></label>
                                    <input type="file" name="image" class="py-3">
                                </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                           
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
