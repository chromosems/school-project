@extends('layouts.master')

@section('header')

    @include('layouts.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Brokers'])

@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Brokers:Add</div>

        <div class="panel-body">
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
                        <a href="{{route('brokers.index')}}" style="height: 50px;width: 200px;" class="btn btn-info
                        text-right "
                           type="button">
                            View
                        </a>
                    </div>
                </div>
                <br>
                <form action="{{route('brokers.store')}}" method="post" enctype="multipart/form-data"><!-- form begins
                here -->
                    @csrf
                    <div class="row">
                        <h3>Broker Information</h3>
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Date </label>
                                <input type="date" class="form-control" name="date"  placeholder="date">
                            </div>

                            <div class="form-group has-success">
                                <label>Brokers Name</label>
                                <input type="text" class="form-control" name="brokers_name" placeholder="Names">
                            </div>

                            <div class="form-group has-success">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact" placeholder="contact">
                            </div>

                            <div class="form-group has-success">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="@info.com">
                            </div>

                            <h3>House Details</h3>

                        </div>


                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" placeholder="location">

                            </div>


                            <div class="form-group has-success">
                                <label>District</label>
                                <input type="text" name="district" class="form-control" placeholder="District">
                            </div>


                        <div class="form-group has-success">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" placeholder="price">
                        </div>


                        <div class="form-group has-success">
                            <label>House Description</label>
                            <textarea type="text" name="description" id="description"
                                      class="form-control"
                                      rows="15  " cols="20" ;></textarea>
                        </div>
                    </div>


                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- form close --->

            </div>
        </div>
    </div>

@endsection
