@extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Fire Alarm'])

@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2">Fire Alarm</h3>
    </div>
    <div class="card">
        <div class="card-header">Fire Alarm: Add</div>

        <div class="card-body">
            <div class="col-md-12">
                <!--notification alert -->
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
            <!-- End of notification alert -->

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a href="{{route('fire_alarms.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('fire_alarms.store')}}" method="post" enctype="multipart/form-data"><!-- form
                begins
                here -->
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Date </label>
                                <input type="date" class="form-control" placeholder="date"
                                       name="date">
                            </div>

                            <div class="form-group has-success">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Company name">
                            </div>

                            <div class="form-group has-success">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" placeholder="location">

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="form-group has-success">
                                <label>Fire alarm type</label>
                                <select name="fire_alarm_type" class="form-control">
                                    <option value="Conventional Fire Alarms">Conventional fire alarms</option>
                                    <option value="Accessible">Accessible</option>

                                </select>
                            </div>

                            <div class="form-group has-success">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="phone number">
                            </div>

                            <div class="form-group has-success">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>

                        </div>


                        <br>


                    </div>

                    <div class="form-group has-success">
                        <label>Company Bio</label>
                        <textarea type="text" name="bio" id="bio"
                                  class="form-control"
                                  rows="10" cols="30" ;></textarea>
                    </div>

                    <div class="form-group has-success d-flex flex-column">
                        <label class="col-sm-6 text-right">Select Profile Image</label>
                        <input type="file" name="image" class="py-3">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form><!-- form close --->
            </div>
        </div>
    </div>
@endsection
