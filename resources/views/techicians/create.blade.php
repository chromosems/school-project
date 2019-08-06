@extends('layouts.layout')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Technicians'])

@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Technicians</h1>
    </div>

    <div class="card">
        <div class="card-header">Technician:Add</div>

        <div class="card-body">
            <div class="col-md-12">
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

                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <a href="{{route('technicians.index')}}"  class="btn
                            btn-info
                        text-right "
                               type="button">
                                View
                            </a>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('technicians.store')}}" method="post" enctype="multipart/form-data"><!-- form
                    begins here -->
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-success">
                                    <label>Date </label>
                                    <input type="date" class="form-control" placeholder="date"
                                           name="date">
                                </div>

                                <div class="form-group has-success">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="First name">
                                </div>

                                <div class="form-group has-success">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="Last name">
                                </div>
                                <div class="form-group has-success">
                                    <label>Position</label>
                                    <input type="text" class="form-control" name="position"
                                           placeholder="position">
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group has-success">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number"
                                           placeholder="phone number">
                                </div>

                               
                                <div class="form-group has-success">
                                    <label>Select Company</label>
                                    <select class="form-control" name="company" required>
                                        <option value="">--Select company--</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group has-success">
                                    <label>Job Type</label>
                                    <input type="text" class="form-control" name="job_type">
                                </div>


                                <div class="form-group has-success d-flex flex-column">
                                    <label class="col-sm-6 text-right">Select Profile Image</label>
                                    <input type="file" name="image" class="py-3">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
