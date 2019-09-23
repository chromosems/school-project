@extends('layouts.layout')


@section('content')
<br>
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
</div><br />
@endif

@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div><br />
@endif

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Create a Ticket</h5>
        <div class="clearfix"></div>
    </div>


    <div class="card-body">
        <form action="{{route('tickets.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="title" class="col-lg-12" control-label>Service</label>
                    <div class="col-lg-12">
                        <select id="service" name="title" class="form-control">
                            @foreach(App\Http\services\Service::all() as $service)
                            <option value="{{$service}}">{{$service}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="department" class="col-lg-12" control-label>Department</label>
                    <div class="col-lg-12">
                        <select class="department" name="department">
                            <option value="Technical">Technical</option>
                            <option value="Sales">Sales</option>
                            <option value="Management">Management</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="title" class="col-lg-12" control-label>Your location</label>
                    <div class="col-lg-12">
                        <select id="location" name="location" class="form-control">
                            @foreach (App\Http\locations\Location::all() as $country)
                            <option value="{{ $country}}">{{$country}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="content" class="col-lg-12" control-label>Description</label>
                    <div class="col-lg-12">
                        <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                        <span class="help-block">Feel free to ask more Questions</span>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="deny" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>


                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection